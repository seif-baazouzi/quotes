<x-layout>
    <h1>Edit Quote</h1>
    <form action="/quotes/{{ $quote->id }}/update" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>
                Author
                <input type="text" name="author" value="{{ $quote->author }}">
            </label>
            @error('author')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label>
                Quote
                <textarea name="quote">{{ $quote->quote }}</textarea>
            </label>
            @error('quote')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <button>Edit</button>
    </form>
</x-layout>
