@extends('layouts.adminDashboard')
@section('content')
    <form action="/admin/dashboard/exam/ept/question/{{ $questions->id }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="flex justify-center items-center">
            <div
                class="mt-5 p-5 w-full max-w-screen-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="border-b-2 border-gray-200">
                    <h1 class="pb-1 text-2xl font-semibold dark:text-white">EPT Update Question for Listening Part A
                    </h1>
                </div>

                {{-- Update Question --}}
                <div class="mt-5">
                    @if ($questions->section == 'part a' || $questions->section == 'part b' || $questions->section == 'part c')
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Audio
                            Question</label>
                        <input id="file_input" type="file" name="question" accept="audio/*"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    @elseif ($questions->section == 'structure')
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="text-input">Structure Question</label>
                        <input id="text-input" type="text" name="question"
                            placeholder="Enter the question of Structure Expression here" value="{{ $questions->question }}"
                            required
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    @elseif ($questions->section == 'written')
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="text-input">Written
                            Question</label>
                        <input id="text-input" type="text" name="question"
                            placeholder="Enter the question of Written Expression here" value="{{ $questions->question }}"
                            required
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    @elseif ($questions->section == 'reading')
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="text-input">Reading
                            Question</label>
                        <input id="text-input" type="text" name="question"
                            placeholder="Enter the question of Reading story here" value="{{ $questions->question }}"
                            required
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    @endif
                </div>

                {{-- Stored Audio --}}
                <div>
                    @if ($questions->section == 'part a' || $questions->section == 'part b' || $questions->section == 'part c')
                        <div class="flex gap-1 mt-2 text-sm text-gray-900 dark:text-white">Stored Audio:
                            <div class="text-sm text-blue-800">{{ $questions->question }}</div>
                        </div>
                    @endif
                </div>

                {{-- Question Condition --}}
                @if ($questions->section === 'part a')
                    <input type="hidden" value="1" name="questionCase">
                @elseif ($questions->section === 'part b')
                    <input type="hidden" value="2" name="questionCase">
                @elseif ($questions->section === 'part c')
                    <input type="hidden" value="3" name="questionCase">
                @elseif ($questions->section === 'structure')
                    <input type="hidden" value="4" name="questionCase">
                @elseif ($questions->section === 'written')
                    <input type="hidden" value="5" name="questionCase">
                @elseif ($questions->section === 'reading')
                    <input type="hidden" value="6" name="questionCase">
                @endif

                {{-- Answer Choice --}}
                <div>
                    <div class="mt-5">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Answer
                            A</label>
                        <div class="flex gap-3 items-center">
                            <input id="checkbox-1" type="checkbox" value="a" name="correct_answer"
                                {{ $questions->correct_answer == 'a' ? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <input type="text" id="base-input" name="answer_a" placeholder="Enter answer A here"
                                value="{{ $questions->answer_a }}" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                    <div class="mt-5">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Answer
                            B</label>
                        <div class="flex gap-3 items-center">
                            <input id="checkbox-1" type="checkbox" value="b" name="correct_answer"
                                {{ $questions->correct_answer == 'b' ? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <input type="text" id="base-input" name="answer_b" placeholder="Enter answer B here"
                                value="{{ $questions->answer_b }}" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                    <div class="mt-5">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Answer
                            C</label>
                        <div class="flex gap-3 items-center">
                            <input id="checkbox-1" type="checkbox" value="c" name="correct_answer"
                                {{ $questions->correct_answer == 'c' ? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <input type="text" id="base-input" name="answer_c" placeholder="Enter answer C here"
                                value="{{ $questions->answer_c }}" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                    <div class="mt-5">
                        <label for="base-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Answer D</label>
                        <div class="flex gap-3 items-center">
                            <input id="checkbox-1" type="checkbox" value="d" name="correct_answer"
                                {{ $questions->correct_answer == 'd' ? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <input type="text" id="base-input" name="answer_d" placeholder="Enter answer D here"
                                value="{{ $questions->answer_d }}" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                </div>

                {{-- Select Story --}}
                <div>
                    @if ($questions->section == 'part b')
                        <label for="select-story"
                            class="mt-5 block mb-2 text-sm font-medium text-gray-900 dark:text-whit">Select Story Part
                            B</label>
                        <select id="select-story" name="story_code" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled>Select Story Part B</option>
                            @foreach ($stories as $story)
                                @if ($story->section == 'part b')
                                    <option value="{{ $story->code }}"
                                        {{ $story->code == $questions->story_code ? 'selected' : '' }}>{{ $story->story }}
                                    </option>
                                @endif
                            @endforeach
                            <option>No Story For Part B Has Been Created</option>
                        </select>
                    @elseif ($questions->section == 'part c')
                        <label for="select-story"
                            class="mt-5 block mb-2 text-sm font-medium text-gray-900 dark:text-whit">Select Story Part
                            C</label>
                        <select id="select-story" name="story_code" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled>Select Story Part C</option>
                            @foreach ($stories as $story)
                                @if ($story->section == 'part c')
                                    <option value="{{ $story->code }}"
                                        {{ $story->code == $questions->story_code ? 'selected' : '' }}>{{ $story->story }}
                                    </option>
                                @endif
                            @endforeach
                            <option>No Story For Part C Has Been Created</option>
                        </select>
                    @elseif ($questions->section == 'reading')
                        <label for="select-story"
                            class="mt-5 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Story for
                            Reading</label>
                        <select id="select-story" name="story_code" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled selected>Select Story</option>
                            @foreach ($stories as $story)
                                @if ($story->section == 'reading')
                                    <option value="{{ $story->code }}"
                                        {{ $story->code == $questions->story_code ? 'selected' : '' }}>{{ $story->story }}
                                    </option>
                                @endif
                            @endforeach
                            <option value="">No Story For Reading Has Been Created</option>
                        </select>
                    @endif
                </div>

                {{-- Update Action --}}
                <div class="flex mt-5 items-center rounded-b dark:border-gray-600">
                    <button type="button" data-modal-target="update-modal" data-modal-toggle="update-modal"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    <a href="{{ url('/admin/dashboard/exam/' . session('id')) . '/edit' }}"
                        class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</a>
                </div>

                {{-- Update Modal --}}
                <div id="update-modal" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button"
                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="update-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you
                                    want
                                    to Update this Question?</h3>
                                <button data-modal-hide="update-modal" type="submit"
                                    class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                    Yes, I'm sure
                                </button>
                                <button data-modal-hide="update-modal" type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                    cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('script')
    <script src="{{ asset('js/updateQuestion.js') }}"></script>
@endpush
