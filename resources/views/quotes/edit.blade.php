<x-layout>
    <x-form action="/quotes/{{ $quote->id }}/update" method="POST">
        @csrf
        @method('PUT')
        <x-title>Edit Quote</x-title>
        <div>
            <x-label>
                Author
                <x-input type="text" name="author" value="{{ $quote->author }}" />
            </x-label>
            @error('author')
            <x-error>{{ $message }}</x-error>
            @enderror
        </div>
        <div>
            <x-label>
                Quote
                <x-textarea name="quote">{{ $quote->quote }}</x-textarea>
            </x-label>
            @error('quote')
            <x-error>{{ $message }}</x-error>
            @enderror
        </div>
        <x-button>Edit</x-button>
    </x-form>
</x-layout>