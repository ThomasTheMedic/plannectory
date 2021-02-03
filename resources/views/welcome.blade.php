<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @livewireStyles
        <x-social-media-meta
            title="Plannectory"
            description="Start planning your course efficiently with plannectory!"
            image="https://farm6.staticflickr.com/5510/14338202952_93595258ff_z.jpg"
            card="Planning courses with plannectory has never been easier!"
        />
    </head>

    <body class="bg-gray-200">
        <!--SideNav-->
        <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
            <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
                <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                    <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Plannectory</a>
                    <!--Mobile expand button-->
                    <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:flex md:flex-col px-4 pb-4 md:pb-0 md:overflow-y-auto">
                    <div class="flex-1">
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Home</a>
                    </div>

                    <div class="flex">
                        <div class="flex-1 text-center">
                            <!--Login Modal-->
                            <x-modal
                                title="Account Login"
                            >
                                <x-slot name="trigger">
                                    <!--Style your button here :D -->
                                    <button @click="on = true">Login</button>
                                </x-slot>

                                <div class="mt-3">
                                    <livewire:forms.login />
                                </div>
                            </x-modal>
                        </div>

                        <div class="flex-1 text-center">
                            <!--Register Modal-->
                            <x-modal
                                title="Register"
                            >
                                <x-slot name="trigger">
                                    <!--Style your button here :D -->
                                    <button @click="on = true">Register</button>
                                </x-slot>

                                Are you really sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.
                            </x-modal>
                        </div>
                    </div>
                </nav>
            </div>

            <!--Main bulk of content goes here-->
            <div>
            </div>
        </div>


        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </body>
</html>
