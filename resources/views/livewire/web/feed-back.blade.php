


<div class="min-h-screen pt-16 bg-white">


    <x-section-head title="Vos avis" link_title='avis'>

    </x-section-head>


    <div class="px-4 mb-12">





        <div class="max-w-6xl px-4 pt-8 mx-auto">

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex flex-col gap-4 p-4">

                    <div>
                        <x-jet-label for="name" value="{{ __('name') }}" />
                        <x-jet-input id="name" warning class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus
                            autocomplete="username" />
                    </div>
                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus
                            autocomplete="username" />
                    </div>


                    <div class="col-span-2">


                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Commentaire</label>
                        <textarea id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-yellow-300 focus:border-yellow-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Write your thoughts here..."></textarea>

                    </div>
                    <div>
                        <button type="button"
                            class="text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:ring-yellow-300 font-medium w-full text-sm px-5 py-2.5 mr-2 mb-2  focus:outline-none ">Envoyer</button>

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
                    <h1 class="text-xl font-bold text-center text-yellow-300 uppercase dark:text-gray-200">Les Avis</h1>
                </div>

                <div class="grid gap-6 pt-4 lg:grid-cols-2">



                    <div
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


