<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ 'css/global.css' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Waiting Area | Language Institute - Widyatama University</title>
</head>
<body>
    <div>
        <h1 class="text-center font-semibold mt-3 dark:text-white">2h 0m 0s - </h1>
    </div>
    <div class="mt-17 pe-96 p-5 border-gray-800  dark:bg-gray-800 dark:border-gray-700">
        <div class=" border-gray-200">
            <h2 class="text-2xl font-medium dark:text-white">Select Schedule of The Test</h2>
        </div>
        {{-- <div class=""> 
            <h3 class=" block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-center font-medium text-2xl dark:text-white "> Test Taker Profile</h3>
        </div> --}}
        <div class="mt-5 pe-56 ">
            <div id="accordion-open" data-accordion="open">
                <h2 id="accordion-open-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-open-body-1" aria-expanded="true"
                        aria-controls="accordion-open-body-1">
                        <span>2023-02-04</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <h2 id="accordion-collapse-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                        aria-controls="accordion-collapse-body-2">
                        <span>10:00</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
            </div>
            <div>
                <div class="mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 bg-white dark:bg-gray-800">
                    <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="mb-4 text-gray-500 dark:text-gray-400">
                            <h3 class="text-lg text-left font-semibold text-gray-900 dark:text-white">Test Taker Profile</h3>
                            <p class="my-4 text-left">Registrant: Widyatama Student</p>
                            <p class="my-4 text-left">Name: User</p>
                            <p class="my-4 text-left">NPM: 0620101033</p>
                            <p class="my-4 text-left">Faculty: Engineering</p>
                            <p class="my-4 text-left">Program Study: S1 Informatics</p>
                            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                        </blockquote>
            </div>
            <div class="mb-8 border text-center border-gray-200 rounded-lg shadow-sm dark:border-gray-700 bg-gray-400 dark:bg-gray-400"> 
                <span>PASTIKAN PROFIL ANDA DI ATAS SUDAH BENAR</span>
            </div>
            <section>
                <div class="pt-3">
                    <button type="button"
                    class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-500 focus:outline-none bg-white rounded-lg border border-gray-700 hover:bg-gray-400 hover:text-gray-50 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Back</button>
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                </div>
            </section>
    </div>
</body>
</html>