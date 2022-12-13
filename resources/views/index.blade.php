<x-layout>
    <h1>Quotes</h1>

    @foreach ($quotes as $q)
        <div>
            <p>{{ $q->quote }}</p>    
            <span>{{ $q->author }}</span>
        </div>
    @endforeach
</x-layout>
