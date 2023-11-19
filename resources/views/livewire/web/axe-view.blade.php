<div>

    <div class="min-h-sceen">


        <div class="relative w-full h-24 border-b border-gray-300 ">
            <div class="absolute inset-0 flex items-center justify-center">

                <h2
                    class="mb-4 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:text-4xl dark:text-white">
                    {{$axe->title}}</h2>

            </div>

            <div class="absolute hidden inset-0 lg:flex items-center justify-start px-4">
                <x-bread-cumb :lien1="'Axes'" />

            </div>

        </div>

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
                            <a href="{{route('axe',[$item->slug])}}" class="text-lg">{{$item->title}} </a>
                            <span class="mt-2 text-xs">text de travial</span>


                        </div>
                    </div>
                    @endforeach

                </div>



            </div>
        </div>
    </div>
