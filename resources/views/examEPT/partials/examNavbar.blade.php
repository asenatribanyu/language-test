<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="flex items-center">
            <img class="w-20 h-auto" src="{{ asset('img/lembaga-bahasa.png') }}" alt="logo">
        </div>
        <div class="text-3xl text-center font-semibold dark:text-white">
            2h 1m 30s
        </div>
        <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
            aria-controls="drawer-navigation"
            class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div id="drawer-navigation"
            class="fixed top-0 left-0 z-40 w-[400px] h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
            tabindex="-1" aria-labelledby="drawer-navigation-label">
            <h5 id="drawer-navigation-label" class="text-lg font-semibold uppercase dark:text-gray-400">
                Question Navigation</h5>
            <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <div>
                <div class="mt-5">
                    <h2 class="text-base font-normal">SECTION ONE - Listening Comperhension Part A</h2>
                    <div class="mt-2 flex flex-wrap gap-1">
                        @for ($a = 1; $a < 21; $a++)
                            <button type="button"
                                class="w-10 h-10 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $a }}</button>
                        @endfor
                    </div>
                </div>
                <div class="mt-5">
                    <h2 class="text-base font-normal">SECTION ONE - Listening Comperhension Part B</h2>
                    <div class="mt-2 flex flex-wrap gap-1">
                        @for ($a = 1; $a < 21; $a++)
                            <button type="button"
                                class="w-10 h-10 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $a }}</button>
                        @endfor
                    </div>
                </div>
                <div class="mt-5">
                    <h2 class="text-base font-normal">SECTION ONE - Listening Comperhension Part c</h2>
                    <div class="mt-2 flex flex-wrap gap-1">
                        @for ($a = 1; $a < 21; $a++)
                            <button type="button"
                                class="w-10 h-10 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $a }}</button>
                        @endfor
                    </div>
                </div>
                <div class="mt-5">
                    <h2 class="text-base font-normal">SECTION TWO - Structure Expression</h2>
                    <div class="mt-2 flex flex-wrap gap-1">
                        @for ($a = 1; $a < 21; $a++)
                            <button type="button"
                                class="w-10 h-10 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $a }}</button>
                        @endfor
                    </div>
                </div>
                <div class="mt-5">
                    <h2 class="text-base font-normal">SECTION TWO - Written Expression</h2>
                    <div class="mt-2 flex flex-wrap gap-1">
                        @for ($a = 1; $a < 21; $a++)
                            <button type="button"
                                class="w-10 h-10 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $a }}</button>
                        @endfor
                    </div>
                </div>
                <div class="mt-5">
                    <h2 class="text-base font-normal">SECTION THREE - Reading Comperhension</h2>
                    <div class="mt-2 flex flex-wrap gap-1">
                        @for ($a = 1; $a < 21; $a++)
                            <button type="button"
                                class="w-10 h-10 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-sm hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ $a }}</button>
                        @endfor
                    </div>
                </div>
            </div>

            {{-- Footer Navigation --}}
            <div class="flex mt-5 justify-end items-center border-t-2 pt-3 dark:border-gray-600">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Finish</button>
            </div>
        </div>
    </div>
</nav>
