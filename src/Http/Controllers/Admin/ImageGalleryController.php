<?php

namespace Webkul\ImageGallery\Http\Controllers\Admin;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Event;
use App\Http\Controllers\Controller;
use Webkul\ImageGallery\DataGrids\ImageGalleryDataGrid;
use Webkul\ImageGallery\Repositories\ImageGalleryRepository;

class ImageGalleryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected ImageGalleryRepository $imageGalleryRepository) 
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(ImageGalleryDataGrid::class)->toJson();
        }

        return view('image-gallery::admin.manage-images.index');
    }

    /**
     * Create image gallery.
     * 
     *  @return \Illuminate\View\View
     */
    public function create()
    {
        $imageGalleries = $this->imageGalleryRepository->getCategoryTree(null, ['id']);

        return view('image-gallery::admin.manage-images.create')->with('imageGalleries', $imageGalleries);
    }

    /**
     * Store a newly created images gallery.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $this->validate(request(), [
           'title' => ['required', 'unique:image_galleries,title'],
        ]);

        if (! request()->has('image')) {
            $this->validate(request(), [
                'image[files]' => 'required|mimes:bmp,jpeg,jpg,png,webp',
            ], [
                'image[files]' => trans('image-gallery::app.admin.image-gallery.manage-images.image-required'),
            ]);
        }

        $data = request()->all();

        if (! isset($data['status']) ) {
            $data['status'] = 0;
        }

        $this->imageGalleryRepository->create($data);

        session()->flash('success', trans('image-gallery::app.admin.image-gallery.manage-images.create-success'));

        return redirect()->route('admin.image-gallery.manage-images.index');
    }
    
    /**
     * Show the form for editing the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $category = $this->imageGalleryRepository->findOrFail($id);

        $imageUrl = asset("storage/" . $category->image);

        $categories = $this->imageGalleryRepository->getCategoryTreeWithoutDescendant($id);

        return view('image-gallery::admin.manage-images.edit')->with([
            'category'   => $category,
            'imageUrl'   => $imageUrl,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
        $this->validate(request(), [
            'title'        => ['required', 'unique:image_galleries,title,' . $id],
            'description'  => 'required',
        ]);

        if (! request()->has('image')) {
            $this->validate(request(), [
                'image[files]' => 'required|mimes:bmp,jpeg,jpg,png,webp'
            ],[
                'image[files]' => trans('image-gallery::app.admin.image-gallery.manage-images.image-required'),
            ]);
        }

        $data = request()->all();

        if (! isset($data['status']) ) {
            $data['status'] = 0;
        }
        
        $this->imageGalleryRepository->update($data, $id);

        session()->flash('success', trans('image-gallery::app.admin.image-gallery.manage-images.update-success'));

        return redirect()->route('admin.image-gallery.manage-images.index');
    }
    
    /**
     * Remove the specified resources from database.
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function massDestroy()
    {
        $this->imageGalleryRepository->whereIn('id', request()->input('indices'))->delete();

        return new JsonResponse([
            'message' => trans('image-gallery::app.admin.image-gallery.manage-images.mass-delete-success')
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $this->imageGalleryRepository->findOrFail($id);

            $this->imageGalleryRepository->delete($id);

            return new JsonResponse([
                'message' =>  trans('image-gallery::app.admin.image-gallery.manage-images.delete-success'),
            ], 200);
        } catch(\Exception $e) {
            return new JsonResponse([
                'message' =>  trans('image-gallery::app.admin.image-gallery.manage-images.delete-failed'),
            ], 400);
        }      
    }

    /**
     * Update the specified resources from database.
     *
     * @return  \Illuminate\Http\JsonResponse
     */
    public function massUpdate()
    {
        $imageGalleryIds = request()->input('indices');

        foreach ($imageGalleryIds as $imageGalleryId) {
            Event::dispatch('image-gallery.images.update.before', $imageGalleryId);

            $this->imageGalleryRepository->update([
                'status' => request()->input('value'),
            ], $imageGalleryId);

            Event::dispatch('image-gallery.images.update.after', $imageGalleryId);
        }

        return new JsonResponse([
            'message' => trans('image-gallery::app.admin.image-gallery.manage-images.mass-update-success')
        ], 200);
    }
}