<section class="mx-[10%] lg:mx-[15%] 2xl:max-w-5xl 2xl:mx-auto space-y-24 py-20">
    <div class="grid grid-cols-2">
        <div class="text-3xl md:text-4xl lg:text-5xl font-semibold"> {{ __("case_studies.color_palette") }} </div>
        <div class="leading-loose text-md"> {{ $description }} </div>
    </div>
    <div class="w-full h-96 grid grid-cols-3 justify-items-stretch">
        <div style="background-color: {{ $primaryBg }};"  class="size-full text-white col-span-3 rounded-t-2xl place-content-end pb-8 pl-8 {{ $primaryText }}"><span class="font-semibold block"> {{ __("case_studies.primary") }} </span> {{ $primaryBg }}</div>
        <div style="background-color: {{ $secondaryBg }};" class="size-full text-white rounded-bl-2xl place-content-end pb-8 pl-8 {{ $secondaryText }}"><span class="font-semibold block">  {{ __("case_studies.secondary") }}  </span> {{ $secondaryBg }}</div>
        <div style="background-color: {{ $surfaceBg }};" class="size-full place-content-end pb-8 pl-8"><span class="font-semibold block {{ $surfaceText }}">  {{ __("case_studies.surface_container") }}  </span> {{ $surfaceBg }}</div>
        <div style="background-color: {{ $textBg }};" class="size-full rounded-br-2xl place-content-end pb-8 pl-8"><span class="font-semibold block {{ $textColor }}">  {{ __("case_studies.text") }}  </span> {{ $textBg }}</div>
    </div>
</section>
