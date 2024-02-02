<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Yayasan Masagena Center' }}</title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <!-- Logo and company name here -->
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-10 mr-3">
                <span class="font-bold text-xl">Yayasan Masagena Center</span>
            </div>
            <!-- Navigation -->
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-gray-600 hover:bg-gray-200 hover:text-gray-1000 p-2 rounded-full">Beranda</a></li>
                    <li><a href="/books" class="text-gray-600 hover:bg-gray-200 hover:text-gray-1000 p-2 rounded-full">Books</a></li>
                </ul>
            </nav>
        </div>
    </header>
