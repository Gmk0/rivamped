<div class="min-h-screen">

   <div class="relative w-full h-24 border-b border-gray-300 ">
        <div class="absolute inset-0 flex items-center justify-center">

            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:text-4xl dark:text-white">

                Nos realisations
            </h2>

        </div>

        <div class="absolute inset-0 flex items-center justify-start px-4">
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

            @for ($i =1 ; $i <10 ; $i++)




            <div class="container mx-2 lg:mx-auto">

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
                                    <div class="block  text-white bg-blue-600 rounded-full py-1.5 px-4">
                                        Actualité
                                    </div>
                                    <div>
                                        <p class="flex gap-1 mt-2 text-sm text-gray-400">
                                                            <i class="mr-2 fa fa-calendar-alt"></i>
                                                            <span class="block mr-2">

                                                                26 Mai 2021
                                                            </span>

                                            </p>
                                    </div>
                                </div>


                                <h5 class="text-xl font-semibold text-yellow-300 truncate">
                                    <a href="https://actiondamienrdcongo.org/news/9" class="text-danger">
                                        VISITE DE MR. JO INDEKEU, AMBASSADEUR DU ROYAUME DE LA BELGIQUE EN RDC AU CEDA
                                    </a>
                                </h5>

                                <p class="text-base font-medium">
                                    Visite de l'Ambassadeur de la Belgique en RD Congo, M. Jo INDEKEU
                                        et du Conseiller Ministériel M. Stefan MEERSCHAERT au Centre d'Excellence Damien CEDA où une
                                        nou...
                                </p>
                                    <p class="my-4">
                                        <a class="py-2 decoration-none hover:translate-x-4 transition-all border-blue-600 border-b-[4px]  no-underline rounded-0" href="https://actiondamienrdcongo.org/news/9">
                                            Lire la suite ... »
                                        </a>
                                    </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            @endfor

        </div>

    </div>


</div>
