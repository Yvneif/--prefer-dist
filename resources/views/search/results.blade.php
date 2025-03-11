<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-3/4"> <!-- 75% Width -->
        <form action="{{ route('search') }}" method="GET" class="relative">
            <input type="text" name="query" placeholder="Search..." 
                class="w-full p-6 text-3xl border border-gray-300 rounded-full focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-xl">
            <button type="submit" class="absolute right-6 top-1/2 transform -translate-y-1/2 text-gray-500 text-2xl">
                🔍
            </button>
        </form>
    </div>
</div>
