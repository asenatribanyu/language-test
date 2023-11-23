<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- DataTables --}}
    <link rel="stylesheet" href="{{ asset('css/dataTables.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    @stack('style')

    <title>User Page</title>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    @include('partials.navbar')
    <div class="max-w-7xl mx-auto max-md:px-2">
        @yield('content')
    </div>
    @include('partials.footer')
    @stack('script')
</body>

</html>
