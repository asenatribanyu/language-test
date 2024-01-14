@extends('layouts.adminDashboard')
@section('content')
    <div class="flex gap-3">
        <div class="w-1/3">
            <div class="mt-5 p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center border-b-2 border-gray-200">
                    <h1 class="pb-1 text-xl font-medium dark:text-white">{{ $exam->title }}</h1>
                    <button type="button" data-modal-target="subname-modal" data-modal-toggle="subname-modal"
                        class="px-3 py-1 -mt-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Change</button>
                </div>
                <div class="mt-3">
                    <a href="/admin/dashboard/exam/direction/create" type="button"
                        class="text-blue-700 w-full hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                        <div class="flex justify-center items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="m21.781 13.875-2-2.5A1 1 0 0 0 19 11h-6V9h6c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2H5a1 1 0 0 0-.781.375l-2 2.5a1.001 1.001 0 0 0 0 1.25l2 2.5A1 1 0 0 0 5 9h6v2H5c-1.103 0-2 .897-2 2v3c0 1.103.897 2 2 2h6v4h2v-4h6a1 1 0 0 0 .781-.375l2-2.5a1.001 1.001 0 0 0 0-1.25zM4.281 5.5 5.48 4H19l.002 3H5.48L4.281 5.5zM18.52 16H5v-3h13.52l1.2 1.5-1.2 1.5z">
                                </path>
                            </svg>
                            <div>Upload Direction</div>
                        </div>
                    </a>
                    <button type="button" data-modal-target="story-modal" data-modal-toggle="story-modal"
                        class="text-blue-700 mt-1 w-full hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                        <div class="flex justify-center items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M6 22h15v-2H6.012C5.55 19.988 5 19.805 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3zM5 8V5c0-.805.55-.988 1-1h13v12H5V8z">
                                </path>
                                <path d="M8 6h9v2H8z"></path>
                            </svg>
                            <div>Upload Story</div>
                        </div>
                    </button>
                    <button type="button" data-modal-target="question-modal" data-modal-toggle="question-modal"
                        class="text-blue-700 mt-1 w-full hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                        <div class="flex justify-center items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4 6h2v2H4zm0 5h2v2H4zm0 5h2v2H4zm16-8V6H8.023v2H18.8zM8 11h12v2H8zm0 5h12v2H8z">
                                </path>
                            </svg>
                            <div>Upload Question</div>
                        </div>
                    </button>
                    <button type="button" data-modal-target="date-modal" data-modal-toggle="date-modal"
                        class="text-blue-700 mt-1 w-full hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                        <div class="flex justify-center items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z">
                                </path>
                                <path
                                    d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z">
                                </path>
                            </svg>
                            <div>Date Settings</div>
                        </div>
                    </button>
                    {{-- <button type="button"
                        class="text-blue-700 mt-1 w-full hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                        <div class="flex justify-center items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.995 6.9a.998.998 0 0 0-.548-.795l-8-4a1 1 0 0 0-.895 0l-8 4a1.002 1.002 0 0 0-.547.795c-.011.107-.961 10.767 8.589 15.014a.987.987 0 0 0 .812 0c9.55-4.247 8.6-14.906 8.589-15.014zM12 19.897C5.231 16.625 4.911 9.642 4.966 7.635L12 4.118l7.029 3.515c.037 1.989-.328 9.018-7.029 12.264z">
                                </path>
                                <path d="m11 12.586-2.293-2.293-1.414 1.414L11 15.414l5.707-5.707-1.414-1.414z"></path>
                            </svg>
                            <div>Test Check</div>
                        </div>
                    </button> --}}
                    <button type="button"
                        class="px-5 py-2.5 mt-1 w-full text-sm font-medium text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Publish</button>
                </div>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-x-5 gap-y-3 mt-5">
                <a href="#"
                    class="w-24 bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400 inline-flex items-center justify-center">Part
                    A</a>
                <a href="#"
                    class="w-24 bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400 inline-flex items-center justify-center">Part
                    B</a>
                <a href="#"
                    class="w-24 bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400 inline-flex items-center justify-center">Part
                    C</a>
                <a href="#"
                    class="w-24 bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400 inline-flex items-center justify-center">Structure</a>
                <a href="#"
                    class="w-24 bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400 inline-flex items-center justify-center">Written</a>
                <a href="#"
                    class="w-24 bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400 inline-flex items-center justify-center">Reading</a>
            </div>
        </div>
        <div class="w-2/3">
            {{-- First Section --}}
            <div class="mt-5 p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="border-b-2 border-gray-200">
                    <h1 class="pb-1 text-xl font-semibold dark:text-white">First Section - Listening Comperhension</h1>
                </div>
                {{-- Part A --}}
                <div class="mt-3">
                    <h2 class="text-xl font-medium dark:text-white">Listening Part A Directions:</h2>
                    @if ($directions_a)
                        @if ($directions_a->audio)
                            <audio class="mt-2 mb-2" controls>
                                <source src="{{ asset('storage/' . $directions_a->audio) }}">
                                Your browser does not support the audio element.
                            </audio>
                        @endif
                        <p class="text-base text-gray-900 dark:text-white">{{ $directions_a->direction }}</p>
                    @else
                        <div class="mt-2 p-2 border-2 rounded-lg">
                            No direction of this part has been created.
                        </div>
                    @endif

                </div>
                <div class="mt-3">
                    <div class="flex items-center">
                        <h2 class="text-xl font-medium dark:text-white">Question of Listening Part A:</h2>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                            {{ $questions_a->count() }}
                        </span>
                    </div>
                    @if ($questions_a)
                        @foreach ($questions_a as $question)
                            <div class="mt-2 p-2 border-2 rounded-lg relative">
                                <div class="flex gap-5">
                                    <div
                                        class="w-10 h-10 flex items-center justify-center border-2 border-gray-400 rounded-full font-medium text-base">
                                        <div>{{ $loop->iteration }}.</div>
                                    </div>
                                    <div>
                                        <div class="mt-1.5">
                                            @if (str_contains($question->question, 'question/'))
                                                <audio class="-mt-1.5" controls>
                                                    <source src="{{ asset('storage/' . $question->question) }}">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            @else
                                                <p class="text-base text-gray-900 dark:text-white">
                                                    {{ $question->question }}
                                                </p>
                                            @endif
                                        </div>
                                        <div class="mt-3 ms-1">
                                            <div class="flex items-center mb-4">
                                                <input id="radio-a" type="radio" disabled
                                                    {{ $question->correct_answer == 'a' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-a"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_a }}</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input id="radio-b" type="radio" disabled
                                                    {{ $question->correct_answer == 'b' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-b"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_b }}</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input id="radio-c" type="radio" disabled
                                                    {{ $question->correct_answer == 'c' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-c"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_c }}</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="radio-d" type="radio" disabled
                                                    {{ $question->correct_answer == 'd' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-d"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_d }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute top-3 right-3">
                                        <button type="button" data-modal-target="delete-exam-{{ $question->id }}"
                                            data-modal-toggle="delete-exam-{{ $question->id }}"
                                            data-bs-target="#delete-exam-{{ $question->id }}"
                                            class="text-white bg-white px-2 py-2 text-sm hover:bg-red-100 border border-red-200 focus:ring-4 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-center inline-flex items-center dark:focus:ring-red-600 dark:bg-red-800 dark:border-red-700 dark:text-white dark:hover:bg-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 fill-red-700 text-white" viewBox="0 0 24 24">
                                                <path
                                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                </path>
                                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                            </svg>
                                        </button>
                                        <a href=""
                                            class="text-white bg-white px-2 py-2 text-xs hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 fill-blue-700 text-white" viewBox="0 0 24 24">
                                                <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z">
                                                </path>
                                                <path
                                                    d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z">
                                                </path>
                                            </svg>
                                        </a>
                                        {{-- Delete Modal --}}
                                        <div id="delete-exam-{{ $question->id }}" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="delete-exam-{{ $question->id }}">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-4 md:p-5 text-center">
                                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                        <h3 class="text-lg font-semibold text-gray-500 dark:text-gray-400">
                                                            Are you
                                                            sure want to delete this Question?</h3>
                                                        <div class="mt-1 mb-5">
                                                            <p
                                                                class=" font-normal leading-relaxed text-gray-500 dark:text-gray-400">
                                                                This action is irreversible and will lead to the removal of
                                                                Question forever from the system.
                                                            </p>
                                                        </div>
                                                        <form class=" flex justify-center"
                                                            action="/admin/dashboard/exam/question/{{ $question->id }}"
                                                            method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button data-modal-hide="delete-exam-{{ $question->id }}"
                                                                type="submit"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                                Yes, I'm sure
                                                            </button>
                                                            <button data-modal-hide="delete-exam-{{ $question->id }}"
                                                                type="button"
                                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                                cancel</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="mt-2 p-2 border-2 rounded-lg">
                            No question of this part has been created.
                        </div>
                    @endif
                </div>

                {{-- Part B --}}
                <div class="mt-5">
                    <h2 class="text-xl font-medium dark:text-white">Listening Part B Directions:</h2>
                    @if ($directions_b)
                        <audio class="mt-2 mb-2" controls>
                            <source src="{{ asset('storage/' . $directions_b->audio) }}">
                            Your browser does not support the audio element.
                        </audio>
                    @else
                        <div class="mt-2 p-2 border-2 rounded-lg">
                            No direction of this part has been created.
                        </div>
                    @endif
                    <p class="text-base text-gray-900 dark:text-white">{{ $directions_b->direction }}</p>
                </div>
                <div class="mt-3">
                    <div class="flex items-center">
                        <h2 class="text-xl font-medium dark:text-white">Question of Listening Part B:</h2>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                            {{ $questions_b->count() }}
                        </span>
                    </div>
                    @if ($questions_b)
                        @foreach ($questions_b as $question)
                            <div class="mt-2 p-2 border-2 rounded-lg relative">
                                <div class="flex gap-5">
                                    <div
                                        class="w-10 h-10 flex items-center justify-center border-2 border-gray-400 rounded-full font-medium text-base">
                                        <div>{{ $loop->iteration }}.</div>
                                    </div>
                                    <div>
                                        <div class="mt-1.5">
                                            @if (str_contains($question->question, 'question/'))
                                                <audio class="-mt-1.5" controls>
                                                    <source src="{{ asset('storage/' . $question->question) }}">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            @else
                                                <p class="text-base text-gray-900 dark:text-white">
                                                    {{ $question->question }}
                                                </p>
                                            @endif
                                        </div>
                                        <div class="mt-3 ms-1">
                                            <div class="flex items-center mb-4">
                                                <input id="radio-a" type="radio" disabled
                                                    {{ $question->correct_answer == 'a' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-a"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_a }}</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input id="radio-b" type="radio" disabled
                                                    {{ $question->correct_answer == 'b' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-b"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_b }}</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input id="radio-c" type="radio" disabled
                                                    {{ $question->correct_answer == 'c' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-c"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_c }}</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="radio-d" type="radio" disabled
                                                    {{ $question->correct_answer == 'd' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-d"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_d }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute top-3 right-3">
                                        <button type="button" data-modal-target="delete-exam-{{ $question->id }}"
                                            data-modal-toggle="delete-exam-{{ $question->id }}"
                                            data-bs-target="#delete-exam-{{ $question->id }}"
                                            class="text-white bg-white px-2 py-2 text-sm hover:bg-red-100 border border-red-200 focus:ring-4 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-center inline-flex items-center dark:focus:ring-red-600 dark:bg-red-800 dark:border-red-700 dark:text-white dark:hover:bg-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 fill-red-700 text-white" viewBox="0 0 24 24">
                                                <path
                                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                </path>
                                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                            </svg>
                                        </button>
                                        <a href=""
                                            class="text-white bg-white px-2 py-2 text-xs hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 fill-blue-700 text-white" viewBox="0 0 24 24">
                                                <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z">
                                                </path>
                                                <path
                                                    d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z">
                                                </path>
                                            </svg>
                                        </a>
                                        {{-- Delete Modal --}}
                                        <div id="delete-exam-{{ $question->id }}" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="delete-exam-{{ $question->id }}">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-4 md:p-5 text-center">
                                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                        <h3 class="text-lg font-semibold text-gray-500 dark:text-gray-400">
                                                            Are you
                                                            sure want to delete this Question?</h3>
                                                        <div class="mt-1 mb-5">
                                                            <p
                                                                class=" font-normal leading-relaxed text-gray-500 dark:text-gray-400">
                                                                This action is irreversible and will lead to the removal of
                                                                Question forever from the system.
                                                            </p>
                                                        </div>
                                                        <form class=" flex justify-center"
                                                            action="/admin/dashboard/exam/question/{{ $question->id }}"
                                                            method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button data-modal-hide="delete-exam-{{ $question->id }}"
                                                                type="submit"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                                Yes, I'm sure
                                                            </button>
                                                            <button data-modal-hide="delete-exam-{{ $question->id }}"
                                                                type="button"
                                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                                cancel</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="mt-2 p-2 border-2 rounded-lg">
                            No question of this part has been created.
                        </div>
                    @endif
                </div>

                {{-- Part C --}}
                <div class="mt-5">
                    <h2 class="text-xl font-medium dark:text-white">Listening Part C Directions:</h2>
                    @if ($directions_c)
                        <audio class="mt-2 mb-2" controls>
                            <source src="{{ asset('storage/' . $directions_c->audio) }}">
                            Your browser does not support the audio element.
                        </audio>
                    @else
                        <div class="mt-2 p-2 border-2 rounded-lg">
                            No direction of this part has been created.
                        </div>
                    @endif
                    <p class="text-base text-gray-900 dark:text-white">{{ $directions_c->direction }}</p>
                </div>
                <div class="mt-3">
                    <div class="flex items-center">
                        <h2 class="text-xl font-medium dark:text-white">Question of Listening Part C:</h2>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                            {{ $questions_c->count() }}
                        </span>
                    </div>
                    @if ($questions_c)
                        @foreach ($questions_c as $question)
                            <div class="mt-2 p-2 border-2 rounded-lg relative">
                                <div class="flex gap-5">
                                    <div
                                        class="w-10 h-10 flex items-center justify-center border-2 border-gray-400 rounded-full font-medium text-base">
                                        <div>{{ $loop->iteration }}.</div>
                                    </div>
                                    <div>
                                        <div class="mt-1.5">
                                            @if (str_contains($question->question, 'question/'))
                                                <audio class="-mt-1.5" controls>
                                                    <source src="{{ asset('storage/' . $question->question) }}">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            @else
                                                <p class="text-base text-gray-900 dark:text-white">
                                                    {{ $question->question }}
                                                </p>
                                            @endif
                                        </div>
                                        <div class="mt-3 ms-1">
                                            <div class="flex items-center mb-4">
                                                <input id="radio-a" type="radio" disabled
                                                    {{ $question->correct_answer == 'a' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-a"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_a }}</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input id="radio-b" type="radio" disabled
                                                    {{ $question->correct_answer == 'b' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-b"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_b }}</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input id="radio-c" type="radio" disabled
                                                    {{ $question->correct_answer == 'c' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-c"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_c }}</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="radio-d" type="radio" disabled
                                                    {{ $question->correct_answer == 'd' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-d"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_d }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute top-3 right-3">
                                        <button type="button" data-modal-target="delete-exam-{{ $question->id }}"
                                            data-modal-toggle="delete-exam-{{ $question->id }}"
                                            data-bs-target="#delete-exam-{{ $question->id }}"
                                            class="text-white bg-white px-2 py-2 text-sm hover:bg-red-100 border border-red-200 focus:ring-4 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-center inline-flex items-center dark:focus:ring-red-600 dark:bg-red-800 dark:border-red-700 dark:text-white dark:hover:bg-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 fill-red-700 text-white" viewBox="0 0 24 24">
                                                <path
                                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                </path>
                                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                            </svg>
                                        </button>
                                        <a href=""
                                            class="text-white bg-white px-2 py-2 text-xs hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 fill-blue-700 text-white" viewBox="0 0 24 24">
                                                <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z">
                                                </path>
                                                <path
                                                    d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z">
                                                </path>
                                            </svg>
                                        </a>
                                        {{-- Delete Modal --}}
                                        <div id="delete-exam-{{ $question->id }}" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="delete-exam-{{ $question->id }}">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-4 md:p-5 text-center">
                                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                        <h3 class="text-lg font-semibold text-gray-500 dark:text-gray-400">
                                                            Are you
                                                            sure want to delete this Question?</h3>
                                                        <div class="mt-1 mb-5">
                                                            <p
                                                                class=" font-normal leading-relaxed text-gray-500 dark:text-gray-400">
                                                                This action is irreversible and will lead to the removal of
                                                                Question forever from the system.
                                                            </p>
                                                        </div>
                                                        <form class=" flex justify-center"
                                                            action="admin/dashboard/exam/question/{{ $question->id }}"
                                                            method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button data-modal-hide="delete-exam-{{ $question->id }}"
                                                                type="submit"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                                Yes, I'm sure
                                                            </button>
                                                            <button data-modal-hide="delete-exam-{{ $question->id }}"
                                                                type="button"
                                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                                cancel</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="mt-2 p-2 border-2 rounded-lg">
                            No question of this part has been created.
                        </div>
                    @endif
                </div>
            </div>

            {{-- Second Section --}}
            <div class="mt-5 p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="border-b-2 border-gray-200">
                    <h1 class="pb-1 text-xl font-semibold dark:text-white">Second Section - Structure and Written
                        Expression</h1>
                </div>

                {{-- Structure --}}
                <div class="mt-3">
                    <h2 class="text-xl font-medium dark:text-white">Structure Expression Direction:</h2>
                    @if ($directions_structure)
                        @if ($directions_a->audio)
                            <audio class="mt-2 mb-2" controls>
                                <source src="{{ asset('storage/' . $directions_a->audio) }}">
                                Your browser does not support the audio element.
                            </audio>
                        @endif
                        <p class="text-base text-gray-900 dark:text-white">{{ $directions_structure->direction }}</p>
                    @else
                        <div class="mt-2 p-2 border-2 rounded-lg">
                            No direction of this structure expression has been created.
                        </div>
                    @endif

                </div>
                <div class="mt-3">
                    <div class="flex items-center">
                        <h2 class="text-xl font-medium dark:text-white">Question of Structure Expression:</h2>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                            {{ $questions_structure->count() }}
                        </span>
                    </div>
                    @if ($questions_structure)
                        @foreach ($questions_structure as $question)
                            <div class="mt-2 p-2 border-2 rounded-lg relative">
                                <div class="flex gap-5">
                                    <div
                                        class="w-10 h-10 flex items-center justify-center border-2 border-gray-400 rounded-full font-medium text-base">
                                        <div>{{ $loop->iteration }}.</div>
                                    </div>
                                    <div>
                                        <div class="mt-1.5">
                                            @if (str_contains($question->question, 'question/'))
                                                <audio class="-mt-1.5" controls>
                                                    <source src="{{ asset('storage/' . $question->question) }}">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            @else
                                                <p class="text-base text-gray-900 dark:text-white">
                                                    {{ $question->question }}
                                                </p>
                                            @endif
                                        </div>
                                        <div class="mt-3 ms-1">
                                            <div class="flex items-center mb-4">
                                                <input id="radio-a" type="radio" disabled
                                                    {{ $question->correct_answer == 'a' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-a"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_a }}</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input id="radio-b" type="radio" disabled
                                                    {{ $question->correct_answer == 'b' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-b"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_b }}</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input id="radio-c" type="radio" disabled
                                                    {{ $question->correct_answer == 'c' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-c"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_c }}</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="radio-d" type="radio" disabled
                                                    {{ $question->correct_answer == 'd' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-d"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_d }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute top-3 right-3">
                                        <button type="button" data-modal-target="delete-exam-{{ $question->id }}"
                                            data-modal-toggle="delete-exam-{{ $question->id }}"
                                            data-bs-target="#delete-exam-{{ $question->id }}"
                                            class="text-white bg-white px-2 py-2 text-sm hover:bg-red-100 border border-red-200 focus:ring-4 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-center inline-flex items-center dark:focus:ring-red-600 dark:bg-red-800 dark:border-red-700 dark:text-white dark:hover:bg-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 fill-red-700 text-white" viewBox="0 0 24 24">
                                                <path
                                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                </path>
                                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                            </svg>
                                        </button>
                                        <a href=""
                                            class="text-white bg-white px-2 py-2 text-xs hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 fill-blue-700 text-white" viewBox="0 0 24 24">
                                                <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z">
                                                </path>
                                                <path
                                                    d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z">
                                                </path>
                                            </svg>
                                        </a>
                                        {{-- Delete Modal --}}
                                        <div id="delete-exam-{{ $question->id }}" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="delete-exam-{{ $question->id }}">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-4 md:p-5 text-center">
                                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                        <h3 class="text-lg font-semibold text-gray-500 dark:text-gray-400">
                                                            Are you
                                                            sure want to delete this Question?</h3>
                                                        <div class="mt-1 mb-5">
                                                            <p
                                                                class=" font-normal leading-relaxed text-gray-500 dark:text-gray-400">
                                                                This action is irreversible and will lead to the removal of
                                                                Question forever from the system.
                                                            </p>
                                                        </div>
                                                        <form class=" flex justify-center"
                                                            action="admin/dashboard/exam/question/{{ $question->id }}"
                                                            method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button data-modal-hide="delete-exam-{{ $question->id }}"
                                                                type="submit"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                                Yes, I'm sure
                                                            </button>
                                                            <button data-modal-hide="delete-exam-{{ $question->id }}"
                                                                type="button"
                                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                                cancel</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="mt-2 p-2 border-2 rounded-lg">
                            No question of structure expression has been created.
                        </div>
                    @endif
                </div>

                {{-- Written --}}
                <div class="mt-5">
                    <h2 class="text-xl font-medium dark:text-white">Direction of Written Expression:</h2>
                    @if ($directions_written)
                        @if ($directions_a->audio)
                            <audio class="mt-2 mb-2" controls>
                                <source src="{{ asset('storage/' . $directions_a->audio) }}">
                                Your browser does not support the audio element.
                            </audio>
                        @endif
                        <p class="text-base text-gray-900 dark:text-white">{{ $directions_written->direction }}</p>
                    @else
                        <div class="mt-2 p-2 border-2 rounded-lg">
                            No direction of this structure expression has been created.
                        </div>
                    @endif
                </div>
                <div class="mt-3">
                    <div class="flex items-center">
                        <h2 class="text-xl font-medium dark:text-white">Question of Written Expression:</h2>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                            {{ $questions_written->count() }}
                        </span>
                    </div>
                    @if ($questions_written)
                        @foreach ($questions_written as $question)
                            <div class="mt-2 p-2 border-2 rounded-lg relative">
                                <div class="flex gap-5">
                                    <div
                                        class="w-10 h-10 flex items-center justify-center border-2 border-gray-400 rounded-full font-medium text-base">
                                        <div>{{ $loop->iteration }}.</div>
                                    </div>
                                    <div>
                                        <div class="mt-1.5">
                                            @if (str_contains($question->question, 'question/'))
                                                <audio class="-mt-1.5" controls>
                                                    <source src="{{ asset('storage/' . $question->question) }}">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            @else
                                                <p class="text-base text-gray-900 dark:text-white">
                                                    {{ $question->question }}
                                                </p>
                                            @endif
                                        </div>
                                        <div class="mt-3 ms-1">
                                            <div class="flex items-center mb-4">
                                                <input id="radio-a" type="radio" disabled
                                                    {{ $question->correct_answer == 'a' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-a"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_a }}</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input id="radio-b" type="radio" disabled
                                                    {{ $question->correct_answer == 'b' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-b"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_b }}</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input id="radio-c" type="radio" disabled
                                                    {{ $question->correct_answer == 'c' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-c"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_c }}</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="radio-d" type="radio" disabled
                                                    {{ $question->correct_answer == 'd' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-d"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_d }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute top-3 right-3">
                                        <button type="button" data-modal-target="delete-exam-{{ $question->id }}"
                                            data-modal-toggle="delete-exam-{{ $question->id }}"
                                            data-bs-target="#delete-exam-{{ $question->id }}"
                                            class="text-white bg-white px-2 py-2 text-sm hover:bg-red-100 border border-red-200 focus:ring-4 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-center inline-flex items-center dark:focus:ring-red-600 dark:bg-red-800 dark:border-red-700 dark:text-white dark:hover:bg-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 fill-red-700 text-white" viewBox="0 0 24 24">
                                                <path
                                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                </path>
                                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                            </svg>
                                        </button>
                                        <a href=""
                                            class="text-white bg-white px-2 py-2 text-xs hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 fill-blue-700 text-white" viewBox="0 0 24 24">
                                                <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z">
                                                </path>
                                                <path
                                                    d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z">
                                                </path>
                                            </svg>
                                        </a>
                                        {{-- Delete Modal --}}
                                        <div id="delete-exam-{{ $question->id }}" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="delete-exam-{{ $question->id }}">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-4 md:p-5 text-center">
                                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                        <h3 class="text-lg font-semibold text-gray-500 dark:text-gray-400">
                                                            Are you
                                                            sure want to delete this Question?</h3>
                                                        <div class="mt-1 mb-5">
                                                            <p
                                                                class=" font-normal leading-relaxed text-gray-500 dark:text-gray-400">
                                                                This action is irreversible and will lead to the removal of
                                                                Question forever from the system.
                                                            </p>
                                                        </div>
                                                        <form class=" flex justify-center"
                                                            action="admin/dashboard/exam/question/{{ $question->id }}"
                                                            method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button data-modal-hide="delete-exam-{{ $question->id }}"
                                                                type="submit"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                                Yes, I'm sure
                                                            </button>
                                                            <button data-modal-hide="delete-exam-{{ $question->id }}"
                                                                type="button"
                                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                                cancel</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="mt-2 p-2 border-2 rounded-lg">
                            No question of structure expression has been created.
                        </div>
                    @endif
                </div>
            </div>

            {{-- Third Section --}}
            <div class="mt-5 p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="border-b-2 border-gray-200">
                    <h1 class="pb-1 text-xl font-semibold dark:text-white">Third Section - Reading Comprehension</h1>
                </div>

                {{-- Reading --}}
                <div class="mt-3">
                    <h2 class="text-xl font-medium dark:text-white">Direction of Reading Comprehension:</h2>
                    @if ($directions_reading)
                        @if ($directions_a->audio)
                            <audio class="mt-2 mb-2" controls>
                                <source src="{{ asset('storage/' . $directions_a->audio) }}">
                                Your browser does not support the audio element.
                            </audio>
                        @endif
                        <p class="text-base text-gray-900 dark:text-white">{{ $directions_reading->direction }}</p>
                    @else
                        <div class="mt-2 p-2 border-2 rounded-lg">
                            No direction of this reading comprehension has been created
                        </div>
                    @endif
                </div>
                <div class="mt-3">
                    <div class="flex items-center">
                        <h2 class="text-xl font-medium dark:text-white">Reading Comprehension Questions:</h2>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                            {{ $questions_reading->count() }}
                        </span>
                    </div>
                    @if ($questions_reading)
                        @foreach ($questions_reading as $question)
                            <div class="mt-2 p-2 border-2 rounded-lg relative">
                                <div class="flex gap-5">
                                    <div
                                        class="w-10 h-10 flex items-center justify-center border-2 border-gray-400 rounded-full font-medium text-base">
                                        <div>{{ $loop->iteration }}.</div>
                                    </div>
                                    <div>
                                        <div class="mt-1.5">
                                            @if (str_contains($question->question, 'question/'))
                                                <audio class="-mt-1.5" controls>
                                                    <source src="{{ asset('storage/' . $question->question) }}">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            @else
                                                <p class="text-base text-gray-900 dark:text-white">
                                                    {{ $question->question }}
                                                </p>
                                            @endif
                                        </div>
                                        <div class="mt-3 ms-1">
                                            <div class="flex items-center mb-4">
                                                <input id="radio-a" type="radio" disabled
                                                    {{ $question->correct_answer == 'a' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-a"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_a }}</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input id="radio-b" type="radio" disabled
                                                    {{ $question->correct_answer == 'b' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-b"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_b }}</label>
                                            </div>
                                            <div class="flex items-center mb-4">
                                                <input id="radio-c" type="radio" disabled
                                                    {{ $question->correct_answer == 'c' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-c"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_c }}</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="radio-d" type="radio" disabled
                                                    {{ $question->correct_answer == 'd' ? 'checked' : '' }}
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="radio-d"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $question->answer_d }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute top-3 right-3">
                                        <button type="button" data-modal-target="delete-exam-{{ $question->id }}"
                                            data-modal-toggle="delete-exam-{{ $question->id }}"
                                            data-bs-target="#delete-exam-{{ $question->id }}"
                                            class="text-white bg-white px-2 py-2 text-sm hover:bg-red-100 border border-red-200 focus:ring-4 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-center inline-flex items-center dark:focus:ring-red-600 dark:bg-red-800 dark:border-red-700 dark:text-white dark:hover:bg-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 fill-red-700 text-white" viewBox="0 0 24 24">
                                                <path
                                                    d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                </path>
                                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                            </svg>
                                        </button>
                                        <a href=""
                                            class="text-white bg-white px-2 py-2 text-xs hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 fill-blue-700 text-white" viewBox="0 0 24 24">
                                                <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z">
                                                </path>
                                                <path
                                                    d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z">
                                                </path>
                                            </svg>
                                        </a>
                                        {{-- Delete Modal --}}
                                        <div id="delete-exam-{{ $question->id }}" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-md max-h-full">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="delete-exam-{{ $question->id }}">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-4 md:p-5 text-center">
                                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                        <h3 class="text-lg font-semibold text-gray-500 dark:text-gray-400">
                                                            Are you
                                                            sure want to delete this Question?</h3>
                                                        <div class="mt-1 mb-5">
                                                            <p
                                                                class=" font-normal leading-relaxed text-gray-500 dark:text-gray-400">
                                                                This action is irreversible and will lead to the removal of
                                                                Question forever from the system.
                                                            </p>
                                                        </div>
                                                        <form class=" flex justify-center"
                                                            action="admin/dashboard/exam/question/{{ $question->id }}"
                                                            method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button data-modal-hide="delete-exam-{{ $question->id }}"
                                                                type="submit"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                                Yes, I'm sure
                                                            </button>
                                                            <button data-modal-hide="delete-exam-{{ $question->id }}"
                                                                type="button"
                                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                                cancel</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="mt-2 p-2 border-2 rounded-lg">
                            No question of this reading comprehension has been created.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('admin.exam.partials.questionStored')
    @include('admin.exam.partials.scrollTop')
    @include('admin.exam.partials.subnameModal')
    @include('admin.exam.partials.questionModal')
    @include('admin.exam.partials.storyModal')
    @include('admin.exam.partials.dateModal')
@endsection
@push('script')
    <script src="{{ asset('js/adminGlobal.js') }}"></script>
@endpush
