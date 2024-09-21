<article class="relative flex overflow-hidden rounded-2xl px-8 pb-8 pt-80 sm:pt-48 lg:pt-80 place-content-end">
    <img src="{{ asset("storage/" . $project->photo)  }}" alt="{{ $project->company }}" class="absolute inset-0 -z-10 h-full w-full object-cover">

    <div class="flex mt-3 text-lg font-semibold leading-7.5 place-items-end">
        <a href="{{ route('projects.entry', $project->slug) }}">
            <span class="absolute inset-0"></span>
            <h3 class="bg-white max-w-md w-auto shadow-2xl rounded-lg p-5 text-left flex place-items-center">
                <span>
                    {{ $project->name_first_part }}
                    <span style="color: {{ $project->color }}">{{ $project->name_second_part }}</span>
                    {{ $project->name_third_part }}
                </span>

            </h3>
        </a>
    </div>
</article>
