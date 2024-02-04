{{-- SECTION TWO - Reading Comperhension --}}
<div
    class="p-5 mt-5 bg-white border border-gray-200 rounded-lg shadow max-md:w-full max-md:h-full dark:bg-gray-800 dark:border-gray-700">
    <div class="border-b-2 border-gray-200">
        <h1 class="pb-2 text-2xl font-semibold dark:text-white">SECTION TWO - Reading Comperhension</h1>
    </div>

    {{-- Direction of Reading Comperhension --}}
    <div class="mt-5">
        <h2 class="pb-2 text-xl font-medium dark:text-white">Direction of Reading Comperhension:</h2>
        <div class="p-3 border-2 rounded-lg">
            <audio controls>
                @foreach ($enrolls->exam->eptDirection as $direction)
                    @if ($direction->section == 'reading')
                        <source src="{{ asset('storage/' . $direction->audio) }}">
                        Your browser does not support the audio element.
                    @endif
                @endforeach
            </audio>
            @foreach ($enrolls->exam->eptDirection as $direction)
                @if ($direction->section == 'reading')
                    <p class="mt-2">{{ $direction->direction }}</p>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Question List of Reading Comperhension --}}
    <div class="mt-5">
        <h2 class="pb-2 text-xl font-medium dark:text-white">Question List of Reading Comperhension:</h2>
        @foreach ($enrolls->exam->eptStory as $story)
            @if ($story->section == 'reading')
                <div class="p-3 mb-5 border-2 rounded-lg">
                    <h3 class="mb-2 text-lg font-medium">Story 1 - 10</h3>
                    <p>{{ $story->story }}</p>
                </div>
                @foreach ($story->question as $question)
                    <div class="p-3 mb-3 border-2 rounded-lg">
                        <div class="flex gap-5">
                            <div
                                class="flex items-center justify-center w-10 h-10 text-base font-medium border-2 border-gray-400 rounded-full">
                                <div>{{ $loop->iteration }}.</div>
                            </div>
                            <div>
                                <p class="mt-2">{{ $question->question }}</p>
                                <div class="mt-5">
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
                    </div>
                @endforeach
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
