<x-admin::layouts>
    <!-- Page Title -->
    <x-slot:title>
        @lang('image-gallery::app.admin.image-gallery.manage-groups.create.page-title')
    </x-slot>
    
    <v-manage-groups></v-manage-groups>

    @pushOnce('scripts')
        <script
            type="text/x-template"
            id="v-manage-groups-template"
        >
            <x-admin::form
                action="{{ route('admin.image-gallery.manage-groups.store')}}"
                method="POST"
                enctype="multipart/form-data"
            >
                <!-- Page Header -->
                <div class="grid gap-2.5">
                    <div class="flex items-center justify-between gap-4 max-sm:flex-wrap">
                        <div class="grid gap-1.5">
                            <p class="text-xl font-bold leading-6 text-gray-800 dark:text-white">
                                @lang('image-gallery::app.admin.image-gallery.manage-groups.create.page-title')
                            </p>
                        </div>

                        <div class="flex items-center gap-x-2.5">
                            <a
                                href="{{ route('admin.image-gallery.manage-groups.index') }}"
                                class="transparent-button hover:bg-gray-200 dark:text-white dark:hover:bg-gray-800"
                            >
                                @lang('image-gallery::app.admin.image-gallery.manage-groups.create.back-btn')
                            </a>

                            <button class="primary-button">
                                @lang('image-gallery::app.admin.image-gallery.manage-groups.create.save-btn')
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Body content -->
                <div class="mt-3.5 flex gap-2.5 max-xl:flex-wrap">
                    <div class="flex flex-1 flex-col gap-2 max-xl:flex-auto">
                        <div class="box-shadow rounded bg-white dark:bg-gray-900">
                            <div class="flex justify-between p-4">
                                <p class="mb-4 text-base font-semibold text-gray-800 dark:text-white">
                                    @lang('image-gallery::app.admin.image-gallery.manage-groups.create.group') 
                                </p>
                            </div>

                            <div class="flex flex-col p-4">
                                <div class="mb-2.5">
                                    <x-admin::form.control-group class="mb-2.5">
                                        <x-admin::form.control-group.label class="required">
                                            @lang('image-gallery::app.admin.image-gallery.manage-groups.create.group-code')
                                        </x-admin::form.control-group.label>

                                        <x-admin::form.control-group.control
                                            type="text"
                                            name="group_code"
                                            id="group_code"
                                            rules="required|min:5|max:5"
                                            :value="old('group_code')"
                                            :label="trans('image-gallery::app.admin.image-gallery.manage-groups.create.group-code')"
                                            :placeholder="trans('image-gallery::app.admin.image-gallery.manage-groups.create.group-code')"
                                        />
                                        
                                        <span class="mt-1 text-xs italic dark:text-white">
                                            @lang('image-gallery::app.admin.image-gallery.manage-gallery.index.code-note')
                                        </span>

                                        <x-admin::form.control-group.error control-name="group_code" />
                                    </x-admin::form.control-group>
                                </div>

                                <div class="mb-2.5">
                                    <x-admin::form.control-group class="mb-2.5">
                                        <x-admin::form.control-group.label>
                                            @lang('image-gallery::app.admin.image-gallery.manage-groups.create.status')
                                        </x-admin::form.control-group.label>

                                        <x-admin::form.control-group.control
                                            type="switch"
                                            name="status"
                                            value="1"
                                            :label="trans('image-gallery::app.admin.image-gallery.manage-groups.create.status')"
                                            :placeholder="trans('image-gallery::app.admin.image-gallery.manage-groups.create.status')"
                                        />
                                        <x-admin::form.control-group.error control-name="status" /> 
                                    </x-admin::form.control-group>
                                </div>

                                <span v-if="selectedGalleryIds?.length">
                                    <div v-for="selectedGalleryId in selectedGalleryIds">
                                        <input type="hidden" name="gallery_ids[]" v-model="selectedGalleryId">
                                    </div>
                                </span>
                            </div>
                        </div> 
                    </div>
                </div>
            </x-admin::form>

            <v-gallery-table></v-gallery-table>
        </script>

        <script
            type="text/x-template"
            id="v-gallery-table-template"
        >
            <x-admin::datagrid :src="route('admin.image-gallery.manage-groups.create')" :isMultiRow="false">
                <template #header="{
                    isLoading,
                    available,
                    applied,
                    selectAll,
                    sort,
                    performAction
                }">
                    <template v-if="isLoading">
                        <x-admin::shimmer.datagrid.table.head :isMultiRow="true" />
                    </template>

                    <template v-else>
                        <div class="row grid grid-cols-6 grid-rows-1 items-center border-b px-4 py-2.5 dark:border-gray-800">
                            <div
                                class="flex select-none items-center gap-2.5"
                                v-for="(columnGroup, index) in [['id'], ['gallery_title'], ['gallery_code'], ['image_ids'], ['thumbnail_image_id'], ['status']]"
                            >
                                <p class="text-gray-600 dark:text-gray-300">
                                    <span class="[&>*]:after:content-['_/_']">
                                        <template v-for="column in columnGroup">
                                            <span
                                                class="after:content-['/'] last:after:content-['']"
                                                :class="{
                                                    'font-medium text-gray-800 dark:text-white': applied.sort.column == column,
                                                    'cursor-pointer hover:text-gray-800 dark:hover:text-white': available.columns.find(columnTemp => columnTemp.index === column)?.sortable,
                                                }"
                                                @click="
                                                    available.columns.find(columnTemp => columnTemp.index === column)?.sortable ? sort(available.columns.find(columnTemp => columnTemp.index === column)): {}
                                                "
                                            >
                                                @{{ available.columns.find(columnTemp => columnTemp.index === column)?.label }}
                                            </span>
                                        </template>
                                    </span>

                                    <i
                                        class="align-text-bottom text-base text-gray-800 dark:text-white ltr:ml-1.5 rtl:mr-1.5"
                                        :class="[applied.sort.order === 'asc' ? 'icon-down-stat': 'icon-up-stat']"
                                        v-if="columnGroup.includes(applied.sort.column)"
                                    >
                                    </i>
                                </p>
                            </div>
                        </div>
                    </template>
                </template>

                <template #body="{
                    isLoading,
                    available,
                    applied,
                    selectAll,
                    sort,
                    performAction
                }">
                    <template v-if="isLoading">
                        <x-admin::shimmer.datagrid.table.body :isMultiRow="true" />
                    </template>

                    <template v-else>
                        <div
                            class="row grid grid-cols-6 border-b px-4 py-2.5 transition-all hover:bg-gray-50 dark:border-gray-800 dark:hover:bg-gray-950"
                            v-for="record in available.records"
                        >
                            <!-- Input -->
                            <div class="flex gap-2.5">
                                <input
                                    type="checkbox"
                                    name="gallery_ids[]"
                                    :id="`gallery_ids_${record.id}`"
                                    :value="record.id"
                                    class="peer hidden"
                                    @click="getData($event)"
                                >

                                <label
                                    class="icon-uncheckbox peer-checked:icon-checked cursor-pointer rounded-md text-2xl peer-checked:text-blue-600"
                                    :for="`gallery_ids_${record.id}`"
                                ></label>
                            </div>

                            <div class="flex gap-2.5">
                                <p  
                                    class="text-gray-600 dark:text-gray-300" 
                                    v-text="record.gallery_title"
                                ></p>   
                            </div>

                            <div class="flex gap-2.5 p-2.5">
                                <p  
                                    class="text-gray-600 dark:text-gray-300" 
                                    v-text="record.gallery_code"
                                ></p>   
                            </div>

                            <div class="flex gap-2.5 p-2.5">
                                <p  
                                    class="text-gray-600 dark:text-gray-300" 
                                    v-text="record.image_ids"
                                ></p>   
                            </div>

                            <div class="flex gap-2.5 p-2.5">
                                <p  
                                    class="text-gray-600 dark:text-gray-300" 
                                    v-text="record.thumbnail_image_id"
                                ></p>   
                            </div>


                            <div class="p-2.5">
                                <p :class="[record.status ? 'label-active': 'label-info']">
                                    @{{ record.status ? "@lang('image-gallery::app.admin.image-gallery.datagrid.enable')" : "@lang('image-gallery::app.admin.image-gallery.datagrid.disable')" }}
                                </p>
                            </div>
                        </div>
                    </template>
                </template>
            </x-admin::datagrid>
        </script>

        <script type="module">
            app.component('v-gallery-table', {
                template: '#v-gallery-table-template',

                methods: {
                    getData(event) {
                        this.$parent.selectedGalleryIds.push(event.target.value);
                    }
                },
            });
        </script>

        <script type="module">
            app.component('v-manage-groups', {
                template: '#v-manage-groups-template',

                data() {
                    return {
                        selectedGalleryIds: [],
                    }
                },
            });
        </script>
    @endPushOnce
  
</x-admin::layouts>