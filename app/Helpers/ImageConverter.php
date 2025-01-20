<?php

declare(strict_types=1);

namespace Blumilk\Website\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class ImageConverter
{
    public static function convertToWebp(UploadedFile $file, string $outputDirectory): string
    {
        $image = Image::read($file->getContent());
        $newName = "{$file->getBasename()}.webp";

        $path = "$outputDirectory/$newName";

        Storage::put("public/$path", $image->toWebp()->toString());

        return $path;
    }
}
