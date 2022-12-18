<nav class="fixed w-full top-0 left-0 bg-white z-10">
    <div class="mx-auto max-w-7xl p-2">
        <div class="flex items-center justify-between">
            <a href=" /" class="text-2xl font-bold">Quotes</a>
            <div class="flex items-center justify-end text-sm font-bold">
                @auth
                <a href="/quotes/create" class="whitespace-nowrap text-gray-500 hover:text-gray-900">Create Quote</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="ml-4 inline-flex items-center justify-center whitespace-nowrap rounded-full border border-transparent bg-indigo-600 px-4 py-2 text-white shadow-sm hover:bg-indigo-700">Logout</button>
                </form>
                @else
                <a href="/login" class="whitespace-nowrap text-gray-500 hover:text-gray-900">Login</a>
                <a href="/signup" class="ml-4 inline-flex items-center justify-center whitespace-nowrap rounded-full border border-transparent bg-indigo-600 px-4 py-2 text-white shadow-sm hover:bg-indigo-700">Sign up</a>
                @endauth
            </div>
        </div>
    </div>
</nav>