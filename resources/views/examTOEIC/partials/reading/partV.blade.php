{{-- Part V - TOEIC Listening --}}
<div
    class="p-5 mt-5 bg-white border border-gray-200 rounded-lg shadow max-md:w-full max-md:h-full dark:bg-gray-800 dark:border-gray-700">
    <div class="border-b-2 border-gray-200">
        <h1 class="pb-2 text-2xl font-semibold dark:text-white">PART V - Listening</h1>
    </div>
    {{-- Direction of Part V - Listening --}}
    <div class="mt-5">
        <h2 class="pb-2 text-xl font-medium dark:text-white">Direction of Listening Part V:</h2>
        <div class="p-3 border-2 rounded-lg">
            <audio controls>
                @foreach ($enrolls->exam->toeicDirection as $direction)
                    @if ($direction->section == 'v')
                        <source src="{{ asset('storage/' . $direction->audio) }}">
                        Your browser does not support the audio element.
                    @endif
                @endforeach
            </audio>
            @foreach ($enrolls->exam->toeicDirection as $direction)
                @if ($direction->section == 'v')
                    <p class="mt-2">{{ $direction->direction }}</p>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Question of Part V - Listening --}}
    <div class="mt-6">
        <h2 class="text-xl font-medium text-gray-900 dark:text-white">Question of Listening Part V:</h2>
        @foreach ($enrolls->exam->toeicQuestion as $question)
            @if ($question->section == 'v')
                <div class="relative p-2 mt-2 border-2 rounded-lg">
                    <div class="flex gap-5">
                        <div
                            class="flex items-center justify-center w-10 h-10 text-base font-medium text-gray-900 border-2 border-gray-400 rounded-full dark:text-white">
                            <div>{{ $loop->iteration }}.</div>
                        </div>
                        <div>
                            <div class="mt-1.5">
                                <p class="text-base text-gray-900 dark:text-white">
                                    {{ $question->question }}
                                </p>
                            </div>
                            {{-- Answer --}}
                            <div class="mt-3 ms-1">
                                <div class="flex items-center mb-4">
                                    <input id="radio-a" type="radio" value="{{ $question->answer_a }}"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="radio-a"
                                        class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">{{ $question->answer_a }}</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="radio-b" type="radio" value="{{ $question->answer_b }}"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="radio-b"
                                        class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">{{ $question->answer_b }}</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="radio-c" type="radio" value="{{ $question->answer_c }}"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="radio-c"
                                        class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">{{ $question->answer_c }}</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="radio-d" type="radio" value="{{ $question->answer_d }}"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="radio-d"
                                        class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">{{ $question->answer_d }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
