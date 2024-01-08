@extends('layouts.adminDashboard')
@section('content')
    <form action="/admin/dashboard/exam/direction" method="POST">
        @csrf
        <div class="flex justify-center items-center">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div
                class="mt-5 p-5 w-full max-w-screen-lg bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="border-b-2 border-gray-200">
                    <h1 class="pb-1 text-2xl font-semibold dark:text-white">EPT/TOEIC Upload Direction</h1>
                </div>
                <div class="mt-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Audio
                        Direction
                        (Optional)</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="audio">
                </div>
                <div class="mt-5">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Text
                        Direction</label>
                    <textarea id="message" rows="4" name="direction"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write direction here ..."></textarea>
                </div>
                <div class="mt-5 pb-5 border-b-2 border-gray-200">
                    <label for="select-section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                        Section</label>
                    <select id="select-section" name="section"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected>Select section</option>
                        <option value="part a">Listening Comperhension Part A</option>
                        <option value="part b">Listening Comperhension Part B</option>
                        <option value="part c">Listening Comperhension Part C</option>
                        <option value="structure">Structure Expression</option>
                        <option value="written">Written Expression</option>
                        <option value="reading">Reading Comperhension</option>
                    </select>
                </div>
                <div class="flex mt-5 items-center rounded-b dark:border-gray-600">
                    <button data-modal-hide="date-modal" type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    <button data-modal-hide="date-modal" type="button"
                        class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                </div>
            </div>
        </div>
    </form>
@endsection
