<?php

declare(strict_types=1);

namespace Blumilk\Website\Console\Commands;

use Blumilk\Website\Models\News;
use Blumilk\Website\Models\Project;
use Blumilk\Website\Models\Reference;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class ConvertToWebp extends Command
{
    protected $signature = "app:convert-to-webp";
    protected $description = "Convert storage images to webp";

    public function handle(): void
    {
        $this->convertForModel(Project::class);
        $this->convertForModel(Reference::class);
        $this->convertForModel(News::class);
    }

    protected function convertForModel(string $class): void
    {
        $models = $class::all();

        foreach ($models as $model) {
            if (!Storage::exists("public/$model->photo")) {
                continue;
            }

            if (pathinfo($model->photo, PATHINFO_EXTENSION) === "webp") {
                continue;
            }

            $dir = $model::PHOTOS_DIRECTORY;

            $image = Image::read(storage_path("app/public/" . $model->photo));

            $newPath = $dir . "/" . pathinfo($model->photo, PATHINFO_FILENAME) . ".webp";

            Storage::delete("public/" . $model->photo);

            Storage::put("public/$newPath", $image->toWebp()->toString());

            $class::query()
                ->where("photo", $model->photo)
                ->update(["photo" => $newPath]);
        }
    }
}
