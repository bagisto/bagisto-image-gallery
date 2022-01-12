<?php

namespace Webkul\ImageGallery\Http\Controllers\Admin;

use Illuminate\Support\Facades\Event;
use Webkul\ImageGallery\Repositories\ImageGalleryRepository;

class ImageGalleryController extends Controller
{
    
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    protected $imageGalleryRepository;

    

    public function __construct(
        ImageGalleryRepository $imageGalleryRepository
    )
    {
        $this->imageGalleryRepository = $imageGalleryRepository;

        $this->_config = request('_config');

        $this->middleware('admin');
    }

    
    public function index()
    {
        return view($this->_config['view']);
    }

    
    public function create()
    {
        $imageGalleries = $this->imageGalleryRepository->getCategoryTree(null, ['id']);

        return view($this->_config['view'], compact('imageGalleries'));
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|unique:image_galleries,title',
            'image.*'    => 'required|mimes:jpeg,bmp,png,jpg',
        ]);

        $imageGallery = $this->imageGalleryRepository->create(request()->all());
        session()->flash('success', trans('Image Added successfully.', ['name' => 'ImageGallery']));

        return redirect()->route($this->_config['redirect']);
    }


    
    public function edit($id)
    {
        
        $category = $this->imageGalleryRepository->findOrFail($id);

        $categories = $this->imageGalleryRepository->getCategoryTreeWithoutDescendant($id);

        return view($this->_config['view'], compact('category' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = request()->all();
        
        if($data['image']['image_0'] == "")
        {
            $this->validate(request(), [
                'title' => ['required', 'unique:image_galleries,title,' . $id, new \Webkul\Core\Contracts\Validations\Code],
            ]);
        }
        if(!$data['image']['image_0'] == "")
        {
            $this->validate(request(), [
                'title' => ['required', 'unique:image_galleries,title,' . $id, new \Webkul\Core\Contracts\Validations\Code],
                'image.*'    => 'required|mimes:jpeg,bmp,png,jpg',
            ]);
        }

        
        
        $this->imageGalleryRepository->update($data, $id);

        session()->flash('success', 'Image updated successfully.');

        return redirect()->route($this->_config['redirect']);
    }

    
    public function destroy($id)
    {
        $imageGallery = $this->imageGalleryRepository->findOrFail($id);
   
            try {

                $this->imageGalleryRepository->delete($id);

                session()->flash('success', 'Image deleted successfully');

                return response()->json(['message' => true], 200);
            } catch(\Exception $e) {
                session()->flash('error', 'Unable to delete this image');
            }      

        return response()->json(['message' => false], 400);
    }

    public function massDestroy()
    {
        $suppressFlash = false;

        $imageGalleryIds = explode(',', request()->input('indexes'));

            foreach ($imageGalleryIds as $key => $value) {
                try {
                    $this->imageGalleryRepository->delete($value);
                } catch(\Exception $e) {
                    $suppressFlash = true;
                    continue;
                }
            }
            if (! $suppressFlash) {
                session()->flash('success', 'Selected images deleted successfully.');
            } else {
                session()->flash('info', 'Problem in deleting some images');
            }
            return redirect()->route($this->_config['redirect']);
        
    }

    

    /**
     * Mass updates the sellers
     *
     * @return response
     */
    public function massUpdate()
    {
        $updateOption = request()->input('update-options');

        $imageGallerys = explode(',', request()->input('indexes'));

        foreach ($imageGallerys as $imageGalleryId) {
            
            $imageGallery = $this->imageGalleryRepository->find($imageGalleryId);

            if (! $imageGallery)
                continue;

            $imageGallery->update(['status' => $updateOption]);
        }

        session()->flash('success', 'Selected images updated successfully.');

        return redirect()->route($this->_config['redirect']);
    }

    
}
