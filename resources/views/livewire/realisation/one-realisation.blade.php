{{--<div class="min-h-sceen">


    <div class="relative w-full h-24 border-b border-gray-300 ">
        <div class="absolute inset-0 flex items-center justify-center">

            <h2
                class="mb-4 text-xl font-extrabold tracking-tight text-center text-gray-900 lg:text-4xl dark:text-white">
                {{$post->title}}</h2>

        </div>



    </div>
    <div class="flex items-center justify-start px-4">
        <x-bread-cumb :lien1="'post'" />

    </div>

    <div class="flex w-full px-6">
        <div class="min-h-screen lg:w-9/12">

            <div class="flex flex-col w-full p-4 ">
                <div>
                    <div class="flex items-center mb-4 ">

                        <div class="px-2">
                            <img src="https://actiondamienrdcongo.org/storage/news/1677594356.CEDA.jpeg"
                                class="w-16 h-16 rounded-full" alt="user">

                        </div>
                        <div class="flex flex-col gap-2">
                            <div>Dr Georegs </div>
                            <div class="flex flex-row gap-4">
                                <p>Publier</p>
                                <p>9 min read</p>
                                <p>Feb 18, 2021</p>

                            </div>
                        </div>

                    </div>
                    <div class="w-full border-t border-gray-200"></div>
                    <div class="flex items-center justify-between my-1">
                        <div class="flex w-full gap-4 p-4 ">

                            <a href="" class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                </svg>
                                <span>24</span>
                            </a>
                            <a href="" class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                </svg>
                                <span>34</span>
                            </a>


                        </div>
                        <div class="flex w-full gap-6 px-4">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                                </svg>
                            </a>


                        </div>

                    </div>
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div>


                </div>

            </div>
            <div class="min-h-screen px-4 mt-4 mb-4 prose markdown lg:prose-xl">

                {!! $post->content !!}

            </div>
            <div class="w-full mx-4 border border-gray-200 "></div>

            <section class="hidden px-8 pb-4 mt-8 not-format">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-lg font-bold text-gray-900 lg:text-2xl dark:text-white">Discussion (20)</h2>
                </div>

                <article class="p-6 mb-6 text-base bg-white rounded-lg dark:bg-gray-900">
                    <footer class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                            <p
                                class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">
                                <img class="w-6 h-6 mr-2 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                    alt="Michael Gough">Michael
                                Gough
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                                    title="February 8th, 2022">Feb. 8, 2022</time></p>
                        </div>
                        <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:text-gray-400 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            type="button">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 16 3">
                                <path
                                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                            </svg>
                            <span class="sr-only">Comment settings</span>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownComment1"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownMenuIconHorizontalButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                </li>
                            </ul>
                        </div>
                    </footer>
                    <p>Very straight-to-point article. Really worth time reading. Thank you! But tools are just the
                        instruments for the UX designers. The knowledge of the design tools are as important as the
                        creation of the design strategy.</p>
                    <div class="flex items-center mt-4 space-x-4">
                        <button type="button"
                            class="flex items-center text-sm font-medium text-gray-500 hover:underline dark:text-gray-400">
                            <svg class="mr-1.5 w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 18">
                                <path
                                    d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                            </svg>
                            Reply
                        </button>
                    </div>
                </article>
                <article class="p-6 mb-6 ml-6 text-base bg-white rounded-lg lg:ml-12 dark:bg-gray-900">
                    <footer class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                            <p
                                class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">
                                <img class="w-6 h-6 mr-2 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="Jese Leos">Jese Leos
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-12"
                                    title="February 12th, 2022">Feb. 12, 2022</time></p>
                        </div>
                        <button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:text-gray-400 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            type="button">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 16 3">
                                <path
                                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                            </svg>
                            <span class="sr-only">Comment settings</span>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownComment2"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownMenuIconHorizontalButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                </li>
                            </ul>
                        </div>
                    </footer>
                    <p>Much appreciated! Glad you liked it ☺️</p>
                    <div class="flex items-center mt-4 space-x-4">
                        <button type="button"
                            class="flex items-center text-sm font-medium text-gray-500 hover:underline dark:text-gray-400">
                            <svg class="mr-1.5 w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 18">
                                <path
                                    d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                            </svg>
                            Reply
                        </button>
                    </div>
                </article>


                <form class="my-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-bold text-gray-900 lg:text-2xl dark:text-white">Laisser un commentaire
                        </h2>
                    </div>

                    <div class="grid grid-cols-2 gap-4 px-6">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                name</label>
                            <input type="text" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John" required>
                        </div>
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                name</label>
                            <input type="text" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John" required>
                        </div>

                    </div>
                    <div
                        class="px-6 py-2 mb-4 bg-white border border-gray-200 rounded-lg rounded-t-lg dark:bg-gray-800 dark:border-gray-700">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" rows="6"
                            class="w-full px-0 text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                            placeholder="Write a comment..." required></textarea>
                    </div>

                    <button
                        class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium  text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">

                        post
                        comment
                    </button>


                </form>
            </section>




        </div>
        <div class="hidden min-h-screen px-4 border-gray-500 bg-gray-50 lg:flex-col lg:flex lg:w-3/12">


            <div class="flex flex-col p-2">
                <div>
                    <button class="button-65">Commenter</button>
                </div>

            </div>



            <h1 class="p-4 text-lg text-center">A consulter</h1>

            <div>
                @foreach ($otherpost as $item)
                <div class="flex gap-2 mb-4">
                    <div class="w-[40%]">
                        <img src="https://actiondamienrdcongo.org/storage/news/1677594356.CEDA.jpeg"
                            class="w-24 rounded-md">
                    </div>
                    <div class="flex w-[60%] flex-col">
                        <a href="{{route('Realisation.one',[$item->slug])}}" class="block text-xs break-words">{{$item->title}}</a>
                        <span class="mt-2 text-xs"></span>


                    </div>
            </div>
            @endforeach

            </div>

            <h1 class="hidden p-4 text-lg text-center">Tags de recherche</h1>

            <div class="flex flex-wrap hidden p-4">
                <span class="px-4 py-2 m-2 text-gray-800 bg-gray-200 rounded-full">Mot-clé 1</span>
                <span class="px-4 py-2 m-2 text-gray-800 bg-gray-200 rounded-full">Mot-clé 1</span>
                <!-- Ajoutez autant de balises <span> que nécessaire -->
            </div>

        </div>
</div>
<div class="px-4">


</div>

<aside aria-label="Related articles" class="py-8 lg:py-24 lg:hidden bg-gray-50 dark:bg-gray-800">
    <div class="max-w-screen-xl px-6 mx-auto">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">plus recent </h2>
        <div class="grid gap-12 px-8 sm:grid-cols-2 lg:grid-cols-4">
            <article class="max-w-xs">
                <a href="#">
                    <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                        class="mb-5 rounded-lg" alt="Image 1">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    aRTILE
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    YPP</p>
                <a href="#"
                    class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    Read in 2 minutes
                </a>
            </article>

        </div>
    </div>
</aside>

<section class="bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
        <div class="max-w-screen-md mx-auto sm:text-center">
            <h2 class="mb-4 text-xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                Inscrivez-vous à notre bulletin d'information</h2>
            <p class="max-w-2xl mx-auto mb-8 text-gray-500 md:mb-12 dark:text-gray-400">
                Restez informé(e) de l'avancée de notre feuille de route, des annonces et des remises exclusives.
                N'hésitez pas à
                vous inscrire avec votre adresse e-mail.</p>
            <form action="#">
                <div class="items-center max-w-screen-sm mx-auto mb-3 space-y-4 sm:flex sm:space-y-0">
                    <div class="relative w-full">
                        <label for="email"
                            class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                            address</label>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path
                                    d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                <path
                                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                            </svg>
                        </div>
                        <input
                            class="block w-full p-3 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg pl-9 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter your email" type="email" id="email" required="">
                    </div>
                    <div class="px-2">
                        <button type="button"
                            class="w-full px-5 py-3 text-sm font-medium text-center text-white bg-blue-700 border border-blue-600 rounded-lg cursor-pointer sm:rounded-none sm:rounded-r-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subscribe</button>
                    </div>
                </div>
                <div
                    class="max-w-screen-sm mx-auto text-sm text-left text-gray-500 newsletter-form-footer dark:text-gray-300">
                    Nous attachons de l'importance à la protection de vos données. <a href="#"
                        class="font-medium text-primary-600 dark:text-primary-500 hover:underline">Consultez notre
                        Politique de
                        confidentialité</a>.
                </div>
            </form>
        </div>
    </div>
</section>

</div>
--}}

<div>
    <section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/subheader_in_1.jpg"
        data-natural-width="1400" data-natural-height="350">
        <div id="sub_content_in">
            <div class="container p-6">
                <h1 class="mb-2">Actualités</h1>
                <p>{{$post->title}}</p>
            </div>
        </div>
    </section>


    <div class="max-w-6xl mx-auto mt-6">

        <div class="flex flex-col gap-6 pt-8 lg:flex-row">
            <div class="px-6 lg:w-9/12">

                <div class="col-lg-9 pe-lg-5">
                    <div class="post nopadding">
                        <img src="{{$post->getFirstMediaUrl('posts')}}" alt="" class="border img-fluid">
                        <div class="clearfix post_info">
                            <div class="post-left">
                                <ul>
                                    <li><i class="icon-calendar-empty"></i>On <span>{{$post->published_at->format('d/M/Y')}}</span></li>
                                    <li><i class="icon-inbox-alt"></i>In <a href="#">Top tours</a></li>
                                    <li class="flex gap-2">
                                        <span class=>
                                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                        </svg>
                                        </span>

                                    <span>Tags</span>
                                   @foreach ($post->tags as $tag)
                                                <a href="#">#{{$tag->tag}}</a>,
                                                @endforeach

                                    </li>
                                </ul>
                            </div>
                            <div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>Comments</div>
                        </div>
                        <h2>{{$post->title}}</h2>
                        <div class="min-h-screen mt-4 mb-4 prose text-justify markdown lg:prose-xl">

                                {!! $post->content !!}



                        <div class="flex flex-col items-start gap-6">
                            <span>Partager</span>

                            <div class="flex items-start">
                            {!! $shareCompenent !!}
                            </div>


                        </div>
                        </div>

                    </div><!-- end post -->
                    <hr>

                    {{--<h4>3 comments</h4>

                    <div id="comment mt-8">
                        <ol>
                            <li>
                                <div class="avatar">
                                    <a href="#"><img src="img/avatar1.jpg" alt=""></a></div>
                                <div class="clearfix comment_right">
                                    <div class="comment_info">
                                        Posted by <a href="#">Anna Smith</a><span>|</span> 25 apr 2019 <span>|</span><a
                                            href="#">Reply</a>
                                    </div>
                                    <p>
                                        Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu.
                                        Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel
                                        enim ipsum, et congue ante.
                                    </p>
                                </div>
                                <ul>
                                    <li>
                                        <div class="avatar"><a href="#"><img src="img/avatar2.jpg" alt=""></a></div>

                                        <div class="clearfix comment_right">
                                            <div class="comment_info">
                                                Posted by <a href="#">Tom Sawyer</a><span>|</span> 25 apr 2019 <span>|</span><a
                                                    href="#">Reply</a>
                                            </div>
                                            <p>
                                                Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu.
                                                Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis
                                                parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla.
                                                Nam vel enim ipsum, et congue ante.
                                            </p>
                                            <p>
                                                Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper
                                                venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum
                                                nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies
                                                rhoncus. Aliquam erat volutpat.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="avatar"><a href="#"><img src="img/avatar3.jpg" alt=""></a></div>

                                <div class="clearfix comment_right">
                                    <div class="comment_info">
                                        Posted by <a href="#">Adam White</a><span>|</span> 25 apr 2019 <span>|</span><a
                                            href="#">Reply</a>
                                    </div>
                                    <p>
                                        Cursus tellus quis magna porta adipiscin
                                    </p>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <h4>Leave a comment</h4>
                    <form action="#" method="post">
                        <div class="form-group">
                            <input class="form-control style_2" type="text" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <input class="form-control style_2" type="text" name="mail" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control style_2" style="height:150px;"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="reset" class="btn_1" value="Clear form" />
                            <input type="submit" class="btn_1" value="Post Comment" />
                        </div>
                    </form>--}}
                    <div class="w-full p-1 bg-white rounded-lg md:p-3 ">
                        <h3 class="p-1 mb-4 font-semibold">Commentaires</h3>
                        <div class="flex flex-col gap-5 m-3">

                           @forelse ($comments as $comment)


                            <div>
                                <div class="flex justify-between w-full border rounded-md">

                                    <div class="p-3">
                                        <div class="flex items-center gap-3">
                                            <img src="{{$comment->user->profile_photo_url}}"
                                                class="object-cover w-10 h-10 border-2 rounded-full border-emerald-400 shadow-emerald-400">
                                            <h3 class="font-bold">
                                                {{$comment->user->name}}
                                                <br>
                                                <span class="mt-2 text-sm font-normal text-gray-400">{{$comment->status}}</span>
                                            </h3>
                                        </div>
                                        <p class="mt-2 text-gray-600">
                                           {{$comment->content}}
                                        </p>
                                        @if($post->user_id == auth()->id())
                                        <button class="mt-4 text-right text-blue-500">Reply</button>
                                        @endif
                                    </div>


                                    <div class="flex flex-col items-end gap-3 py-3 pr-3">
                                        <div>
                                            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </div>
                                        <div>
                                            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </div>
                                    </div>

                                </div>




                                @forelse ($comment->replies as $reply)


                                <div class="font-bold text-gray-300 pl-14">|</div>
                                <div class="flex justify-between ml-5 border rounded-md">

                                    <div class="p-3">
                                        <div class="flex items-center gap-3">
                                            <img src="https://avatars.githubusercontent.com/u/22263436?v=4"
                                                class="object-cover w-10 h-10 border-2 rounded-full border-emerald-400 shadow-emerald-400">
                                            <h3 class="font-bold">
                                                User 2
                                                <br>
                                                <span class="text-sm font-normal text-gray-400">Level 1</span>
                                            </h3>
                                        </div>
                                        <p class="mt-2 text-gray-600">
                                            this is sample commnent
                                        </p>
                                    </div>


                                    <div class="flex flex-col gap-3 py-3 pr-3">
                                        <div>
                                            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </div>
                                        <div>
                                            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                                <!-- END Reply Container  -->
                                @empty

                                @endforelse

                            </div>

                            @empty
                            <div class="p-4 text-center bg-white border rounded-md">
                                <p class="text-gray-600">Il n'y a pas encore de commentaires.</p>
                            </div>

                            @endforelse


                        </div>


                        <form wire:submit.prevent='postComment'>
                        <div class="w-full px-3 mt-6 mb-2">
                            <textarea wire:model='comment'
                                class="w-full h-20 px-3 py-2 font-medium leading-normal placeholder-gray-400 bg-gray-100 border border-gray-400 rounded resize-none focus:outline-none focus:bg-white"
                                name="body" placeholder="Comment" required></textarea>
                        </div>

                        <div class="flex items-start justify-start px-3 my-3 ">
                            @auth
                                <div>
                                <input type="submit" class="px-2.5  py-1.5 rounded-md text-white text-sm bg-indigo-500 text-lg"
                                    value='Poster un commentaire'>
                            </div>


                                @else
                                <div>
                                    <input type="submit" class="px-2.5  py-1.5 rounded-md text-white text-sm bg-indigo-500 text-lg"
                                        value='Creer un compte pour poster'>
                                    </div>

                            @endauth


                        </div>

                        </form>

                    </div>
                </div>



            </div>



            @livewire('tool.sidebar-news')
        </div>


    </div>
    <hr />

    @livewire('tool.news-letter')

</div>
