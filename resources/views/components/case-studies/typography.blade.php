@props(['description', 'font'])

<section class="bg-gray-extraLight">
    <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-5xl 2xl:mx-auto space-y-24 pt-20 pb-44">
    <div class="grid grid-cols-2">
        <div class="text-3xl md:text-4xl lg:text-5xl font-semibold"> {{ __("case_studies.typography") }} </div>
        <div class="leading-loose text-md"> {{ $description }}
        </div>
    </div>
    <div class="w-full bg-k1 rounded-[32px] h-[486px] grid grid-cols-5 justify-items-stretch text-white px-16 py-10">
        <div class="relative flex flex-col col-span-2 font-bold pt-10 place-content-between">
            <span class="text-6xl"> {{ $font }} </span>
            <span class="text-[235px] block absolute top-16"> Aa </span>
            <div class="flex justify-between pr-10 pb-6">
                <div class="items-center rounded-full bg-[#ff6666] px-4 py-1.5 text-xs font-medium text-white">Regular</div>
                <div class="items-center rounded-full bg-[#ff6666] px-4 py-1.5 text-xs font-medium text-white">Medium</div>
                <div class="items-center rounded-full bg-[#ff6666] px-4 py-1.5 text-xs font-medium text-white">Semi-bold</div>
            </div>
        </div>
        <div class="col-span-3 place-content-end pb-[75px] text-lg">
            <span class="block font-semibold">  {{ __("case_studies.characters") }}:  </span>
            <span class="block">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z </span>
            <span class="block">a b c d e f g h i j k l m n o p q r s t u v w x y z </span>
            <span class="block">0 1 2 3 4 5 6 7 8 9 ! “ # $ % & / ( ) @ = ? , -</span>
        </div>
    </div>
    </div>
</section>
