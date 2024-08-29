<section class="mx-[10%] lg:mx-[15%] 2xl:max-w-5xl 2xl:mx-auto space-y-16 md:space-y-24 py-20">
    <div class="grid md:grid-cols-2 text-center md:text-left">
        <div class="text-3xl md:text-4xl lg:text-5xl font-semibold mb-6"> {{ __("projects.color_palette") }} </div>
        <div class="leading-loose text-sm md:text-md"> {{ $description }} </div>
    </div>
    <div class="w-full h-auto md:h-96 grid md:grid-cols-3 justify-items-stretch text-sm">
        <div style="background-color: {{ $firstBg }};"  class="size-full pt-32 md:pt-0 md:col-span-3 rounded-t-2xl place-content-end pb-8 pl-8 {{ $firstTextColor }}"><span class="font-semibold block text-lg"> {{$firstTitle}} </span> {{ $firstBg }}</div>
        <div style="background-color: {{ $secondBg }};" class="size-full pt-16 md:pt-0 md:rounded-bl-2xl place-content-end pb-8 pl-8 {{ $secondTextColor }}"><span class="font-semibold block text-lg">  {{ $secondTitle }}  </span> {{ $secondBg }}</div>
        <div style="background-color: {{ $thirdBg }};" class="size-full pt-16 md:pt-0 place-content-end pb-8 pl-8 {{ $thirdTextColor }}"><span class="font-semibold block text-lg">  {{ $thirdTitle }}  </span> {{ $thirdBg }}</div>
        <div style="background-color: {{ $fourthBg }};" class="size-full pt-16 md:pt-0 rounded-b-2xl md:rounded-bl-none place-content-end pb-8 pl-8 {{ $fourthTextColor }}"><span class="font-semibold block text-lg">  {{ $fourthTitle }}  </span> {{ $fourthBg }}</div>
    </div>
</section>
