@extends('layouts.exam')
@section('content')
    <div class="flex w-full gap-5 max-md:block">
        @include('partials.testTakerProfile')
        <div
            class="relative w-3/5 p-5 mt-5 bg-white border border-gray-200 rounded-lg shadow h-1/2 max-md:w-full max-md:h-full dark:bg-gray-800 dark:border-gray-700">
            <div class="border-b-2 border-gray-200">
                <h1 class="pb-2 text-2xl font-semibold dark:text-white">EPT/TOEIC Result</h1>
            </div>
            <div class="absolute top-5 right-5">Total {{ $category == 'ept' ? 'EPT' : 'TOEIC' }} Score: <span
                    class="px-2 py-1 text-lg font-semibold text-blue-800 bg-blue-100 rounded me-2 dark:bg-blue-900 dark:text-blue-300">500</span>
            </div>
            <div class="p-3 mt-5 border-2 rounded-lg">
                <div class="border-b-2 border-gray-200">
                    <h2 class="pb-2 text-xl font-medium dark:text-white">Listening Comperhension</h2>
                </div>
                <div class="mt-3 ms-3">
                    <li>Correct: <b>15</b></li>
                    <li>Incorrect: <b>5</b></li>
                    <li>Section Score: <b>25</b></li>
                </div>
            </div>
            <div class="p-3 mt-3 border-2 rounded-lg">
                <div class="border-b-2 border-gray-200">
                    <h2 class="pb-2 text-xl font-medium dark:text-white">Structure and Written Expression</h2>
                </div>
                <div class="mt-3 ms-3">
                    <li>Correct: <b>15</b></li>
                    <li>Incorrect: <b>5</b></li>
                    <li>Section Score: <b>25</b></li>
                </div>
            </div>
            <div class="p-3 mt-3 border-2 rounded-lg">
                <div class="border-b-2 border-gray-200">
                    <h2 class="pb-2 text-xl font-medium dark:text-white">Reaading Comperhension</h2>
                </div>
                <div class="mt-3 ms-3">
                    <li>Correct: <b>15</b></li>
                    <li>Incorrect: <b>5</b></li>
                    <li>Section Score: <b>25</b></li>
                </div>
            </div>

            {{-- Footer Navigation --}}
            <div class="flex items-center justify-end mt-3">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back
                    to Dashboard</button>
            </div>
        </div>
    </div>
@endsection
