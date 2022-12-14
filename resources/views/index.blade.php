<x-layout>
    <h1>Quotes</h1>

    @foreach ($quotes as $q)
        <div>
            <p>{{ $q->quote }}</p>    
            <span>{{ $q->author }}</span>
            <div>
                <a href="/edit/{{ $q->id }}">edit</a>
                <form action="/delete/{{ $q->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>delete</button>
                </form>
            </div>
        </div>
    @endforeach
</x-layout>
