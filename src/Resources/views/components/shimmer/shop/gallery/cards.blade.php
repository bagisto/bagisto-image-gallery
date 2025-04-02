@props(['count' => 0])

<div class="container mt-5 max-lg:px-[30px] max-sm:mt-[30px]">
    <div class="max-lg:gap-5 md:mt-10">
        <div class="mt-[30px]">
            <div class="grid grid-cols-4 gap-8 max-1060:grid-cols-1 max-sm:justify-items-center max-sm:gap-4">
                @for ($i = 0;  $i < $count; $i++)
                    <div class="grid gap-2.5 relative w-full max-w-[291px] max-sm:grid-cols-1 {{ $attributes["class"] }}">
                        <div class="shimmer relative w-full rounded max-sm:!rounded-lg">
                            <div class="after:content-[' '] relative after:block after:pb-[calc(100%+9px)]"></div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>