<div>

    <div class="min-h-sceen">


        <div class="relative w-full h-24 border-b border-gray-300 ">
            <div class="absolute inset-0 flex items-center justify-center">

                <h2
                    class="mb-4 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:text-4xl dark:text-white">
                    {{$story->title}}</h2>

            </div>

            <div class="absolute inset-0 flex items-center justify-start px-4">
                <x-bread-cumb :lien1="'Histoires'" />

            </div>

        </div>

        <div class="flex w-full px-6">
            <div class="min-h-screen lg:w-9/12">

                <div class="items-center w-10/12 mx-auto mt-4 h-10/12">
                    <img class="rounded-lg" src="{{Storage::disk('local')->url('public/'.$story->image) }}" alt="">

                </div>


                <div class="min-h-screen px-4 mt-4 mb-4 prose markdown lg:prose-xl">

                    {!! $story->content !!}

                </div>
                <div class="w-full mx-4 border border-gray-200 "></div>





            </div>
            <div class="hidden min-h-screen px-4 border-gray-500 lg:flex-col lg:flex lg:w-3/12">




                <h1 class="p-4 text-lg text-center">Autres Histoires</h1>

                <div>
                    @foreach ($ohterStory as $item)
                    <div class="flex gap-2 mb-4">
                        <div class="w-[40%]">
                            <img src="https://actiondamienrdcongo.org/storage/news/1677594356.CEDA.jpeg"
                                class="w-24 rounded-md">
                        </div>
                        <div class="flex w-[60%] flex-col">
                            <a href="{{route('story',[$item->slug])}}" class="text-lg">{{$item->title}} </a>
                            <span class="mt-2 text-xs">text de travial</span>


                        </div>
                    </div>
                    @endforeach

                </div>



            </div>
        </div>
    </div>
