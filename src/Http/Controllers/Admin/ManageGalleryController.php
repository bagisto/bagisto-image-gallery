<?php

namespace Webkul\ImageGallery\Http\Controllers\Admin;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Webkul\Core\Rules\Code;
use Webkul\ImageGallery\DataGrids\ImageGalleryForManageImageDataGrid;
use Webkul\ImageGallery\DataGrids\ManageGalleryDataGrid;
use Webkul\ImageGallery\Repositories\ImageGalleryRepository;
use Webkul\ImageGallery\Repositories\ManageGalleryRepository;

class ManageGalleryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected ImageGalleryRepository $imageGalleryRepository,
        protected ManageGalleryRepository $manageGalleryRepository,
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(ManageGalleryDataGrid::class)->toJson();
        }

        return view('image-gallery::admin.manage-gallery.index');
    }
    
    /**
     * Create image gallery.
     * 
     *  @return \Illuminate\View\View
     */
    public function create()
    {
        if (request()->ajax()) {
            return app(ImageGalleryForManageImageDataGrid::class)->toJson();
        }

        return view('image-gallery::admin.manage-gallery.create');
    }

    /**
     * Store a newly created images gallery.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $this->validate(request(), [
            'gallery_title' => ['required', 'unique:manage_galleries,gallery_title'],
            'gallery_code'  => ['required', 'min:5', 'max:5', 'unique:manage_galleries,gallery_code,', new Code],
        ]);

        $data = request()->all();

        if (! isset($data['status']) ) {
            $data['status'] = 0;
        }
        
        if (isset($data['image_ids'])) {
            $imageIds = implode(',', $data['image_ids']);

            $data['image_ids'] = ltrim($imageIds, ',');
        }

        $this->manageGalleryRepository->create($data);

        session()->flash('success', trans('image-gallery::app.admin.image-gallery.manage-gallery.create-success'));

        return redirect()->route('admin.image-gallery.manage-gallery.index');
    }
 
    /**
     * Show the form for editing the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $category = $this->manageGalleryRepository->findOrFail($id);

        $imageGalleries = $this->imageGalleryRepository->where('status', 1)->get();
                
        return view('image-gallery::admin.manage-gallery.edit')->with([
            'category'       => $category , 
            'imageGalleries' => $imageGalleries,
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
            'gallery_title' => ['required', 'unique:manage_galleries,gallery_title,' . $id],
            'gallery_code'  => ['required', 'min:5', 'max:5', 'unique:manage_galleries,gallery_code,'. $id, new Code],
        ]);

        $data = request()->all();

        if (! isset($data['status']) ) {
            $data['status'] = 0;
        }

        if (isset($data['image_ids'])) {
            $imageIds = implode(',', $data['image_ids']);

            $data['image_ids'] = ltrim($imageIds, ',');
        }

        if (! isset($data['image_ids'])) {
            $data['image_ids'] = '';
        }

        $this->manageGalleryRepository->update($data, $id);

        session()->flash('success', trans('image-gallery::app.admin.image-gallery.manage-gallery.create-success'));

        return redirect()->route('admin.image-gallery.manage-gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $this->manageGalleryRepository->findOrFail($id);

            $this->manageGalleryRepository->delete($id);

            return new JsonResponse([
                'message' =>  trans('image-gallery::app.admin.image-gallery.manage-images.delete-success'),
            ]);
        } catch(\Exception $e) {
            return new JsonResponse([
                'message'  =>  trans('image-gallery::app.admin.image-gallery.manage-images.delete-failed'),
            ]);
        }
    }

    /**
     * Remove the specified resources from database.
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function massDestroy()
    {
        $this->manageGalleryRepository->whereIn('id', request()->input('indices'))
            ->delete();

        return new JsonResponse([
            'message' => trans('image-gallery::app.admin.image-gallery.manage-gallery.mass-delete-success')
        ], 200);
    }

    /**
     * Update the specified resources from database.
     *
     * @return  \Illuminate\Http\JsonResponse
     */
    public function massUpdate()
    {
        $manageGalleryIds = request()->input('indices');

        foreach ($manageGalleryIds as $manageGalleryId) {
            $this->manageGalleryRepository->update([
                'status' => request()->input('value'),
            ], $manageGalleryId);
        }

        return new JsonResponse([
            'message' => trans('image-gallery::app.admin.image-gallery.manage-gallery.mass-update-success')
        ], 200);
    }
}