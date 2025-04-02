<x-admin::layouts>
    <!-- Page Title -->
    <x-slot:title>
        @lang('image-gallery::app.admin.image-gallery.manage-gallery.edit.page-title')
    </x-slot>

    <v-manage-gallery></v-manage-gallery>

    @pushOnce('scripts')
        <script
            type="text/x-template"
            id="v-manage-gallery-template"
        >
            <x-admin::form
                action="{{ route('admin.image-gallery.manage-gallery.update', $category->id) }}"
                method="PUT"
                enctype="multipart/form-data"
            >
                <!-- Page Header -->
                <div class="grid gap-2.5">
                    <div class="flex items-center justify-between gap-4 max-sm:flex-wrap">
                        <div class="grid gap-1.5">
                            <p class="text-xl font-bold leading-6 text-gray-800 dark:text-white">
                                @lang('image-gallery::app.admin.image-gallery.manage-gallery.edit.page-title')
                            </p>
                        </div>

                        <div class="flex items-center gap-x-2.5">
                            <a
                                href="{{ route('admin.image-gallery.manage-gallery.index') }}"
                                class="transparent-button hover:bg-gray-200 dark:text-white dark:hover:bg-gray-800"
                            >
                                @lang('image-gallery::app.admin.image-gallery.manage-gallery.edit.back-btn')
                            </a>

                            <button class="primary-button">
                                @lang('image-gallery::app.admin.image-gallery.manage-gallery.edit.save-btn')
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
                                    @lang('image-gallery::app.admin.image-gallery.manage-gallery.edit.gallery') 
                                </p>
                            </div>

                            <div class="flex flex-col p-4">
                                <div class="mb-2.5">
                                    <x-admin::form.control-group class="mb-2.5">
                                        <x-admin::form.control-group.label class="required">
                                            @lang('image-gallery::app.admin.image-gallery.manage-gallery.edit.title')
                                        </x-admin::form.control-group.label>

                                        <x-admin::form.control-group.control
                                            type="text"
                                            name="gallery_title"
                                            id="gallery_title"
                                            rules="required|max:50"
                                            value="{{ $category->gallery_title }}"
                                            :label="trans('image-gallery::app.admin.image-gallery.manage-gallery.edit.title')"
                                            :placeholder="trans('image-gallery::app.admin.image-gallery.manage-gallery.edit.title')"
                                        />
                                
                                        <x-admin::form.control-group.error control-name="gallery_title"/> 
                                    </x-admin::form.control-group>
                                </div>

                                <div class="mb-2.5">
                                    <x-admin::form.control-group class="mb-2.5">
                                        <x-admin::form.control-group.label class="required">
                                            @lang('image-gallery::app.admin.image-gallery.manage-gallery.edit.gallery-code')
                                        </x-admin::form.control-group.label>

                                        <x-admin::form.control-group.control
                                            type="text"
                                            name="gallery_code"
                                            id="gallery_code"
                                            rules="required|min:5|max:5"
                                            value="{{ $category->gallery_code }}"
                                            :label="trans('image-gallery::app.admin.image-gallery.manage-gallery.edit.gallery-code')"
                                            :placeholder="trans('image-gallery::app.admin.image-gallery.manage-gallery.edit.gallery-code')"
                                        />

                                        <span class="mt-1 text-xs italic dark:text-white">
                                            @lang('image-gallery::app.admin.image-gallery.manage-gallery.index.code-note')
                                        </span>

                                        <x-admin::form.control-group.error control-name="gallery_code"/> 
                                    </x-admin::form.control-group>
                                </div>

                                <div class="mb-2.5">
                                    <x-admin::form.control-group class="mb-2.5">
                                        <x-admin::form.control-group.label>
                                            @lang('image-gallery::app.admin.image-gallery.manage-gallery.edit.status')
                                        </x-admin::form.control-group.label>

                                        <x-admin::form.control-group.control
                                            type="switch"
                                            name="status"
                                            value="1"
                                            :checked="$category->status == '1'"
                                            :label="trans('image-gallery::app.admin.image-gallery.manage-gallery.edit.status')"
                                            :placeholder="trans('image-gallery::app.admin.image-gallery.manage-gallery.edit.status')"
                                        />
                                        
                                        <x-admin::form.control-group.error control-name="status" /> 
                                    </x-admin::form.control-group>
                                </div>

                                <input type="hidden" name="thumbnail_image_id" v-model="selectedThumbnailId">

                                <span v-if="selectedIds?.length">
                                    <div v-for="selectedId in selectedIds">
                                        <input type="hidden" name="image_ids[]" v-model="selectedId">
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </x-admin::form>

            <v-images-table></v-images-table>
        </script>

        <script
            type="text/x-template"
            id="v-images-table-template"
        >
            <x-admin::datagrid :src="route('admin.image-gallery.manage-gallery.create')" :isMultiRow="false">
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
                        <div class="row grid grid-cols-4 grid-rows-1 items-center border-b px-4 py-2.5 dark:border-gray-800">
                            <div
                                class="flex select-none items-center gap-2.5"
                                v-for="(columnGroup, index) in [['id'], ['thumbnail_image_id'], ['image'], ['title', 'description', 'status', 'sort']]"
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
                            class="row grid grid-cols-4 border-b px-4 py-2.5 transition-all hover:bg-gray-50 dark:border-gray-800 dark:hover:bg-gray-950"
                            v-for="record in available.records"
                        >
                            <!-- Input -->
                            <div class="flex gap-2.5">
                                <input
                                    type="checkbox"
                                    name="image_ids[]"
                                    :id="`image_ids_${record.id}`"
                                    :value="record.id"
                                    :checked="isImageSelected(record.id)"
                                    class="peer hidden"
                                    @click="getData($event)"
                                >

                                <label
                                    class="icon-uncheckbox peer-checked:icon-checked cursor-pointer rounded-md text-2xl peer-checked:text-blue-600"
                                    :for="`image_ids_${record.id}`"
                                ></label>
                            </div>

                            <!-- Thumbnail Image Id -->
                            <div class="flex gap-2.5 pt-4">
                                <input
                                    type="radio"
                                    name="thumbnail_image_id"
                                    :id="`thumbnail_image_id_${record.id}`"
                                    :value="record.id"
                                    :checked="$parent.galleryData.thumbnail_image_id == record.id"
                                    class="peer hidden"
                                    @click="getData($event)"
                                >

                                <label
                                    class="icon-radio-normal peer-checked:icon-radio-selected mr-1 cursor-pointer rounded-md text-2xl peer-checked:text-blue-600"
                                    :for="`thumbnail_image_id_${record.id}`"
                                ></label>
                            </div>

                            <div class="flex gap-2">
                                <img 
                                    :src="record.image" 
                                    class="max-h-[65px] min-h-[65px] min-w-[65px] max-w-[65px] rounded"
                                >
                            </div>

                            
                            <div class="flex flex-col gap-1.5">
                                <p  
                                    class="text-gray-600 dark:text-gray-300" 
                                    v-text="record.title"
                                ></p>

                                <p  
                                    class="text-gray-600 dark:text-gray-300"
                                    v-text="record.description"
                                ></p>
                                
                                <p :class="[record.status ? 'label-active': 'label-info']">
                                    @{{ record.status ? "@lang('image-gallery::app.admin.image-gallery.datagrid.enable')" : "@lang('image-gallery::app.admin.image-gallery.datagrid.disable')" }}
                                </p>

                                <p  
                                    class="text-gray-600 dark:text-gray-300"
                                >
                                    @{{ record.sort }}
                                </p>
                            </div>
                        </div>
                    </template>
                </template>
            </x-admin::datagrid>
        </script>
            
        <script type="module">
            app.component('v-images-table', {
                template: '#v-images-table-template',

                methods: {
                    getData(event) {
                        let isImageExist = this.$parent.selectedIds.find(id => id == event.target.value);
                        
                        if (
                           ! isImageExist
                           && event.target.name != "thumbnail_image_id"
                        ) {
                            this.$parent.selectedIds.push(event.target.value);
                        } else {
                            let index = this.$parent.selectedIds.indexOf(event.target.value);
                            
                            this.$parent.selectedIds.splice(index, 1);
                        }
                        
                        if (event.target.name == "thumbnail_image_id") {
                            this.$parent.selectedThumbnailId = event.target.value;
                        }
                    },

                    isImageSelected(id) {
                       return this.$parent.galleryImageIds.find(imageId => imageId == id);
                    },
                },
            });
        </script>

        <script type="module">
            app.component('v-manage-gallery', {
                template: '#v-manage-gallery-template',

                data() {
                    return {
                        selectedThumbnailId : '',

                        selectedIds: [],

                        galleryData: @json($category),

                        galleryImageIds: [],
                    }
                },

                mounted() {
                    this.selectedThumbnailId = this.galleryData.thumbnail_image_id;

                    this.galleryImageIds = this.galleryData.image_ids.split(',');

                    for (let i = 0; i < this.galleryImageIds.length; i++) {
                        this.selectedIds.push(this.galleryImageIds[i]);
                    }
                }
            });
        </script>
    @endPushOnce
</x-admin::layouts>