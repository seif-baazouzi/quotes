<x-layout>
    <h1>Create Quote</h1>
    <form action="/quotes/store" method="POST">
        @csrf
        <div>
            <label>
                Author
                <input type="text" name="author" value="{{ old('author') }}">
            </label>
            @error('author')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label>
                Quote
                <textarea name="quote">{{ old('quote') }}</textarea>
            </label>
            @error('quote')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <button>Create</button>
    </form>
</x-layout>
