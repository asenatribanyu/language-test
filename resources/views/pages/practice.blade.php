<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ 'css/global.css' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Practice | Language Institute - Widyatama University</title>
</head>
<body>
    <div class="mt-7 p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="border-b-2 border-gray-200">
            <h1 class="pb-2 text-2xl font-semibold dark:text-white">Practice</h1>
        </div>
        <div class="mt-5">
            <div id="accordion-open" data-accordion="open">
                <h2 id="accordion-open-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-semibold text-left text-gray-900 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-open-body-1" aria-expanded="false"
                        aria-controls="accordion-open-body-1">
                        <span>EPT Practice</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="text-gray-500 dark:text-gray-400">Comming Soon.
                        </p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-semibold text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="true"
                        aria-controls="accordion-collapse-body-2">
                        <span>TOEIC Practice</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                        <div class="mt-2">
                            <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                                <a href="#" class="w-full sm:w-auto bg-gray-200 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-black rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                    <svg class="me-3 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16.5A2.493 2.493 0 0 1 6.51 18H6.5a2.468 2.468 0 0 1-2.4-3.154 2.98 2.98 0 0 1-.85-5.274 2.468 2.468 0 0 1 .921-3.182 2.477 2.477 0 0 1 1.875-3.344 2.5 2.5 0 0 1 3.41-1.856A2.5 2.5 0 0 1 11 3.5m0 13v-13m0 13a2.492 2.492 0 0 0 4.49 1.5h.01a2.467 2.467 0 0 0 2.403-3.154 2.98 2.98 0 0 0 .847-5.274 2.468 2.468 0 0 0-.921-3.182 2.479 2.479 0 0 0-1.875-3.344A2.5 2.5 0 0 0 13.5 1 2.5 2.5 0 0 0 11 3.5m-8 5a2.5 2.5 0 0 1 3.48-2.3m-.28 8.551a3 3 0 0 1-2.953-5.185M19 8.5a2.5 2.5 0 0 0-3.481-2.3m.28 8.551a3 3 0 0 0 2.954-5.185"></path>
                                    </svg>
                                    <div class="text-left rtl:text-right">
                                        <div class="mb-1 text-xs">MINI TEST</div>
                                        <div class="-mt-1 font-sans text-sm font-semibold">48 Questions</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        </div>
                        <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                            <div class="mt-2">
                                <p style="font-semibold:" class=" mr-10 mt-3">Listening</p>
                                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                                    <a href="#" class="w-full sm:w-auto  bg-gray-200 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-black rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                        <svg class="me-3 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 12.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 3h-2l-.447-.894A2 2 0 0 0 12.764 1H7.236a2 2 0 0 0-1.789 1.106L5 3H3a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V5a2 2 0 0 0-2-2Z"></path>
                                        </svg>
                                        <div class="text-left rtl:text-right">
                                            <div class="mb-1 text-xs">PART I</div>
                                            <div class="-mt-1 font-sans text-sm font-semibold">Photograph</div>
                                        </div>
                                    </a>
                                    <a href="#" class="w-full sm:w-auto bg-gray-200 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-black rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                        <svg class="me-3 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M18 2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2ZM2 18V7h6.7l.4-.409A4.309 4.309 0 0 1 15.753 7H18v11H2Z"></path>
                                            <path d="M8.139 10.411 5.289 13.3A1 1 0 0 0 5 14v2a1 1 0 0 0 1 1h2a1 1 0 0 0 .7-.288l2.886-2.851-3.447-3.45ZM14 8a2.463 2.463 0 0 0-3.484 0l-.971.983 3.468 3.468.987-.971A2.463 2.463 0 0 0 14 8Z"></path>
                                        </svg>                                        <div class="text-left rtl:text-right">
                                            <div class="mb-1 text-xs">PART II</div>
                                            <div class="-mt-1 font-sans text-sm font-semibold">Questions Responce</div>
                                        </div>
                                    </a>
                                    <a href="#" class="w-full sm:w-auto bg-gray-200 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-black rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                        <svg class="me-3 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                            <path d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z"></path>
                                        </svg>
                                        <div class="text-left rtl:text-right">
                                            <div class="mb-1 text-xs">PART III</div>
                                            <div class="-mt-1 font-sans text-sm font-semibold">Conservation</div>
                                        </div>
                                    </a>
                                    <a href="#" class="w-full sm:w-auto bg-gray-200 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-black rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                        <svg class="me-3 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                                            <path d="M15 1.943v12.114a1 1 0 0 1-1.581.814L8 11V5l5.419-3.871A1 1 0 0 1 15 1.943ZM7 4H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2v5a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2V4ZM4 17v-5h1v5H4ZM16 5.183v5.634a2.984 2.984 0 0 0 0-5.634Z"></path>
                                        </svg>                                        <div class="text-left rtl:text-right">
                                            <div class="mb-1 text-xs">PART IV</div>
                                            <div class="-mt-1 font-sans text-sm font-semibold">Short Talk</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            </div>
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <div class="mt-2">
                                    <p style="font-semibold:" class=" mr-10 mt-3">Reading</p>
                                    <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                                        <a href="#" class="w-full sm:w-auto bg-gray-200 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-black rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                            <svg class="me-3 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6.072 10.072 2 2 6-4m3.586 4.314.9-.9a2 2 0 0 0 0-2.828l-.9-.9a2 2 0 0 1-.586-1.414V5.072a2 2 0 0 0-2-2H13.8a2 2 0 0 1-1.414-.586l-.9-.9a2 2 0 0 0-2.828 0l-.9.9a2 2 0 0 1-1.414.586H5.072a2 2 0 0 0-2 2v1.272a2 2 0 0 1-.586 1.414l-.9.9a2 2 0 0 0 0 2.828l.9.9a2 2 0 0 1 .586 1.414v1.272a2 2 0 0 0 2 2h1.272a2 2 0 0 1 1.414.586l.9.9a2 2 0 0 0 2.828 0l.9-.9a2 2 0 0 1 1.414-.586h1.272a2 2 0 0 0 2-2V13.8a2 2 0 0 1 .586-1.414Z"></path>
                                            </svg>
                                            <div class="text-left rtl:text-right">
                                                <div class="mb-1 text-xs">PART V</div>
                                                <div class="-mt-1 font-sans text-sm font-semibold">Incomplete Sentences</div>
                                            </div>
                                        </a>
                                        <a href="#" class="w-full sm:w-auto bg-gray-200 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-black rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                            <svg class="me-3 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M1 5h1.424a3.228 3.228 0 0 0 6.152 0H19a1 1 0 1 0 0-2H8.576a3.228 3.228 0 0 0-6.152 0H1a1 1 0 1 0 0 2Zm18 4h-1.424a3.228 3.228 0 0 0-6.152 0H1a1 1 0 1 0 0 2h10.424a3.228 3.228 0 0 0 6.152 0H19a1 1 0 0 0 0-2Zm0 6H8.576a3.228 3.228 0 0 0-6.152 0H1a1 1 0 0 0 0 2h1.424a3.228 3.228 0 0 0 6.152 0H19a1 1 0 0 0 0-2Z"/>
                                            </svg>
                                            <div class="text-left rtl:text-right">
                                                <div class="mb-1 text-xs">PART VI</div>
                                                <div class="-mt-1 font-sans text-sm font-semibold">Text Completion</div>
                                            </div>
                                        </a>
                                        <a href="#" class="w-full sm:w-auto bg-gray-200 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-black rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                            <svg class="me-3 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M15.133 10.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C4.867 13.018 3 13.614 3 14.807 3 15.4 3 16 3.538 16h12.924C17 16 17 15.4 17 14.807c0-1.193-1.867-1.789-1.867-4.175ZM4 4a1 1 0 0 1-.707-.293l-1-1a1 1 0 0 1 1.414-1.414l1 1A1 1 0 0 1 4 4ZM2 8H1a1 1 0 0 1 0-2h1a1 1 0 1 1 0 2Zm14-4a1 1 0 0 1-.707-1.707l1-1a1 1 0 1 1 1.414 1.414l-1 1A1 1 0 0 1 16 4Zm3 4h-1a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2ZM6.823 17a3.453 3.453 0 0 0 6.354 0H6.823Z"></path>
                                            </svg>
                                            <div class="text-left rtl:text-right">
                                                <div class="mb-1 text-xs">PART VII</div>
                                                <div class="-mt-1 font-sans text-sm font-semibold">Reading</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                </div>
                    </div>
                </div>
                <h2 id="accordion-open-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-semibold text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-open-body-3" aria-expanded="false"
                        aria-controls="accordion-open-body-">
                        <span>Vocabulary</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="text-gray-500 dark:text-gray-400">Comming Soon.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-3 p-5">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Unlock VIP Lesson</button>
            </div>
        </div>
    </div>
</body>
</html>