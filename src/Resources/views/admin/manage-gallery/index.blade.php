<x-admin::layouts>
    <x-slot:title>
      @lang('image-gallery::app.admin.image-gallery.manage-gallery.index.title')
    </x-slot>

    <div class="flex items-center justify-between gap-4 max-sm:flex-wrap">
        <p class="py-3 text-xl font-bold text-gray-800 dark:text-white">
            @lang('image-gallery::app.admin.image-gallery.manage-gallery.index.title')
        </p>

        <div class="flex items-center gap-x-2.5">
            <!-- Export Modal -->
            <x-admin::datagrid.export src="{{ route('admin.image-gallery.manage-gallery.index') }}"></x-admin::datagrid.export>

            <a href="{{ route('admin.image-gallery.manage-gallery.create') }}" class="btn btn-lg btn-primary">
                <button class="primary-button">
                    @lang('image-gallery::app.admin.image-gallery.manage-gallery.index.create')
                </button>
            </a>
        </div>
    </div>

    <x-admin::datagrid src="{{ route('admin.image-gallery.manage-gallery.index') }}"></x-admin::datagrid>
</x-admin::layouts>