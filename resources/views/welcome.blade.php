<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @livewireStyles
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
                            <div x-data="{ showLoginModal: true }">
                                <span @click="showLoginModal = true">Login</span>
                                <!-- This example requires Tailwind CSS v2.0+ -->
                                <div 
                                    class="fixed z-10 inset-0 overflow-y-auto"
                                    x-show="showLoginModal"
                                    x-cloak
                                >
                                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                        <!--
                                        Background overlay, show/hide based on modal state.

                                        Entering: "ease-out duration-300"
                                            From: "opacity-0"
                                            To: "opacity-100"
                                        Leaving: "ease-in duration-200"
                                            From: "opacity-100"
                                            To: "opacity-0"
                                        -->
                                        <div
                                            x-show="showLoginModal"
                                            x-transition:enter="ease-out duration-300"
                                            x-transition:enter-start="opacity-0"
                                            x-transition:enter-end="opacity-100"
                                            x-transition:leave="ease-in duration-200"
                                            x-transition:leave-start="opacity-100"
                                            x-transition:leave-end="opacity-0"
                                            class="fixed inset-0 transition-opacity"
                                            @click="showLoginModal = false"
                                            aria-hidden="true"
                                        >
                                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                        </div>

                                        <!-- This element is to trick the browser into centering the modal contents. -->
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                                        <!--
                                        Modal panel, show/hide based on modal state.

                                        Entering: "ease-out duration-300"
                                            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            To: "opacity-100 translate-y-0 sm:scale-100"
                                        Leaving: "ease-in duration-200"
                                            From: "opacity-100 translate-y-0 sm:scale-100"
                                            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        -->
                                        <div 
                                            x-show="showLoginModal"
                                            x-transition:enter="ease-out duration-300"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="ease-in duration-200"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" 
                                            role="dialog" 
                                            aria-modal="true" 
                                            aria-labelledby="modal-headline"
                                        >
                                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
												<div class="flex flex-row-reverse">
                                                    <!--Cross HeroIcons-->
													<svg @click="showLoginModal = false" class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
														<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
													</svg>
												</div>

												<div class="mt-3 sm:mt-0">
													<h3 class="text-gray-700 text-2xl font-semibold">
														Account Login
													</h3>
												</div>

												<div class="mt-3">
													<form action="/login" method="POST" class="flex flex-col space-y-5">
														@csrf
                                                        <!--Login email-->
														<div class="flex flex-col">
															<label for="email" class="text-sm font-semibold text-gray-500">Email address</label>
															<input name="email" type="email" id="email" autofocus="" class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
														</div>

														<div class="flex flex-col space-y-1">
															<div class="flex items-center justify-between">
																<label for="password" class="text-sm font-semibold text-gray-500">Password</label>
																<a href="#" class="text-sm text-blue-600 hover:underline focus:text-blue-800">Forgot Password?</a>
															</div>
															<input name="password" type="password" id="password" class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200">
														</div>

														<div class="flex items-center space-x-2">
															<input type="checkbox" id="remember" class="w-4 h-4 transition duration-300 rounded focus:ring-2 focus:ring-offset-0 focus:outline-none focus:ring-blue-200">
															<label name="remember" for="remember" class="text-sm font-semibold text-gray-500">Remember me</label>
														</div>

														<div>
															<button type="submit" class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-4">
																Log in
															</button>
														</div>

														<div class="flex flex-col space-y-5">
                                                            <span class="flex items-center justify-center space-x-2">
                                                                <span class="h-px bg-gray-400 w-14"></span>
                                                                <span class="font-normal text-gray-500">or login with</span>
                                                                <span class="h-px bg-gray-400 w-14"></span>
                                                            </span>

                                                            <div class="flex flex-col space-y-4">
                                                                <a href="#" class="flex items-center justify-center px-4 py-2 space-x-2 transition-colors duration-300 border border-gray-800 rounded-md group hover:bg-gray-800 focus:outline-none">
                                                                    <span>
                                                                        <svg class="w-5 h-5 text-gray-800 fill-current group-hover:text-white" viewBox="0 0 16 16" version="1.1" aria-hidden="true">
                                                                            <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <span class="text-sm font-medium text-gray-800 group-hover:text-white">Github</span>
                                                                </a>
                                                                <a href="#" class="flex items-center justify-center px-4 py-2 space-x-2 transition-colors duration-300 border border-blue-500 rounded-md group hover:bg-blue-500 focus:outline-none">
                                                                    <span>
                                                                        <svg class="text-blue-500 group-hover:text-white" width="20" height="20" fill="currentColor">
                                                                            <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <span class="text-sm font-medium text-blue-500 group-hover:text-white">Twitter</span>
                                                                </a>
                                                            </div>
                                                        </div>
													</form>
												</div>							
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex-1 text-center">
                            <!--Register Modal-->
                            <div x-data="{ showRegisterModal: false }">
                            </div>
                            <a href="#">Register</a>
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