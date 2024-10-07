<section class="bg-gray-extraLight">
    <div class="mx-[10%] lg:mx-[15%] 2xl:max-w-5xl 2xl:mx-auto space-y-24 pt-20 pb-24 md:pb-44">
        <div class="grid md:grid-cols-2 text-center md:text-left">
            <div class="text-3xl md:text-4xl lg:text-5xl font-semibold mb-4"> {{ __("projects.typography") }} </div>
            <div class="leading-loose text-sm font-normal"> {{ $slot }} </div>
        </div>
        <div class="{{ $bg }} w-full rounded-[32px] h-fit md:h-[486px] grid md:grid-cols-2 xl:grid-cols-5 md:grid-rows-4 justify-items-stretch text-white px-4 sm:px-12 tablet:px-16 pb-4 sm:pb-12 pt-12 gap-4 sm:gap-0 xl:gap-16 2xl:gap-0"
            style="font-family: {{ $font }}">
            <div class="order-1 relative flex flex-col xl:col-span-2 md:row-span-3 font-bold md:pt-10 place-content-between h-full gap-4 mx-auto sm:mx-0">
                <span class="text-4xl sm:text-6xl capitalize"> {{ $font }} </span>
                <span class="text-[170px]/[150px] sm:text-[200px]/[150px] xl:text-[235px]/[130px] block"> Aa </span>
            </div>
            <div class="order-3 md:order-2 xl:col-span-3 md:row-span-4 place-content-end md:pb-2 xl:pb-[75px] text-lg pl-4 lg:pl-0 mx-auto sm:mx-0 leading-loose">
                <span class="block font-semibold">  {{ __("projects.characters") }}:</span>
                <span class="block">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</span>
                <span class="block">a b c d e f g h i j k l m n o p q r s t u v w x y z</span>
                <span class="block">0 1 2 3 4 5 6 7 8 9 ! “ # $ % & / ( ) @ = ? , -</span>
            </div>
            <div class="order-2 md:order-3 sm:w-full xl:col-span-2 flex space-x-2 md:space-x-0 md:justify-between place-self-end py-4 lg:py-0 lg:pr-8 xl:pr-0 2xl:pr-10 pb-6 mx-auto sm:mx-0">
                <div class="items-center rounded-full bg-white bg-opacity-10 px-4 py-1.5 text-xs font-normal text-white">Regular</div>
                <div class="items-center rounded-full bg-white bg-opacity-10 px-4 py-1.5 text-xs font-normal text-white">Medium</div>
                <div class="items-center rounded-full bg-white bg-opacity-10 px-3 sm:px-4 py-1.5 text-xs font-normal text-white">Semi-bold</div>
            </div>
        </div>
    </div>
</section>
