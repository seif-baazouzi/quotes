<x-layout>
    <h1>Quotes</h1>

    @foreach ($quotes as $q)
        <div>
            <p>{{ $q->quote }}</p>    
            <span>{{ $q->author }}</span>
            <div>
                <a href="/edit/{{ $q->id }}">edit</a>
            </div>
        </div>
    @endforeach
</x-layout>
