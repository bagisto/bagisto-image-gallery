<?php

namespace Webkul\ImageGallery\Http\Controllers\Admin;

use Illuminate\Support\Facades\Event;
use Webkul\ImageGallery\Repositories\ManageGroupRepository;
use Illuminate\Support\Facades\DB;


class ManageGroupController extends Controller
{
    
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    protected $manageGroupRepository;

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
        ManageGroupRepository $manageGroupRepository
    )
    {
        $this->manageGroupRepository = $manageGroupRepository;

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
        $manageGroups = $this->manageGroupRepository->getCategoryTree(null, ['id']);
        $imageGalleries = DB::table('manage_galleries')->get();

        return view($this->_config['view'], compact('manageGroups', 'imageGalleries'));
    }

    public function store()
    {
        $this->validate(request(), [
            'group_code' => ['required', 'unique:manage_groups,group_code', new \Webkul\Core\Contracts\Validations\Code],
        ]);

        $data = request()->all();

        if(!isset($data['extradata']))
        {
            $data['extradata'] = rtrim($data['extradata'], ",");
            $data['extradata'] = explode(',', $data['extradata']);
            $data['gallery_ids'] = $data['extradata'];

            $idcounts = (array_count_values($data['gallery_ids']));

            $data['gallery_ids'] =  array_unique($data['gallery_ids']);
        
            foreach($data['gallery_ids'] as $idcount)
            {
                if($idcounts[$idcount]%2==0)
                {
                    $key = array_search($idcount, $data['gallery_ids']);
                    unset($data['gallery_ids'][$key]);

                }
            }

        }
        
        if(!empty($data['gallery_ids']))
        {

        $image_ids = implode(',', $data['gallery_ids']);
        $data['gallery_ids'] = $image_ids;
        
        }

        $manageGroup = $this->manageGroupRepository->create($data);
        session()->flash('success', trans('Group Created successfully.', ['name' => 'ManageGroup']));

        return redirect()->route($this->_config['redirect']);
    }


    public function edit($id)
    {
        $category = $this->manageGroupRepository->findOrFail($id);

        $categories = DB::table('manage_galleries')->get();

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
        $this->validate(request(), [
            'group_code' => ['required', 'unique:manage_groups,group_code,' . $id, new \Webkul\Core\Contracts\Validations\Code],
        ]);
        $data = request()->all();
        if(isset($data['extradata']))
        {
            
            $data['extradata'] = explode(',', $data['extradata']);
            
            $data['gallery_ids'] = $data['extradata'];
            if($data['gallery_ids'][0]=='')
            {
                array_shift($data['gallery_ids']);
            }
            
            $idcounts = (array_count_values($data['gallery_ids']));

            $data['gallery_ids'] =  array_unique($data['gallery_ids']);
        
            foreach($data['gallery_ids'] as $idcount)
            {
                if($idcounts[$idcount]%2==0)
                {
                    $key = array_search($idcount, $data['gallery_ids']);
                    unset($data['gallery_ids'][$key]);

                }
            }
            if (empty($data['gallery_ids'])) {
                $data['gallery_ids'] = '';
             }
        }
        
        if(!empty($data['gallery_ids']))
        {
            
        $image_ids = implode(',', $data['gallery_ids']);
        $data['gallery_ids'] = $image_ids;
        
        }

        $this->manageGroupRepository->update($data, $id);

        session()->flash('success', 'Group updated successfully.');

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
        $manageGroup = $this->manageGroupRepository->findOrFail($id);

        
            try {
                //Event::dispatch('catalog.category.delete.before', $id);

                $this->manageGroupRepository->delete($id);

                //Event::dispatch('catalog.category.delete.after', $id);

                session()->flash('success', 'Delete successfully');

                return response()->json(['message' => true], 200);
            } catch(\Exception $e) {
                session()->flash('error', 'failure occure during deleting group.');
            }
        

        return response()->json(['message' => false], 400);
    }
}
