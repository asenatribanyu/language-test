@extends('layouts.adminDashboard')
@section('content')
    <div class="flex flex-wrap justify-center items-center gap-x-5">
        @foreach ($exams as $exam)
            <div
                class="mt-5 p-5 w-5/12 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h1 class="pb-1 text-2xl font-semibold border-b-2 border-gray-200 text-gray-900 dark:text-white">STARTING
                    {{ $exam->category == 'ept' ? 'EPT' : 'TOEIC' }}
                </h1>
                <div class="mt-5 flex justify-between">
                    <div class="flex gap-3 items-center">
                        <div class="flex items-center">
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-full me-2 dark:bg-gray-700 dark:text-gray-400 border border-gray-500 ">
                                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                                </svg>
                                {{ $exam->updated_at->diffForHumans() }}
                            </span>
                            @if ($exam->status == 'publish')
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-green-400 border border-green-400">Published</span>
                            @else
                                <span
                                    class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-gray-300 border border-gray-500">Draft</span>
                            @endif
                        </div>
                    </div>
                    <div class="flex gap-2 items-center">
                        <input type="hidden" class="exam-id" value="{{ $exam->id }}">
                        <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Activate</span>
                        <label
                            class="relative inline-flex items-center {{ $exam->status == 'progress' ? 'cursor-not-allowed' : 'cursor-pointer' }}">
                            <input type="checkbox" value="" class="sr-only peer toggle-switch" id="toggleSwitch"
                                {{ $exam->status == 'progress' ? 'disabled' : '' }}
                                {{ $exam->activated == 'yes' ? 'checked' : '' }}>
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                        </label>
                    </div>
                </div>
                <div>
                    <div class="mt-5">
                        <label for="base-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" id="base-input" disabled value="{{ $exam->title }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mt-5">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exam
                            Code</label>
                        <input type="text" id="base-input" disabled value="{{ $exam->code }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mt-5">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number
                            of
                            Question</label>
                        <input type="text" id="base-input" disabled
                            value="{{ $exam->category == 'ept' ? $exam->eptQuestion->count() : $exam->toeicQuestion->count() }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mt-5 pb-5 border-b-2 border-gray-200">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Test
                            Schedules</label>
                        <input type="text" id="base-input" disabled
                            value="{{ 'First Date: ' . \Carbon\Carbon::parse($exam->first_date)->translatedFormat('j F Y') . ' (' . $exam->first_time . ' WIB, ' . $exam->second_time . ' WIB, ' . $exam->third_time . ' WIB)' }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <input type="text" id="base-input" disabled
                            value="{{ 'Second Date: ' . \Carbon\Carbon::parse($exam->second_date)->translatedFormat('j F Y') . ' (' . $exam->first_time . ' WIB, ' . $exam->second_time . ' WIB, ' . $exam->third_time . ' WIB)' }}"
                            class="mt-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <input type="text" id="base-input" disabled
                            value="{{ 'Third Date: ' . \Carbon\Carbon::parse($exam->third_date)->translatedFormat('j F Y') . ' (' . $exam->first_time . ' WIB, ' . $exam->second_time . ' WIB, ' . $exam->third_time . ' WIB)' }}"
                            class="mt-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mt-5 flex justify-between gap-2">
                        <div class="flex gap-2">
                            <a href="{{ $exam->conference_link }}" target="_blank"
                                class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Conference</a>
                            <button type="button" data-modal-target="start-date-modal-{{ $exam->id }}"
                                data-modal-toggle="start-date-modal-{{ $exam->id }}"
                                class="px-5 py-2.5 text-sm font-medium text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Go</button>
                        </div>
                        <div>
                            <button type="button" data-modal-target="delete-exam-{{ $exam->id }}"
                                data-modal-toggle="delete-exam-{{ $exam->id }}"
                                class="text-white bg-white px-3 py-2.5 text-sm hover:bg-red-100 border border-red-200 focus:ring-4 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-center inline-flex items-center dark:focus:ring-red-600 dark:bg-red-800 dark:border-red-700 dark:text-white dark:hover:bg-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 fill-red-700 dark:fill-white text-white" viewBox="0 0 24 24">
                                    <path
                                        d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                    </path>
                                    <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                </svg>
                            </button>
                            {{-- Delete Modal --}}
                            <div id="delete-exam-{{ $exam->id }}" tabindex="-1"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="delete-exam-{{ $exam->id }}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-4 md:p-5 text-center">
                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <h3 class="text-lg font-semibold text-gray-500 dark:text-gray-400">Are you
                                                sure want to delete this EPT/TOEIC?</h3>
                                            <div class="mt-1 mb-5">
                                                <p class=" font-normal leading-relaxed text-gray-500 dark:text-gray-400">
                                                    It will also delete all data inside, such as questions, stories,
                                                    directions, etc.
                                                </p>
                                            </div>
                                            <form action="/admin/dashboard/exam/{{ $exam->id }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button data-modal-hide="delete-exam-{{ $exam->id }}" type="submit"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                    Yes, I'm sure
                                                </button>
                                                <button data-modal-hide="delete-exam-{{ $exam->id }}" type="button"
                                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                    cancel</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/admin/dashboard/exam/{{ $exam->id }}/edit"
                                class="text-white bg-white px-3 py-2.5 text-sm hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-center inline-flex items-center dark:bg-white dark:focus:ring-gray-700 dark:border-gray-700 dark:text-white dark:hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 fill-blue-700 dark:fill-blue-600 text-white" viewBox="0 0 24 24">
                                    <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path>
                                    <path
                                        d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Start Modal Select the Test Date --}}
            <div id="start-date-modal-{{ $exam->id }}" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="start-date-modal-{{ $exam->id }}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <form action="/admin/dashboard/exam/control" method="POST">
                            @csrf
                            <div class="p-4 md:p-5 text-center">
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h3 class="text-lg font-semibold text-gray-500 dark:text-gray-400">Select the
                                    Test Date</h3>
                                <div class="mb-5">
                                    <div class="mt-1">
                                        <p class=" font-normal leading-relaxed text-gray-500 dark:text-gray-400">
                                            Please select one of the test dates and time first.
                                        </p>
                                    </div>
                                    <div class="mt-2">
                                        <select id="test-date" required name="date"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option disabled selected>Select the Date</option>
                                            <option value="0">
                                                {{ \Carbon\Carbon::parse($exam->first_date)->translatedFormat('j F Y') }}
                                            </option>
                                            <option value="1">
                                                {{ \Carbon\Carbon::parse($exam->second_date)->translatedFormat('j F Y') }}
                                            </option>
                                            <option value="2">
                                                {{ \Carbon\Carbon::parse($exam->third_date)->translatedFormat('j F Y') }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mt-2">
                                        <select id="test-time" required name="time"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option disabled selected>Select the Time</option>
                                            <option value="0">{{ $exam->first_time }} WIB</option>
                                            <option value="1">{{ $exam->second_time }} WIB</option>
                                            <option value="2">{{ $exam->third_time }} WIB</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="category" value="{{ $exam->category }}">
                                    <input type="hidden" name="exam_code" value="{{ $exam->code }}">
                                </div>
                                <button data-modal-hide="start-date-modal-{{ $exam->id }}" type="submit"
                                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                    Go
                                </button>
                                <button data-modal-hide="start-date-modal-{{ $exam->id }}" type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- Push Notifications --}}
        <div class="fixed z-10 bottom-0 right-0 w-full max-w-xs">
            {{-- Push Notifications Activate --}}
            <div id="toast-success"
                class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-600 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">EPT activated successfully.</div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    data-dismiss-target="#toast-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>

            {{-- Push Notifications Delete --}}
            <div id="toast-danger"
                class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <span class="sr-only">Error icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">TOEIC has been deleted.</div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    data-dismiss-target="#toast-danger" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleSwitches = document.querySelectorAll('.toggle-switch');

            toggleSwitches.forEach(function(toggleSwitch) {
                toggleSwitch.addEventListener('change', function() {
                    const isChecked = this.checked ? 1 : 0;
                    const examId = this.closest('.flex').querySelector(".exam-id").value;

                    fetch('/post/exam/update-activated/' + examId, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({
                                activated: isChecked
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                        })
                        .catch(error => {
                            console.error(error);
                        });
                });
            });
        });
    </script>
@endpush
