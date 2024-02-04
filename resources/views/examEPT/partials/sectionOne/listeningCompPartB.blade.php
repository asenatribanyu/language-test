{{-- SECTION ONE - Listening Comperhension Part B --}}
<div
    class="p-5 mt-5 bg-white border border-gray-200 rounded-lg shadow max-md:w-full max-md:h-full dark:bg-gray-800 dark:border-gray-700">
    <div class="border-b-2 border-gray-200">
        <h1 class="pb-2 text-2xl font-semibold dark:text-white">SECTION ONE - Listening Comperhension Part B</h1>
    </div>

    {{-- Direction of Listening Comprehension Part B --}}
    <div class="mt-5">
        <h2 class="pb-2 text-xl font-medium dark:text-white">Direction of Listening Comprehension Part B:</h2>
        <div class="p-3 border-2 rounded-lg">
            <audio controls>
                @foreach ($enrolls->exam->eptDirection as $direction)
                    @if ($direction->section == 'part b')
                        <source src="{{ asset('storage/' . $direction->audio) }}">
                        Your browser does not support the audio element.
                    @endif
                @endforeach
            </audio>
            @foreach ($enrolls->exam->eptDirection as $direction)
                @if ($direction->section == 'part b')
                    <p class="mt-2">{{ $direction->direction }}</p>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Question List of Listening Comperhension Part B --}}
    <div class="mt-5">
        <h2 class="pb-2 text-xl font-medium dark:text-white">Question List of Listening Comperhension Part B:</h2>
        @foreach ($enrolls->exam->eptStory as $story)
            @if ($story->section == 'part b')
                <div class="p-3 border-2 rounded-lg">
                    <h3 class="flex items-center justify-end gap-5 mb-3">
                        <p class="text-lg font-medium">Audio Story 1 - 10</p>
                        <div>
                            <button type="button" id="playStoryAudio"
                                class="w-10 h-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 -2 13 21">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M1 1.984v14.032a1 1 0 0 0 1.506.845l12.006-7.016a.974.974 0 0 0 0-1.69L2.506 1.139A1 1 0 0 0 1 1.984Z" />
                                </svg>
                            </button>
                            <button type="button" id="pauseStoryButton" data-modal-target="popup-pause-story"
                                data-modal-toggle="popup-pause-story"
                                class="hidden w-10 h-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 -2 11 20">
                                    <path fill-rule="evenodd"
                                        d="M0 .8C0 .358.32 0 .714 0h1.429c.394 0 .714.358.714.8v14.4c0 .442-.32.8-.714.8H.714a.678.678 0 0 1-.505-.234A.851.851 0 0 1 0 15.2V.8Zm7.143 0c0-.442.32-.8.714-.8h1.429c.19 0 .37.084.505.234.134.15.209.354.209.566v14.4c0 .442-.32.8-.714.8H7.857c-.394 0-.714-.358-.714-.8V.8Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <audio id="audioStorySource" src="{{ asset('storage/' . $story->story) }}"></audio>

                            {{-- Pause Story Modal --}}
                            <div id="popup-pause-story" tabindex="-1"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full p-4">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="popup-pause-story">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-4 text-center md:p-5">
                                            <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                Are you sure you want to pause the audio? The audio will only play once.
                                            </h3>
                                            <button data-modal-hide="popup-pause-story" type="button"
                                                id="pauseStoryAudio"
                                                class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                Yes, I'm sure
                                            </button>
                                            <button data-modal-hide="popup-pause-story" type="button"
                                                id="continueStoryAudio"
                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h3>
                    @foreach ($story->question as $question)
                        <div class="p-3 mb-3 border-2 rounded-lg">
                            <div class="flex gap-5">
                                <div
                                    class="flex items-center justify-center w-10 h-10 text-base font-medium border-2 border-gray-400 rounded-full">
                                    <div>{{ $loop->iteration }}.</div>
                                </div>
                                <div>
                                    <button type="button" id="playQuestionAudio"
                                        class="w-10 h-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 -2 13 21">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M1 1.984v14.032a1 1 0 0 0 1.506.845l12.006-7.016a.974.974 0 0 0 0-1.69L2.506 1.139A1 1 0 0 0 1 1.984Z" />
                                        </svg>
                                    </button>
                                    <button type="button" id="pauseQuestionButton"
                                        data-modal-target="popup-pause-question"
                                        data-modal-toggle="popup-pause-question"
                                        class="hidden w-10 h-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 -2 11 20">
                                            <path fill-rule="evenodd"
                                                d="M0 .8C0 .358.32 0 .714 0h1.429c.394 0 .714.358.714.8v14.4c0 .442-.32.8-.714.8H.714a.678.678 0 0 1-.505-.234A.851.851 0 0 1 0 15.2V.8Zm7.143 0c0-.442.32-.8.714-.8h1.429c.19 0 .37.084.505.234.134.15.209.354.209.566v14.4c0 .442-.32.8-.714.8H7.857c-.394 0-.714-.358-.714-.8V.8Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <audio id="audioQuestionSource"
                                        src="{{ asset('storage/' . $question->question) }}"></audio>

                                    {{-- Pause Question Modal --}}
                                    <div id="popup-pause-question" tabindex="-1"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-md max-h-full p-4">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button"
                                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="popup-pause-question">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-4 text-center md:p-5">
                                                    <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                    <h3
                                                        class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                        Are
                                                        you sure you want to pause the audio? The audio will only play
                                                        once.
                                                    </h3>
                                                    <button data-modal-hide="popup-pause-question" type="button"
                                                        id="pauseQuestionAudio"
                                                        class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                        Yes, I'm sure
                                                    </button>
                                                    <button data-modal-hide="popup-pause-question" type="button"
                                                        id="continueQuestionAudio"
                                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                        cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center mb-4">
                                        <input id="default-radio-1" type="radio" value="{{ $question->answer_a }}"
                                            name="default-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-1"
                                            class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">{{ $question->answer_a }}</label>
                                    </div>
                                    <div class="flex items-center mb-4">
                                        <input id="default-radio-1" type="radio" value="{{ $question->answer_b }}"
                                            name="default-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-1"
                                            class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">{{ $question->answer_b }}</label>
                                    </div>
                                    <div class="flex items-center mb-4">
                                        <input id="default-radio-1" type="radio" value="{{ $question->answer_c }}"
                                            name="default-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-1"
                                            class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">{{ $question->answer_c }}</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="default-radio-1" type="radio" value="{{ $question->answer_d }}"
                                            name="default-radio"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-1"
                                            class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">{{ $question->answer_d }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @endforeach
    </div>

    {{-- Footer Navigation --}}
    <div class="flex items-center justify-between pt-3 mt-5 border-t-2 dark:border-gray-600">
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Prev</button>
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
    </div>
</div>
