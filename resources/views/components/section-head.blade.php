@props(['title' => '',
        'description' => '',
        'link_title' => '',

])


<section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/subheader_in_1.jpg"
        data-natural-width="1400" data-natural-height="350">
        <div id="sub_content_in">
            <div class="container p-6">
                <h1 class="!text-2xl lg:!text-4xl !mb-2">{{$title}}</h1>
                @empty(!$description)
                <p class="!text-lg lg:!text-3xl">{{$description}}</p>
                @endempty
            </div>

            <div class="px-6 py-2">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="{{ url('/')}}"
                                class="inline-flex items-center text-sm font-medium text-white hover:text-yellow-300 dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg>
                                Accueil
                            </a>
                        </li>

                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-yellow-300 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="text-sm font-medium text-gray-200 ms-1 md:ms-2 dark:text-gray-400">{{$link_title}}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

    </section>
