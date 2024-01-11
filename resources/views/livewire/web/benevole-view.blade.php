<div class="flex justify-center min-h-screen py-16 text-gray-900 bg-gray-100">
    <div class="flex justify-center flex-1 max-w-screen-xl m-0 bg-white shadow sm:m-10 sm:rounded-lg">
        <div class="p-4 lg:w-1/2 xl:w-5/12 sm:p-12">
            <div>

            </div>
            <div class="flex flex-col items-center mt-8">
                <h1 class="text-2xl font-extrabold xl:text-3xl">
                    S'inscrire Benevole
                </h1>
                <form wire:submit.prevent='register' class="flex-1 w-full mt-4">

                    <x-errors />
                    <div class="flex flex-col max-w-md gap-6 mx-auto">

                        <x-input right-icon="user" required wire:model='user.name' type="text" label="Name"
                            placeholder="your name" />

                        <x-input right-icon="phone" required wire:model='user.phone' label="Telephone"
                            placeholder="Telephone" />

                        <x-input right-icon="mail" required type='email' wire:model='user.email' label="Email"
                            placeholder="your name" />


                        <x-select class="my-3" label="Selectionner votre status" required
                            placeholder="Select one status" :options="['benevole', 'partenaire', 'simple']"
                            wire:model='user.status' />

                        <x-inputs.password class="my-3" required label="Mot de passe" wire:model='user.password' />

                        <x-inputs.password class="my-3" required label="Confirmation"
                            wire:model='user.password_confirmation' />

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4 ">

                            <x-jet-label for="terms">
                                <x-jet-checkbox name="terms" id="terms" required />
                                <div class="flex items-center">


                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                            class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms
                                            of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                            class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy
                                            Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                                </x-label>
                        </div>
                        @endif

                        <button
                            class="flex items-center justify-center w-full py-4 mt-5 font-semibold tracking-wide text-gray-100 transition-all duration-300 ease-in-out bg-indigo-500 rounded-lg hover:bg-indigo-700 focus:shadow-outline focus:outline-none">
                            <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="8.5" cy="7" r="4" />
                                <path d="M20 8v6M23 11h-6" />
                            </svg>
                            <span class="ml-3">
                                S'inscrire
                            </span>
                        </button>

                    </div>
                </form>
            </div>
        </div>
        <div class="flex-1 hidden text-center bg-indigo-100 lg:flex">
            <div class="w-full m-12 bg-center bg-no-repeat bg-contain xl:m-16"
                style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');">
            </div>
        </div>
    </div>
</div>
