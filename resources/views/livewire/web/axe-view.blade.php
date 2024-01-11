
<div class="pt-16 min-h-sceen">

    <x-section-head title="{{$axe->title}}" link_tile='axe'>

    </x-section-head>



    <div class="flex w-full px-6">
        <div class="min-h-screen lg:w-9/12">


            <div class="min-h-screen px-4 mt-4 mb-4 prose markdown lg:prose-xl">

                {!! $axe->content !!}

            </div>
            <div class="w-full mx-4 border border-gray-200 "></div>





        </div>
        <div class="hidden min-h-screen px-4 border-gray-500 lg:flex-col lg:flex lg:w-3/12">
            <h1 class="p-4 text-lg text-center">Autres Axes</h1>

            <div>
                @foreach ($otherAxes as $item)
                <div class="flex gap-2 mb-4">
                    <div class="w-[40%]">
                        <img src="https://actiondamienrdcongo.org/storage/news/1677594356.CEDA.jpeg"
                            class="w-24 rounded-md">
                    </div>
                    <div class="flex w-[60%] flex-col">
                        <a href="{{route('axe',[$item->slug])}}" class="text-lg">{{$item->title}}</a>
                        <span class="mt-2 text-xs">text de travail</span>


                    </div>
                </div>
                @endforeach

            </div>



        </div>
    </div>

    @livewire('tool.news-letter')
</div>
