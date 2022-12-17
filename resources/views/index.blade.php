<x-layout>
    <h1>Quotes</h1>

    @if (count($quotes) === 0)
    <h3>The is no quotes yet</h3>
    @endif

    @foreach ($quotes as $q)
    <div>
        <p>{{ $q->quote }}</p>
        <span>{{ $q->author }}</span>
        @if (auth()->id() === $q->user)
        <div>
            <a href="/quotes/{{ $q->id }}/edit">edit</a>
            <form action="/quotes/{{ $q->id }}/delete" method="POST">
                @csrf
                @method('DELETE')
                <button>delete</button>
            </form>
        </div>
        @endif
    </div>
    @endforeach
</x-layout>