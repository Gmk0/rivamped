<div class="min-h-screen pt-16 pb-4">
    <x-section-head title="Histoires"
    description="Suivez nos dernières nouvelles et projets ici"
    link_title="Histoires">

    </x-section-head>

    <div class="flex flex-col gap-3 px-6 pt-4 md:grid md:grid-cols-3">
        @forelse ($stories as $story)
        <div class="relative overflow-hidden rounded">
            <img src="{{$story->getFirstMediaUrl('stories')}}" alt="Hanging Planters" class="object-fill w-full">
            <a href="{{route('OneStory',[$story->slug])}}"
                class="absolute inset-0 flex items-center justify-center text-2xl font-medium text-center text-white truncate transition bg-black cursor-pointer hover:text-yellow-300 bg-opacity-40 font-roboto group-hover:bg-opacity-60">
                {{$story->title}}
        </a>
        </div>
        @empty

        @endforelse

    </div>

</div>
