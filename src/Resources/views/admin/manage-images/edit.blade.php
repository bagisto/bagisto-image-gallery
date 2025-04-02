<x-admin::layouts>
    <!--Page title -->
    <x-slot:title>
        @lang('image-gallery::app.admin.image-gallery.manage-images.edit.page-title')
    </x-slot>

    <x-admin::form
        action="{{ route('admin.image-gallery.manage-images.update', $category->id)}}"
        method="PUT"
        enctype="multipart/form-data"
    >
       <!-- Page Header -->
       <div class="grid gap-2.5">
            <div class="flex items-center justify-between gap-4 max-sm:flex-wrap">
                <div class="grid gap-1.5">
                    <p class="text-xl font-bold leading-6 text-gray-800 dark:text-white">
                        @lang('image-gallery::app.admin.image-gallery.manage-images.edit.page-title')
                    </p>
                </div>

                <div class="flex items-center gap-x-2.5">
                    <a
                        href="{{ route('admin.image-gallery.manage-images.index') }}"
                        class="transparent-button hover:bg-gray-200 dark:text-white dark:hover:bg-gray-800"
                    >
                        @lang('image-gallery::app.admin.image-gallery.manage-images.edit.back-btn')
                    </a>

                    <button class="primary-button">
                        @lang('image-gallery::app.admin.image-gallery.manage-images.edit.save-btn')
                    </button>
                </div>
            </div>
        </div>

        <!-- body content -->
        <div class="mt-3.5 flex gap-2.5 max-xl:flex-wrap">
            <div class="flex flex-1 flex-col gap-2 max-xl:flex-auto">
                <div class="box-shadow rounded bg-white dark:bg-gray-900">
                    <div class="flex justify-between p-4">
                        <p class="mb-4 text-base font-semibold text-gray-800 dark:text-white">
                            @lang('image-gallery::app.admin.image-gallery.manage-images.edit.general') 
                        </p>
                    </div>

                    <div class="flex flex-col p-4">
                        <div class="mb-2.5">
                            <x-admin::form.control-group class="mb-2.5">
                                <x-admin::form.control-group.label class="required">
                                    @lang('image-gallery::app.admin.image-gallery.manage-images.edit.title')
                                </x-admin::form.control-group.label>

                                <x-admin::form.control-group.control
                                    type="text"
                                    name="title"
                                    id="title"
                                    rules="required|max:50"
                                    :value="old('title')?? $category->title"
                                    :label="trans('image-gallery::app.admin.image-gallery.manage-images.edit.title')"
                                    :placeholder="trans('image-gallery::app.admin.image-gallery.manage-images.edit.title')"
                                >
                                </x-admin::form.control-group.control>
                                
                                <x-admin::form.control-group.error 
                                    control-name="title"
                                > 
                                </x-admin::form.control-group.error>
                            </x-admin::form.control-group>
                        </div>

                        <div class="mb-2.5">
                            <x-admin::form.control-group class="mb-2.5">
                                <x-admin::form.control-group.label class="required">
                                    @lang('image-gallery::app.admin.image-gallery.manage-images.edit.description')
                                </x-admin::form.control-group.label>

                                <x-admin::form.control-group.control
                                    type="text"
                                    name="description"
                                    id="description"
                                    rules="required"
                                    :value="old('description') ?? $category->description"
                                    :label="trans('image-gallery::app.admin.image-gallery.manage-images.edit.description')"
                                    :placeholder="trans('image-gallery::app.admin.image-gallery.manage-images.edit.description')"
                                >
                                </x-admin::form.control-group.control>

                                <x-admin::form.control-group.error 
                                    control-name="description"
                                > 
                                </x-admin::form.control-group.error>
                            </x-admin::form.control-group>
                        </div>

                        <div class="mb-2.5">
                           <x-admin::form.control-group class="mb-2.5">
                                <x-admin::form.control-group.label class="required">
                                    @lang('image-gallery::app.admin.image-gallery.manage-images.edit.sort')
                                </x-admin::form.control-group.label>

                                <x-admin::form.control-group.control
                                    type="number"
                                    name="sort"
                                    id="sort"
                                    :value="old('sort') ?? $category->sort"
                                    rules="required|numeric"
                                    :label="trans('image-gallery::app.admin.image-gallery.manage-images.edit.sort')"
                                    :placeholder="trans('image-gallery::app.admin.image-gallery.manage-images.edit.sort')"
                                >
                                </x-admin::form.control-group.control>

                                <x-admin::form.control-group.error 
                                    control-name="sort"
                                > 
                                </x-admin::form.control-group.error>
                            </x-admin::form.control-group>
                        </div>

                        <div class="mb-2.5">
                           <x-admin::form.control-group class="mb-2.5">
                                <x-admin::form.control-group.label class="required">
                                    @lang('image-gallery::app.admin.image-gallery.manage-images.edit.image')
                                </x-admin::form.control-group.label>
                                
                                <x-admin::media.images
                                    name="image[files]"
                                    :uploaded-images="$category->image ? [['id' => 'image', 'url' => $imageUrl]] : []"
                                >
                                </x-admin::media.images>

                                <x-admin::form.control-group.error 
                                    control-name="image[files]"
                                > 
                                </x-admin::form.control-group.error>
                            </x-admin::form.control-group>
                        </div>

                        <div class="mb-2.5">
                           <x-admin::form.control-group class="mb-2.5">
                                <x-admin::form.control-group.label>
                                    @lang('image-gallery::app.admin.image-gallery.manage-images.edit.status')
                                </x-admin::form.control-group.label>

                                <x-admin::form.control-group.control
                                    type="switch"
                                    name="status"
                                    id="status"
                                    value="1"
                                    :checked="(bool) $category->status"
                                    :label="trans('image-gallery::app.admin.image-gallery.manage-images.edit.status')"
                                    :placeholder="trans('image-gallery::app.admin.image-gallery.manage-images.edit.status')"
                                />

                                <x-admin::form.control-group.error control-name="status" /> 
                            </x-admin::form.control-group>
                        </div>
                    </div>
                </div>         
            </div>
        </div>
    </x-admin::form>
</x-admin::layouts>