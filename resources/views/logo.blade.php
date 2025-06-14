@extends("layout.public", ["excludeBigBubbles" => true])

@php
    $filesDirectory = public_path("materials");
    $materials = [];

    if (file_exists($filesDirectory) && is_dir($filesDirectory)) {
        foreach (scandir($filesDirectory) as $file) {
            if (!in_array($file, [".", ".."])) {
                $fileKey = pathinfo($file, PATHINFO_FILENAME);
                $filePath = $filesDirectory . "/" . $file;

                $materials[] = [
                    "title" => __("materials.{$fileKey}.title"),
                    "description" => __("materials.{$fileKey}.description"),
                    "file_type" => pathinfo($file, PATHINFO_EXTENSION),
                    "file_size" => number_format(filesize($filePath) / 1048576, 2) . " MB",
                    "download_url" => asset("materials/" . $file),
                ];
            }
        }
    }
@endphp

@section("title", __("meta.logo.title"))
@section("description", __("meta.logo.description"))

@section("content")
    <section class="py-12 text-center mx-[10%] lg:mx-[15%] 2xl:max-w-7xl 2xl:mx-auto">
        <div class="pb-24">
            <h2 class="font-semibold text-gray-900 text-3xl md:text-4xl lg:text-5xl text-center 2xl:justify-start 2xl:text-start pb-4">
                <span class="inline">{{ __("content.logo.title_1") }}</span>
                <span class="inline text-website-normal leading-7">{{ __("content.logo.title_2") }}</span>
            </h2>
        </div>

        @foreach($materials as $material)
            <div class="bg-white border border-gray-200 rounded-lg flex flex-col md:flex-row justify-center md:justify-between py-4 md:py-8 px-5 md:px-10 items-center shadow-xs mb-6 space-y-4 md:space-y-0">
                <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0">
                    <div class="relative w-[220px] md:w-[180px] h-[150px] sm:h-[180px] md:h-[105px] bg-gray-100 flex items-center justify-center rounded-md md:mr-4">
                        <i class="ti ti-paperclip text-website-normal -rotate-45 text-xl"></i>
                        <span class="absolute bottom-2 left-2 bg-website-normal text-white text-[10px] font-medium px-2 py-1">
                            {{ $material["file_type"] }}, {{ $material["file_size"] }}
                        </span>
                    </div>
                    <div class="text-center md:text-left space-y-2 md:space-y-3">
                        <h2 class="text-lg font-semibold text-gray-800">{{ $material["title"] }}</h2>
                        <p class="text-sm text-gray-500">{{ $material["description"] }}</p>
                    </div>
                </div>
                <x-small-primary-button href="{{ $material['download_url'] }}" class="font-semibold text-sm w-full md:w-auto">
                    <span>{{ __("buttons.download") }}</span>
                    <span class="sr-only">{{ __("alt.download") }}</span>
                    <i class="ti ti-download text-lg text-white ml-2 font-semibold"></i>
                </x-small-primary-button>
            </div>
        @endforeach
    </section>
@endsection
