<section class="mx-[10%] lg:mx-[15%] 2xl:max-w-5xl 2xl:mx-auto space-y-24 py-20">
    <div class="grid grid-cols-2">
        <div class="text-3xl md:text-4xl lg:text-5xl font-semibold"> {{ __("case_studies.color_palette") }} </div>
        <div class="leading-loose text-md"> {{ $description }} </div>
    </div>
    <div class="w-full h-96 grid grid-cols-3 justify-items-stretch text-sm">
        <div style="background-color: {{ $firstBg }};"  class="size-full col-span-3 rounded-t-2xl place-content-end pb-8 pl-8 {{ $firstTextColor }}"><span class="font-semibold block text-lg"> {{$firstTitle}} </span> {{ $firstBg }}</div>
        <div style="background-color: {{ $secondBg }};" class="size-full rounded-bl-2xl place-content-end pb-8 pl-8 {{ $secondTextColor }}"><span class="font-semibold block text-lg">  {{ $secondTitle }}  </span> {{ $secondBg }}</div>
        <div style="background-color: {{ $thirdBg }};" class="size-full place-content-end pb-8 pl-8 {{ $thirdTextColor }}"><span class="font-semibold block text-lg">  {{ $thirdTitle }}  </span> {{ $thirdBg }}</div>
        <div style="background-color: {{ $fourthBg }};" class="size-full rounded-br-2xl place-content-end pb-8 pl-8 {{ $fourthTextColor }}"><span class="font-semibold block text-lg">  {{ $fourthTitle }}  </span> {{ $fourthBg }}</div>
    </div>
</section>
