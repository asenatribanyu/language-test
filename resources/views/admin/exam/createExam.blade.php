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
                    <a href="/admin/dashboard/create/exam/direction" type="button"
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
                    <button type="button"
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
                    </button>
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
            <div class="mt-5 p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="border-b-2 border-gray-200">
                    <h1 class="pb-1 text-xl font-semibold dark:text-white">First Section - Listening Comperhension</h1>
                </div>
                <div class="mt-3">
                    <h2 class="text-xl font-medium dark:text-white">Listening Part A Directions:</h2>
                    <div class="mt-2 p-2 border-2 rounded-lg">
                        No direction of this part has been created.
                    </div>
                </div>
                <div class="mt-3">
                    <div class="flex items-center">
                        <h2 class="text-xl font-medium dark:text-white">Question of Listening Part A:</h2>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                            10
                        </span>
                    </div>
                    <div class="mt-2 p-2 border-2 rounded-lg">
                        No question of this part has been created.
                    </div>
                </div>
                <div class="mt-5">
                    <h2 class="text-xl font-medium dark:text-white">Listening Part B
                        Directions:</h2>
                    <div class="mt-2 p-2 border-2 rounded-lg">
                        No direction of this part has been created.
                    </div>
                </div>
                <div class="mt-3">
                    <div class="flex items-center">
                        <h2 class="text-xl font-medium dark:text-white">Question of Listening Part B:</h2>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                            10
                        </span>
                    </div>
                    <div class="mt-2 p-2 border-2 rounded-lg">
                        No question of this part has been created.
                    </div>
                </div>
                <div class="mt-5">
                    <h2 class="text-xl font-medium dark:text-white">Listening Part C
                        Directions:
                    </h2>
                    <div class="mt-2 p-2 border-2 rounded-lg">
                        No direction of this part has been created.
                    </div>
                </div>
                <div class="mt-3">
                    <div class="flex items-center">
                        <h2 class="text-xl font-medium dark:text-white">Question of Listening Part C:</h2>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                            10
                        </span>
                    </div>
                    <div class="mt-2 p-2 border-2 rounded-lg">
                        No question of this part has been created.
                    </div>
                </div>
            </div>
            <div class="mt-5 p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="border-b-2 border-gray-200">
                    <h1 class="pb-1 text-xl font-semibold dark:text-white">Second Section - Structure and Written
                        Expression</h1>
                </div>
                <div class="mt-3">
                    <h2 class="text-xl font-medium dark:text-white">Structure Expression Direction:</h2>
                    <div class="mt-2 p-2 border-2 rounded-lg">
                        No direction of this structure expression has been created.
                    </div>
                </div>
                <div class="mt-3">
                    <div class="flex items-center">
                        <h2 class="text-xl font-medium dark:text-white">Question of Structure Expression:</h2>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                            10
                        </span>
                    </div>
                    <div class="mt-2 p-2 border-2 rounded-lg">
                        No question of structure expression has been created.
                    </div>
                </div>
                <div class="mt-5">
                    <h2 class="text-xl font-medium dark:text-white">Direction of Written Expression:</h2>
                    <div class="mt-2 p-2 border-2 rounded-lg">
                        No direction of this structure expression has been created.
                    </div>
                </div>
                <div class="mt-3">
                    <div class="flex items-center">
                        <h2 class="text-xl font-medium dark:text-white">Question of Written Expression:</h2>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                            10
                        </span>
                    </div>
                    <div class="mt-2 p-2 border-2 rounded-lg">
                        No question of structure expression has been created.
                    </div>
                </div>
            </div>
            <div class="mt-5 p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="border-b-2 border-gray-200">
                    <h1 class="pb-1 text-xl font-semibold dark:text-white">Third Section - Reading Comprehension</h1>
                </div>
                <div class="mt-3">
                    <h2 class="text-xl font-medium dark:text-white">Direction of Reading Comprehension:</h2>
                    <div class="mt-2 p-2 border-2 rounded-lg">
                        No direction of this reading comprehension has been created
                    </div>
                </div>
                <div class="mt-3">
                    <div class="flex items-center">
                        <h2 class="text-xl font-medium dark:text-white">Reading Comprehension Questions:</h2>
                        <span
                            class="inline-flex items-center justify-center w-6 h-6 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                            10
                        </span>
                    </div>
                    <div class="mt-2 p-2 border-2 rounded-lg">
                        No question of this reading comprehension has been created.
                    </div>
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
