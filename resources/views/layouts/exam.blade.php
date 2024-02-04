<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('style')

    <title>Test Page</title>
</head>

<body class="text-gray-900 bg-gray-50 dark:bg-gray-900 dark:text-white">
    @include('examEPT.partials.examNavbar')
    <div class="pt-20 mx-auto max-w-7xl max-md:px-2">
        @yield('content')
    </div>
    @include('partials.footer')
    @stack('script')
</body>

</html>
