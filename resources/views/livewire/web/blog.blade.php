<div class="">

    <div class="relative w-full h-24 ">
        <div class="absolute inset-0 flex items-center justify-center">

            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-center text-gray-800 lg:text-4xl dark:text-white">
                Notre Blog</h2>

        </div>

        <div class="absolute inset-0 flex items-center justify-start px-4">
         <x-bread-cumb :lien1="'Blog'" />

        </div>


    </div>



<!-- component -->


<div>
    <div class="flex flex-col min-h-screen px-2 bg-white dark:bg-gray-900">

        <section class="px-4">
            <div class="max-w-screen-xl px-2 py-8 mx-auto lg:py-16 lg:px-2">
                <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">


                </div>

                <div class="flex flex-row w-full">
                    <div class="grid w-[80%] gap-2 lg:grid-cols-3">


                        @foreach ($blogs as $blog)
                        <div class="mx-2 ">

                            <div class="py-5 border-gray-600">
                                <div class="py-3">
                                    <div class="flex flex-col gap-2 px-2">
                                        <div class="mb-4">
                                            <div class="overflow-hidden  rounded-lg max-h-[16rem]">
                                                <img src="https://actiondamienrdcongo.org/storage/news/1677594356.CEDA.jpeg" alt=""
                                                    class="bg-fill ">
                                                <div class="mask"></div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col gap-1 px-3 ">
                                            <div class="flex items-center justify-between pb-4 px-auto">
                                                <div class="block px-4 py-1 text-xs text-white bg-blue-400 rounded-full">
                                                    Actualité
                                                </div>
                                                <div>
                                                    <p class="flex gap-1 mt-2 text-sm text-gray-400">
                                                        <i class="mr-2 fa fa-calendar-alt"></i>
                                                        <span class="block mr-2">

                                                            {{$blog->created_at}}
                                                        </span>

                                                    </p>
                                                </div>
                                            </div>


                                            <h5 class="text-lg font-semibold text-yellow-300 truncate">
                                                <a href="{{route('blog.view',[$blog->slug])}}" class="text-danger">
                                                    {{$blog->title}}
                                                </a>
                                            </h5>

                                            <p class="text-[14px] font-medium">
                                                {{$blog->description}}
                                                ...
                                            </p>
                                            <p class="my-4">
                                                <a href="{{route('blog.view',[$blog->slug])}}"
                                                    class="py-2 decoration-none hover:translate-x-4 transition-all border-red-600 border-b-[4px]  no-underline rounded-0"
                                                    href="https://actiondamienrdcongo.org/news/9">
                                                    Lire la suite ... »
                                                </a>
                                            </p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        @endforeach


                    </div>
                    <div class="hidden min-h-screen px-2 border-gray-500 lg:flex-col lg:flex w-[20%]">


                        <div class="flex flex-col p-2">
                            <div>

                            </div>

                        </div>
                        <hr>
                        <h1 class="p-4 text-lg text-center">Rubrique</h1>

                        <div class="flex flex-col gap-2">
                            <p class="px-4 py-2 text-base text-gray-800 rounded-full cursor-pointer rubrique">Droit du travail</p>

                            <!-- Ajoutez autant de balises <p> que nécessaire -->
                        </div>
                        <hr>
                        <h1 class="p-4 text-lg text-center ">A consulter</h1>

                        <div>
                            @for ($i=0; $i <4; $i++) <div class="flex gap-2 mb-4">
                                <div class="w-[40%]">
                                    <img src="https://actiondamienrdcongo.org/storage/news/1677594356.CEDA.jpeg" class="w-24 rounded-md">
                                </div>
                                <div class="flex w-[60%] flex-col">
                                    <a href=" text-lg">text de travial sure la communication </a>
                                    <span class="mt-2 text-xs">text de travial</span>


                                </div>
                        </div>
                        @endfor

                        <hr>

                    </div>

                </div>

            </div>
        </section>



    </div>
</div>




</div>
