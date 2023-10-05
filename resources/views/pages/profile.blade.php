<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ 'css/global.css' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>My Profile</title>
</head>
<body>
<div class="max-w-screen-xl my-2as border border-slate-200 rounded-xl p-10 mx-28 min-h-screen shadow-md">
<h1 class="font-bold" > My Profile</h1>
    <hr class="h-px my-8 bg-gray-200 border-2 dark:bg-gray-700">
        <div class=" max-w-lg border-slate-200 rounded-xl mx-auto shadow-md p-5">
            <form action="">
            <label for="crete">
            <span class="block font-semibold mb-1 text-slate-700 ">Created</span>
            <input type="create" id="nama" placeholder="Created.." class="px-3 py-2 border shadow rounded w-full block text-sm">
                </label>   
            <form action="">
            <label for="crete">
            <span class="block font-semibold mb-1 text-slate-700 ">Registrant</span>
            <input type="create" id="nama" placeholder="Widyatama Student" class="px-3 py-2 border shadow rounded w-full block text-sm">
                </label>   
            <form action="">
            <label for="crete">
            <span class="block font-semibold mb-1 text-slate-700 ">E-Mail</span>
            <input type="create" id="nama" placeholder="user@widyatama.ac.id" class="px-3 py-2 border shadow rounded w-full block text-sm">
                </label>   
            <form action="">
            <label for="crete">
            <span class="block font-semibold mb-1 text-slate-700 ">NPM</span>
            <input type="create" id="nama" placeholder="0620101033" class="px-3 py-2 border shadow rounded w-full block text-sm">
                </label>   
            <form action="">
            <label for="crete">
            <span class="block font-semibold mb-1 text-slate-700 ">Faculty</span>
            <input type="create" id="nama" placeholder="Engeneering" class="px-3 py-2 border shadow rounded w-full block text-sm">
                </label>   
            <form action="">
            <label for="crete">
            <span class="block font-semibold mb-1 text-slate-700 ">Program Study</span>
            <input type="create" id="nama" placeholder="S1 Informatics" class="px-3 py-2 border shadow rounded w-full block text-sm">
                </label>   
            <form action="">
            <label for="crete">
            <span class="block font-semibold mb-1 text-slate-700 ">Fall Name</span>
            <input type="create" id="nama" placeholder="Coba 1" class="px-3 py-2 border shadow rounded w-full block text-sm">
                </label>   
            </form>                                                             
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Picture</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                </div>
    <hr class="h-px my-8 bg-gray-200 border-2 dark:bg-gray-700">
    <button class="my-10 bg-sky-500 px-5 py-2 rounded-full text-white font-semibold block mx-auto hover:bg-sky-600">Save</button>
    </div>
</body>
</html>