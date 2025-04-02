<?php

namespace Webkul\ImageGallery\Http\Controllers\Admin;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Webkul\Core\Rules\Code;
use Webkul\ImageGallery\DataGrids\ManageGalleryForGroupsDatagrid;
use Webkul\ImageGallery\DataGrids\ManageGroupDataGrid;
use Webkul\ImageGallery\Repositories\ImageGalleryRepository;
use Webkul\ImageGallery\Repositories\ManageGalleryRepository;
use Webkul\ImageGallery\Repositories\ManageGroupRepository;

class ManageGroupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected ImageGalleryRepository $imageGalleryRepository, 
        protected ManageGalleryRepository $manageGalleryRepository,
        protected ManageGroupRepository $manageGroupRepository,
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
            return app(ManageGroupDataGrid::class)->toJson();
        }

        return view('image-gallery::admin.manage-groups.index');
    }

    /**
     * Create image groups.
     * 
     *  @return \Illuminate\View\View
     */
    public function create()
    {
        if (request()->ajax()) {
            return app(ManageGalleryForGroupsDatagrid::class)->toJson();
        }

        return view('image-gallery::admin.manage-groups.create');
    }
    
    /**
     * Store newly created resources.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $this->validate(request(), [
            'group_code' => ['required', 'min:5', 'max:5', 'unique:manage_groups,group_code', new Code],
        ]);

        $data = request()->all();

        if (! isset($data['status']) ) {
            $data['status'] = 0;
        }

        if (isset($data['gallery_ids'])) {
            $data['gallery_ids'] = implode(',', $data['gallery_ids']);

            $data['gallery_ids'] = ltrim($data['gallery_ids'], ',');
        }

        $this->manageGroupRepository->create($data);

        session()->flash('success', trans('image-gallery::app.admin.image-gallery.manage-gallery.create-success'));

        return redirect()->route('admin.image-gallery.manage-groups.index');
    }

    /**
     * Edit create resources.
     * 
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $category = $this->manageGroupRepository->findOrFail($id);
        
        return view('image-gallery::admin.manage-groups.edit')->with([
            'category'  => $category,
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
            'group_code' => ['required', 'min:5', 'max:5', 'unique:manage_groups,group_code,' . $id, new Code],
        ]);
         
        $data = request()->all();
    
        if (! isset($data['status']) ) {
            $data['status'] = 0;
        }

        if (request()->has('gallery_ids')) {
            $data['gallery_ids'] = implode(',', $data['gallery_ids']);
            
            $data['gallery_ids'] = ltrim($data['gallery_ids'], ',');
        }

        $this->manageGroupRepository->update($data, $id);

        session()->flash('success', trans('image-gallery::app.admin.image-gallery.manage-gallery.update-success'));

        return redirect()->route('admin.image-gallery.manage-groups.index');
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
            $this->manageGroupRepository->delete($id);

            return new JsonResponse([
                'message'=> trans('image-gallery::app.admin.image-gallery.manage-groups.delete-success')
            ]);
        } catch(\Exception $e) {
            return new JsonResponse([
                'message'=> trans('image-gallery::app.admin.image-gallery.manage-groups.delete-failed')
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
        $this->manageGroupRepository->WhereIn('id', request()->input('indices'))->delete();

        return new JsonResponse([
            'message' => trans('image-gallery::app.admin.image-gallery.manage-groups.mass-delete-success')
        ], 200);
    }

    /**
     * Update the specified resources from database.
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function massUpdate()
    {
        $manageGroupIds = request()->input('indices');

        foreach ($manageGroupIds as $manageGroupId) {
            $manageGroup = $this->manageGroupRepository->find($manageGroupId);
                
            if ($manageGroup) {
                $this->manageGroupRepository->update([
                    'status' => request()->input('value'),
                ], $manageGroupId);
            }
        }

        return new JsonResponse([
            'message' => trans('image-gallery::app.admin.image-gallery.manage-groups.mass-update-success')
        ], 200);
    }
}