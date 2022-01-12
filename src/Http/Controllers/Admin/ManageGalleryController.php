<?php

namespace Webkul\ImageGallery\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Webkul\ImageGallery\Repositories\ManageGalleryRepository;
use Webkul\ImageGallery\Repositories\ImageGalleryRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class ManageGalleryController extends Controller
{
    
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    protected $manageGalleryRepository;
    
    protected $imageGalleryRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('admin');

    //     $this->_config = request('_config');
    // }
    public function __construct(
        ManageGalleryRepository $manageGalleryRepository,
        ImageGalleryRepository $imageGalleryRepository
    )
    {
        $this->manageGalleryRepository = $manageGalleryRepository;
        $this->imageGalleryRepository = $imageGalleryRepository;

        $this->_config = request('_config');

        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view($this->_config['view']);
    }

    
    public function create()
    {
        $manageGalleries = $this->manageGalleryRepository->getCategoryTree(null, ['id']);
         

        $imageGalleries = DB::table('image_galleries')->where('status', 1)->get();

        //  return datatables()->of(DB::table('image_galleries'))->toJson();

        return view($this->_config['view'], compact('manageGalleries' , 'imageGalleries'));
    }

    public function store()
    {
        $this->validate(request(), [
            'gallery_title' => 'required|unique:manage_galleries,gallery_title',
            'gallery_code' => 'required|unique:manage_galleries,gallery_code',
        ]);

        $data = request()->all();

        if(!isset($data['extradata']))
        {
            $data['extradata'] = rtrim($data['extradata'], ",");
            $data['extradata'] = explode(',', $data['extradata']);
            $data['image_ids'] = $data['extradata'];

            $idcounts = (array_count_values($data['image_ids']));

            $data['image_ids'] =  array_unique($data['image_ids']);
        
            foreach($data['image_ids'] as $idcount)
            {
                if($idcounts[$idcount]%2==0)
                {
                    $key = array_search($idcount, $data['image_ids']);
                    unset($data['image_ids'][$key]);

                }
            }

        }
        
        if(!empty($data['image_ids']))
        {

        $image_ids = implode(',', $data['image_ids']);
        $data['image_ids'] = $image_ids;
        
        }

        if(!isset($data['thumb']))
        {
            $data['thumbnail_image_id'] = $data['thumb'];
        }
        
        $manageGallery = $this->manageGalleryRepository->create($data);
        session()->flash('success', trans('Gallery Added successfully.', ['name' => 'ManageGallery']));

        return redirect()->route($this->_config['redirect']);
    }


    public function edit($id)
    {
        $category = $this->manageGalleryRepository->findOrFail($id);

        $categories = DB::table('image_galleries')->where('status', 1)->get();

        
        return view($this->_config['view'], compact('category' , 'categories'));
    }


    public function update($id)
    {
        $this->validate(request(), [
            'gallery_title' => ['required', 'unique:manage_galleries,gallery_title,' . $id, new \Webkul\Core\Contracts\Validations\Code],
            'gallery_code' => ['required', 'unique:manage_galleries,gallery_code,' . $id, new \Webkul\Core\Contracts\Validations\Code],
        ]);

        $data = request()->all();

        if(isset($data['extradata']))
        {
            
            $data['extradata'] = explode(',', $data['extradata']);
            
            $data['image_ids'] = $data['extradata'];
            if($data['image_ids'][0]=='')
            {
                array_shift($data['image_ids']);
            }
            
            $idcounts = (array_count_values($data['image_ids']));

            $data['image_ids'] =  array_unique($data['image_ids']);
        
            foreach($data['image_ids'] as $idcount)
            {
                if($idcounts[$idcount]%2==0)
                {
                    $key = array_search($idcount, $data['image_ids']);
                    unset($data['image_ids'][$key]);

                }
            }

            if (empty($data['image_ids'])) {
                $data['image_ids'] = '';
             }
        }

        if(!empty($data['image_ids']))
        {

        $image_ids = implode(',', $data['image_ids']);
        $data['image_ids'] = $image_ids;
        
        }

        if(!isset($data['thumb']))
        {
            $data['thumbnail_image_id'] = $data['thumb'];
        }
        
        $this->manageGalleryRepository->update($data, $id);

        session()->flash('success', 'gallery updated successfully.');

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manageGallery = $this->manageGalleryRepository->findOrFail($id);

        
            try {

                $this->manageGalleryRepository->delete($id);

                session()->flash('success', 'Gallery deleted successfully');

                return response()->json(['message' => true], 200);
            } catch(\Exception $e) {
                session()->flash('error', 'failure occure during deleting image.');
            }
        

        return response()->json(['message' => false], 400);
    }


    public function massDestroy()
    {
        $manageGalleryIds = explode(',', request()->input('indexes'));

        foreach ($manageGalleryIds as $manageGalleryId) {

            $data = $this->manageGalleryRepository->findOneWhere(['id' => $manageGalleryId]);

            $id = $data->id;

            $this->manageGalleryRepository->delete($id);
        }
        session()->flash('success', 'Selected Galleries deleted successfully.');

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Mass updates the sellers
     *
     * @return response
     */
    public function massUpdate()
    {
        $data = request()->all();

        if (! isset($data['massaction-type']) || ! $data['massaction-type'] == 'update')
            return redirect()->back();

        $manageGallerys = explode(',', $data['indexes']);

        foreach ($manageGallerys as $manageGalleryId) {
            $manageGallery = $this->manageGalleryRepository->findOneByField('id', $manageGalleryId);

            if (! $manageGallery)
                continue;

            $this->manageGalleryRepository->update([
                    'status' => $data['update-options']
                ], $manageGallery->id);
        }

        session()->flash('success', 'Selected Galleries updated successfully.');

        return redirect()->route($this->_config['redirect']);
    }
}
