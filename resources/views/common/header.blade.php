<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Yayasan Masagena Center' }}</title>
    <link rel="icon" href="{!! asset('assets/logo-masagena.png') !!}" type="image/png/jpg" />
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @livewireStyles
</head>

<body>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <!-- Logo and company name here -->
            <div class="flex items-center">
                <img src="{{ asset('assets/logo-masagena.png') }}" alt="Logo" class="h-14 w-14 mr-3">
                <span class="font-bold text-xl">Yayasan Masagena Center</span>
            </div>
            <!-- Navigation -->
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-gray-600 hover:text-gray-900 hover:bg-gray-300 p-2 rounded-full">Beranda</a></li>
                    <li><a href="/books" class="text-gray-600 hover:text-gray-900 hover:bg-gray-300 p-2 rounded-full">Books</a></li>
                    <li><a href="/about" class="text-gray-600 hover:text-gray-900 hover:bg-gray-300 p-2 rounded-full">About us</a></li>
                    <li><a href="/admin"><x-bi-people class="fill-current h-auto w-auto hover:bg-gray-300 p-2 rounded-full"/></a></li>
                </ul>
            </nav>
        </div>
    </header>
