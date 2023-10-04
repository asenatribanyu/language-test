<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ 'css/global.css' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Update Profile</title>
</head>
<body>
    <div>
        @include('partials.navbar')
    </div>
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2 bg-blue-200 rounded-lg">
        <h1 class="text-center py-15 lg:py-2.5 text-blue-800 ">Let's tell us yourself first.</h1>
        </div>
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-20  bg-gray-100 rounded-lg">
            <h1 class="text-center py-3 font-black  ">Update Profile</h1>
    <div class="flex items-center">
        <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="bordered-radio-1" class="w-full p-0 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I'm student of Widyatama University</label>
        </div>
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input ">Upload file</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            </div>
                <div class="flex items-center">
                <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-2" class="w-full p-0 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I'm not student of Widyatama University</label>
                </div>
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save</button>
                </div>
</body>
</html>