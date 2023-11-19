


    <div class="min-h-screen">

       <div class="relative w-full h-24 border-b border-gray-300 ">
        <div class="absolute inset-0 flex items-center justify-center">

            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:text-4xl dark:text-white">
                VOS AVIS</h2>

        </div>

        <div class="absolute hidden inset-0 lg:flex items-center justify-start px-4">
            <x-bread-cumb :lien1="'Vos Avis'" />

        </div>

    </div>


        <div class="px-4 mb-12">





            <div class="max-w-6xl px-4 pt-8 mx-auto">

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="flex flex-col gap-4 p-4">

                       <div>
                            <x-label for="name" value="{{ __('name') }}" />
                            <x-input id="name" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus
                                autocomplete="username" />
                        </div>
                       <div>
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus
                                autocomplete="username" />
                        </div>


                        <div class="col-span-2">


                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Commentaire</label>
                            <textarea id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write your thoughts here..."></textarea>

                        </div>
                        <div>
                            <button type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium w-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Envoyer</button>

                        </div>


                    </div>
                    <div class="bg-white rounded-lg">

                        <div class="">
                            <div class="max-w-xl p-6 mx-auto mt-10 border rounded-lg">
                                <p class="mb-4 text-lg font-bold text-center">Vous avez utilisé notre plateforme pour faire
                                    une différence dans la vie des détenus et contribuer à leur réinsertion.</p>
                                <p class="mb-4 text-center">Partagez votre expérience et aidez-nous à améliorer nos efforts
                                    pour créer un impact encore plus positif.</p>
                                <p class="mb-6 text-center">Votre feedback est précieux pour nous et pour ceux qui cherchent
                                    à changer des vies.</p>

                            </div>

                        </div>
                    </div>

                </div>
                <hr>

                <div class="pt-8 ">

                    <div class="mb-6">
                        <h1 class="text-xl font-bold text-center text-yellow-600 uppercase dark:text-gray-200">Les Avis</h1>
                    </div>

                    <div class="grid gap-6 pt-4 lg:grid-cols-2">



                        <div v-for="i in 4" :key="i"
                            class="flex flex-col gap-4 p-4 bg-gray-100 rounded-lg shadow-lg dark:bg-gray-700">
                            <!-- Profile and Rating -->
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div
                                        class="flex items-center justify-center font-bold text-white uppercase bg-red-500 rounded-full w-7 h-7">
                                        J</div>
                                    <span class="font-semibold">Jess Hopkins</span>
                                </div>
                                <div class="flex items-center gap-1 text-orange-300">
                                    <!-- Add rating elements here if needed -->
                                </div>
                            </div>

                            <!-- Feedback content -->
                            <div>
                                <p class="mt-2 text-lg">Gorgeous design! Even more responsive than the previous version. A
                                    pleasure to use!</p>
                            </div>

                            <!-- Date and share button -->
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-gray-500">Feb 13, 2021</span>
                                <button
                                    class="p-1 px-2 text-white bg-gray-900 border border-gray-900 rounded hover:bg-gray-800">
                                    <ion-icon name="share-outline"></ion-icon> Share
                                </button>
                            </div>
                        </div>





                    </div>


                </div>

            </div>



        </div>


    </div>


