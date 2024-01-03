
<div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
    <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
        <div class="lg:w-1/2 xl:w-5/12 p-4 sm:p-12">
            <div>
                <img src="/img/logo2.svg"
                    class="w-32 mx-auto" />
            </div>
            <div class="mt-8 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">
                    S'inscrire
                </h1>
                <form wire:submit.prevent='register' class="w-full flex-1 mt-4">

                    <div class="mx-auto flex flex-col gap-6 max-w-md">

                        <x-input right-icon="user" required wire:model='user.name' label="Name" placeholder="your name" />

                        <x-input right-icon="phone"required wire:model='user.phone'  label="Telephone" placeholder="your name" />

                        <x-input right-icon="mail" required type='email' wire:model='user.email' label="Email" placeholder="your name" />


                        <x-select class="my-3" label="Selectionner votre status" required placeholder="Select one status"
                            :options="['benevole', 'partenaire', 'simple']" wire:model='user.status' />

                        <x-inputs.password class="my-3" required label="Mot de passe" wire:model='user.password' />

                        <x-inputs.password class="my-3" required label="Confirmation" wire:model='user.password_confirmation' />

                       @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4 ">
                            <x-jet-checkbox name="terms" id="terms" required />
                            <x-jet-label for="terms">
                                <div class="flex items-center">


                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms
                                            of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy
                                            Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                        @endif

                        <button
                            class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
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
        <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
            <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');">
            </div>
        </div>
    </div>
</div>
