<x-layout>
    @if (count($quotes) === 0)
    <h1 class="text-center text-4xl p-28 font-bold text-gray-900">The is no quotes yet</h1>
    @else
    <div class="max-w-3xl m-auto p-5">
        @foreach ($quotes as $q)
        <div class="hover:bg-gray-50 relative p-4 rounded-lg">
            <p class="font-bold text-lg">“{{ $q->quote }}“</p>
            <span class="text-sm italic block">- {{ $q->author }}</span>
            @if (auth()->id() === $q->user)
            <div class="group flex w-16 justify-between absolute top-0 right-0 p-4">
                <div class="w-2 h-2 bg-gray-900 rounded-full"></div>
                <div class="w-2 h-2 bg-gray-900 rounded-full"></div>
                <div class="w-2 h-2 bg-gray-900 rounded-full"></div>
                <div class="w-32 absolute top-0 right-0 invisible bg-white group-hover:visible shadow-md p-2 rounded-md text-lg font-bold">
                    <a href="/quotes/{{ $q->id }}/edit" class="block w-full rounded-md p-2 hover:bg-gray-100">Edit</a>
                    <form action="/quotes/{{ $q->id }}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="block w-full rounded-md p-2 text-left text-red-600 hover:bg-gray-100">Delete</button>
                    </form>
                </div>
            </div>
            @endif
        </div>
        @endforeach
    </div>
    @endif
</x-layout>