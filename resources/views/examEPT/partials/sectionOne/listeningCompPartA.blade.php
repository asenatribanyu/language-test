{{-- SECTION ONE - Listening Comperhension Part A --}}
<div
    class="p-5 mt-5 bg-white border border-gray-200 rounded-lg shadow max-md:w-full max-md:h-full dark:bg-gray-800 dark:border-gray-700">
    <div class="border-b-2 border-gray-200">
        <h1 class="pb-2 text-2xl font-semibold dark:text-white">SECTION ONE - Listening Comperhension Part A</h1>
    </div>

    {{-- Direction of Listening Comprehension Part A --}}
    <div class="mt-5">
        <h2 class="pb-2 text-xl font-medium dark:text-white">Direction of Listening Comprehension Part A:</h2>
        <div class="p-3 border-2 rounded-lg">
            <audio class="" controls>
                <source src="" type="">
            </audio>
            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin convallis nibh mi,
                et tincidunt purus elementum sed. Vivamus ultricies velit a nulla varius, nec tempor urna
                efficitur. Vestibulum et libero non mauris commodo tincidunt. Vestibulum eu ligula nec erat
                dapibus ornare. Suspendisse potenti. In sit amet lobortis felis, eu ultrices nunc. Cras iaculis
                aliquam arcu at iaculis. Nam finibus nisi id tellus posuere tempor. Etiam a rutrum nisi, vitae
                sagittis mauris. Duis ac arcu ut turpis egestas dignissim eu in quam. Curabitur convallis felis
                quis tempus condimentum. Nam et ligula ex. Cras dignissim massa vitae mauris luctus convallis.
            </p>
        </div>
    </div>

    {{-- Question List of Listening Comperhension Part A --}}
    <div class="mt-5">
        <h2 class="pb-2 text-xl font-medium dark:text-white">Question List of Listening Comperhension Part A:</h2>
        @for ($i = 0; $i < 2; $i++)
            <div class="p-3 mb-3 border-2 rounded-lg">
                <div class="flex gap-5">
                    <div
                        class="flex items-center justify-center w-10 h-10 text-base font-medium border-2 border-gray-400 rounded-full">
                        <div>{{ $i + 1 }}.</div>
                    </div>
                    <div>
                        <button type="button"
                            class="w-10 h-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 -2 13 21">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M1 1.984v14.032a1 1 0 0 0 1.506.845l12.006-7.016a.974.974 0 0 0 0-1.69L2.506 1.139A1 1 0 0 0 1 1.984Z" />
                            </svg>
                        </button>
                        <button type="button"
                            class="w-10 h-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 -2 11 20">
                                <path fill-rule="evenodd"
                                    d="M0 .8C0 .358.32 0 .714 0h1.429c.394 0 .714.358.714.8v14.4c0 .442-.32.8-.714.8H.714a.678.678 0 0 1-.505-.234A.851.851 0 0 1 0 15.2V.8Zm7.143 0c0-.442.32-.8.714-.8h1.429c.19 0 .37.084.505.234.134.15.209.354.209.566v14.4c0 .442-.32.8-.714.8H7.857c-.394 0-.714-.358-.714-.8V.8Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div>
                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1"
                                class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Answer
                                A</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1"
                                class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Answer
                                B</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1"
                                class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Answer
                                C</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-1" type="radio" value="" name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1"
                                class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Answer
                                D</label>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    {{-- Footer Navigation --}}
    <div class="flex items-center justify-between pt-3 mt-5 border-t-2 dark:border-gray-600">
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Prev</button>
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
    </div>
</div>
