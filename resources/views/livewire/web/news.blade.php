{{--<div class="min-h-screen">

   <div class="relative w-full h-24 border-b border-gray-300 ">
        <div class="absolute inset-0 flex items-center justify-center">

            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:text-4xl dark:text-white">

                Actualites
            </h2>

        </div>

        <div class="absolute inset-0 items-center justify-start hidden px-4 lg:flex">
            <x-bread-cumb :lien1="'Realisations'" />

        </div>

    </div>

    <div class="px-4 mb-12">



        <div class="max-w-6xl mx-auto mt-4">


            <div class="flex justify-end px-6 ">
                <div class="">

                <select id="default"
                    class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Filtrer</option>
                    <option value="US">Plus Recent</option>
                    <option value="CA">Plus ancien</option>

                </select>

                </div>

            </div>

            @foreach ($realisations as $realisation)




            <div class="container mx-2 border-b lg:mx-auto">

                <div class="py-5 border-gray-600">
                    <div class="py-3 ">
                        <div class="flex flex-col gap-2 px-6 lg:grid lg:px-0 lg:grid-cols-12">
                            <div class="col-span-6 mb-4 lg:col-span-5 lg:mb-0">
                                <div class="overflow-hidden  rounded-lg max-h-[16rem]">
                                    <img src="https://actiondamienrdcongo.org/storage/news/1677594356.CEDA.jpeg" alt=""
                                        class="bg-fill ">
                                    <div class="mask"></div>
                                </div>
                            </div>

                            <div class="flex flex-col col-span-6 gap-1 px-3 lg:col-span-7">
                                <div class="flex items-center justify-between pb-4 px-auto">


                                    <div class="block  text-white bg-[#006bb3] rounded-full py-1.5 px-4">
                                        Actualité
                                    </div>
                                    <div>
                                        <p class="flex gap-1 mt-2 text-sm text-gray-400">
                                                            <i class="mr-2 fa fa-calendar-alt"></i>
                                                            <span class="block mr-2">

                                                                {{$realisation->published_at }}
                                                            </span>

                                            </p>
                                    </div>
                                </div>


                                <h5 class="text-xl font-semibold text-yellow-300 truncate">
                                    <a href="{{route('Realisation.one',[$realisation->slug])}}" class="text-danger">
                                     {{$realisation->title }}
                                    </a>
                                </h5>

                                <p class="text-base font-medium">
                                   {{$realisation->description }}
                                </p>
                                    <p class="my-4">
                                        <a href="{{route('Realisation.one',[$realisation->slug])}}" class="py-2 decoration-none hover:translate-x-4 transition-all border-[#006bb3] border-b-[4px]  no-underline rounded-0" href="https://actiondamienrdcongo.org/news/9">
                                            Lire la suite ... »
                                        </a>
                                    </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <hr/>

            @endforeach

        </div>

    </div>


</div>
--}}

<div>
    <section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/subheader_in_1.jpg"
        data-natural-width="1400" data-natural-height="350">
        <div id="sub_content_in">
            <div class="container p-6">
                <h1>Actualités</h1>
                <p>Suivez nos dernières nouvelles et projets ici.</p>
            </div>
        </div>
    </section>


<div class="max-w-6xl mx-auto mt-6">

    <div class="flex flex-col gap-6 pt-8 lg:flex-row">
        <div class="px-6 lg:w-9/12">


            @forelse ($realisations as $new )
                <div class="post">

                    <figure class="mb-0 animated"><a href="{{route('Realisation.one',[$new->slug])}}" title="{{$new->title}}"><img
                                src="{{$new->getFirstMediaUrl('posts')}}" alt="" class="object-fill !h-[50%] img-fluid"></a>
                    </figure>
                    <div class="clearfix post_info">
                        <div class="post-left">
                            <ul>
                                <li><i class="icon-calendar-empty"></i> On <span>{{$new->created_at}}</span></li>
                                <li><i class="icon-inbox-alt"></i> In <a href="#">Security</a></li>
                                <li><i class="icon-tags"></i>
                                    @foreach ($new->tags as $tag)
                                    <a href="#">#{{$tag->tag}}</a>,
                                    @endforeach


                                </li>
                            </ul>
                        </div>
                        <div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>Comments</div>
                    </div>
                    <h2 class="mb-4">{{$new->title}}</h2>
                    <p>
                       {{$new->description }}
                    </p>
                    <a href="{{route('Realisation.one',[$new->slug])}}" class="mt-6 btn_1">Lire plus</a>
                </div>

                <hr class="bg-gray-700">
            @empty

            @endforelse

            {{$realisations->links()}}


            <!-- End pagination-->
        </div><!-- End col-md-9 -->


        @livewire('tool.sidebar-news')
    </div>

</div>
</div>
