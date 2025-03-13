<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @extends('layouts.app')
   
    <nav class="bg-green-700 shadow p-4">
        <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('welcome') }}" class="text-xl font-bold text-white">Thesis Archive</a>
            <div class="flex items-center">
                <a href="#" class="text-white px-4">BSCS</a>
                <a href="#" class="text-white px-4">BSIS</a>
                <a href="#" class="text-white px-4">BLIS</a>
                @auth
                    <div class="ml-4 relative">
                        <button id="user-menu" class="text-gray-700\ focus:outline-none">
                            {{ Auth::user()->name }} ▼
                        </button>
                        <div id="dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full px-4 py-2 text-left text-gray-700 hover:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </nav>
    
    <div class="flex items-center justify-center h-screen bg-gray-100">
        <div class="w-full max-w-2xl px-4">
            <form action="{{ route('search') }}" method="GET" class="relative">
                <input 
                    type="text" 
                    name="query" 
                    class="w-full p-4 text-lg border border-gray-300 rounded-full shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none" 
                    placeholder="Search...">
                <button 
                    type="submit" 
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                    🔍
                </button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('user-menu').addEventListener('click', function() {
            document.getElementById('dropdown').classList.toggle('hidden');
        });
    </script>
</body>
</html>