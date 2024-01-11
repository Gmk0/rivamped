

<div class="pt-16">

    <x-section-head
    title="Actualités"
    description="Suivez nos dernières nouvelles et projets ici"
    >

    </x-section-head>


    <div class="max-w-6xl mx-auto mt-6 ">

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


           <div class="px-4 mx-2 lg:mx-0 lg:w-3/12">
                <div class="box_style_1">
                    <div class="widget">
                        <div class="form-group">
                            <input wire:model.live='search' type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div><!-- End Search -->

                    <hr>

                    <div class="widget">
                        <h5 class="my-4">Categories</h5>
                        <ul id="cat_nav">
                            @foreach ($categories as $category)
                            <li><a href="{{route('CategoryPost',$category->intitule)}}">{{$category->intitule}}</a></li>

                            @endforeach


                        </ul>
                    </div><!-- End widget -->

                </div><!-- End box style 1 -->

                <div class="widget">
                    <h4 class="mb-4">Recent post</h4>
                    <ul class="recent_post">
                        @forelse ($recents as $post)


                        <li class="flex">
                            <span class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                </svg>

                            </span>
                            <div class="flex flex-col">
                                <span>{{$post->published_at}}</span>
                                <a href="{{route('Realisation.one',[$post->slug])}}">{{$post->title}}</a>
                            </div>
                        </li>

                        @empty

                        <p class="!text-lg !text-center !text-red-500">Aucun element trouver pour <strong></strong>.</p>
                        @endforelse

                    </ul>
                </div><!-- End widget -->
                <hr>
                <div class="mt-4 widget tags">
                    <h4>Tags</h4>
                    <div class="flex flex-wrap">
                        @foreach ($tags as $tag)
                        <a class="{{$tag_search ===$tag->tag ?'!bg-gray-400 !text-white':''}}"
                            wire:click='addTag("{{$tag->tag}}",{{$tag->id}})'>{{$tag->tag}}</a>
                        @endforeach



                    </div>

                </div><!-- End widget -->
                <hr>
                <div class="widget archives">
                    <h4 class="mb-4">Archives</h4>
                    <ul class="list_2">
                        <li><a href="#">May 2015</a></li>
                        <li><a href="#">April 2015</a></li>
                        <li><a href="#">March 2015</a></li>
                        <li><a href="#">February 2015</a></li>
                        <li><a href="#">January 2015</a></li>
                    </ul>
                </div><!-- End widget -->

            </div>
        </div>

    </div>
</div>
