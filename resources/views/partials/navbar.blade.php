<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ 'css/global.css' }}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Dashboard | Dashboard - Widyatama Language Test</title>
  <style>
    .dropdown-content {
      display: none;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-icon::after {
      content: "\25BC";
      /* Unicode character for down arrow */
      margin-left: 0.5em;
      display: inline-block;
    }
  </style>

</head>

<body class="flex-grow">

  <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center">
        <img src="{{ asset('img/lembaga-bahasa.png') }}" class="h-12 mr-3" alt="Flowbite Logo" />
        <span class="self-center text-3xl font-semibold whitespace-nowrap dark:text-white">Widyatama Language Test</span>
      </a>
      <div class="flex items-center md:order-2">
        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-full" src="{{ asset('img/Logowidyatama_removebg.png') }}" alt="user photo">
        </button>
        <!-- Dropdown menu -->

        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">Username</span>
            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@gmail.com</span>
          </div>
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
              <a href="/admin/dashboard/manage-users" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Manage Users</a>
            </li>
            <!-- Manage Exam Dropdown -->
            <li class="dropdown">
              <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                <span>Manage Exam</span>
                <span class="dropdown-icon"></span>
              </a>
              <ul class="dropdown-content">
                <li><a href="/admin/dashboard/ept-manage-question" class="block px-7 py-1 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">EPT</a></li>
                <li><a href="/admin/dashboard/toeic-manage-question" class="block px-7 py-1 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">TOEIC</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Manage Practice</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Manage Payments</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Reporting</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">User Certification</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

          <form>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
              </div>
              <input type="search" id="default-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="..." required>
            </div>
          </form>

        </ul>
      </div>
    </div>
  </nav>

  <h1></h1>







  <!-- <div class="container" style=" justify-content: center; align-items: center; min-height: 100vh; margin: 0;">
    <div style="display: flex; flex-wrap: wrap; justify-content: space-around; gap: 20px; max-width: 1000px; width: 100%; padding: 20px; box-sizing: border-box;">
      <div style="width: calc(50% - 20px); box-sizing: border-box; max-width: 450px;">
        <ol class="space-y-4 text-gray-500 list-decimal list-inside dark:text-gray-400">
          <li>
            List item one
            <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
              <li>You might feel like you are being really "organized" o</li>
              <li>Nested navigation in UIs is a bad idea too, keep things as flat as possible.</li>
              <li>Nesting tons of folders in your source code is also not helpful.</li>
            </ul>
          </li>
          <li>
            List item two
            <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
              <li>I'm not sure if we'll bother styling more than two levels deep.</li>
              <li>Two is already too much, three is guaranteed to be a bad idea.</li>
              <li>If you nest four levels deep you belong in prison.</li>
            </ul>
          </li>
          <li>
            List item three
            <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
              <li>Again please don't nest lists if you want</li>
              <li>Nobody wants to look at this.</li>
              <li>I'm upset that we even have to bother styling this.</li>
            </ul>
          </li>
        </ol>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Read more
          <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
          </svg>
        </a>
      </div>
    </div>
    <div style="width: calc(50% - 20px); box-sizing: border-box; max-width: 450px;">
      <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <ol class="space-y-4 text-gray-500 list-decimal list-inside dark:text-gray-400">
          <li>
            List item one
            <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
              <li>You might feel like you are being really "organized" o</li>
              <li>Nested navigation in UIs is a bad idea too, keep things as flat as possible.</li>
              <li>Nesting tons of folders in your source code is also not helpful.</li>
            </ul>
          </li>
          <li>
            List item two
            <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
              <li>I'm not sure if we'll bother styling more than two levels deep.</li>
              <li>Two is already too much, three is guaranteed to be a bad idea.</li>
              <li>If you nest four levels deep you belong in prison.</li>
            </ul>
          </li>
          <li>
            List item three
            <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
              <li>Again please don't nest lists if you want</li>
              <li>Nobody wants to look at this.</li>
              <li>I'm upset that we even have to bother styling this.</li>
            </ul>
          </li>
        </ol>

        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Read more
          <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
          </svg>
        </a>
      </div>
    </div> -->







    <!-- <button type="button" class="center text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Go</button> -->

    @include('partials.footer')
</body>

</html>

<style>
  /* Center the button */
  .center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
</style>
<style>
  body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    margin: 0;
    /* Set minimum height to fill the viewport */
  }
</style>
<script>
  // Add this script to your HTML to enable dropdown functionality
  document.addEventListener("DOMContentLoaded", function() {
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
      dropdown.addEventListener('mouseover', function() {
        this.querySelector('.dropdown-content').style.display = 'block';
      });

      dropdown.addEventListener('mouseout', function() {
        this.querySelector('.dropdown-content').style.display = 'none';
      });
    });
  });
</script>