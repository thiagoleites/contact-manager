<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Manager - @yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="min-h-screen">
<main>
    <div class="max-w-7xl mx-auto p-5 flex items-center justify-center">
        @yield('content')
    </div>
    <p class="absolute  bottom-24 w-full text-center text-gray-400  ">You should be login to manager contacts</p>
    @include('layouts.footer')
</main>

</body>
</html>
