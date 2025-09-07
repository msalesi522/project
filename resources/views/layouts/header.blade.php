<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    @vite('resources/css/app.css','resources/js/app.js')
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
</head>
<body class="bg-gray-100 text-gray-900">

<!-- Header -->
<header class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between">
        <h1 class="text-x1 font-bold"> @yield('header') </h1>
        @auth()
            <div class="flex gap-1">
                <a href="{{ route('posts.create') }}" class="bg-white text-blue-600 px-4 py-2 rounded">ایجاد پست</a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded cursor-pointer">logout</button>
                </form>
            </div>
        @else
            <div>
                <a href="{{ route('register') }}" class="bg-white text-blue-600 px-4 py-2 rounded">ثبت نام</a>
                <a href="{{ route('login') }}" class="bg-white text-blue-600 px-4 py-2 rounded">ورود</a>
            </div>
        @endauth

    </div>
</header>
