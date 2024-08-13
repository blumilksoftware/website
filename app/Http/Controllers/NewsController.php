<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers;

use Blumilk\Website\Http\Resources\NewsResource;
use Blumilk\Website\Http\Resources\TagResource;
use Blumilk\Website\Models\News;
use Blumilk\Website\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request, Factory $factory): View
    {
        $tagFromQuery = $request->get("tag");
        $tag = $tagFromQuery
            ? Tag::query()
                ->where("title->pl", "LIKE", $tagFromQuery)
                ->orWhere("title->en", "LIKE", $tagFromQuery)
                ->firstOrFail()
            : null;
        $allNewsCount = News::query()
            ->where("published", true)
            ->count();
        $news = News::query()
            ->where("published", true)
            ->when($tag, fn($query, $tag) => $query->whereJsonContains("tags", $tag->id))
            ->latest("published_at")
            ->paginate(7)
            ->appends(["tag" => $tagFromQuery]);
        $tags = Tag::query()
            ->where("is_primary", true)
            ->get();

        $tagsNewsCount = [];

        foreach ($tags as $singleTag) {
            $tagsNewsCount[$singleTag->title] = $singleTag->newsCount();
        }

        $filteredTags = $tags->filter(fn($tag): bool => $tagsNewsCount[$tag->title] > 0);

        return $factory->make("news")
            ->with("news", NewsResource::collection($news))
            ->with("tags", $filteredTags->pluck("title"))
            ->with("tagsNewsCount", $tagsNewsCount)
            ->with("selectedTag", $tag?->title)
            ->with("allNewsCount", $allNewsCount);
    }

    public function get(Request $request, Factory $factory, string $slug): View
    {
        $urlPath = $request->getRequestUri();
        $articleUrl = config("app.url") . $urlPath;

        $news = News::query()->where("slug", $slug)->firstOrFail();
        $newsTags = $news->getRelatedTagModels();

        $nextNews = News::query()->where("id", ">", $news->id)->where("published", true)->orderBy("id", "asc")->take(2)->get();
        $previousNews = News::query()->where("id", "<", $news->id)->where("published", true)->orderBy("id", "desc")->take(2)->get();

        if (!$previousNews->first()) {
            $recommendedNews = $nextNews;
        } elseif (!$nextNews->first()) {
            $recommendedNews = $previousNews;
        } else {
            $recommendedNews = [$previousNews->first(), $nextNews->first()];
        }

        $tagsNewsCount = [];

        foreach ($newsTags as $singleTag) {
            $tagsNewsCount[$singleTag->title] = $singleTag->newsCount();
        }

        $news = new NewsResource($news);

        return $factory->make("single-news")
            ->with("news", $news->resolve())
            ->with("tags", TagResource::collection($newsTags->where("as_person", false))->resolve())
            ->with("tagsNewsCount", $tagsNewsCount)
            ->with("peopleTags", TagResource::collection($newsTags->where("as_person", true))->resolve())
            ->with("recommendedNews", NewsResource::collection($recommendedNews)->resolve())
            ->with("articleUrl", $articleUrl);
    }
}
