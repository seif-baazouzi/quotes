<x-layout>
    <x-form action="/quotes/store" method="POST">
        @csrf
        <x-title>Create Quote</x-title>
        <div>
            <x-label>
                Author
                <x-input type="text" id="author" name="author" value="{{ old('author') }}" />
            </x-label>
            @error('author')
            <x-error>{{ $message }}</x-error>
            @enderror
        </div>
        <div>
            <x-label>
                Quote
                <x-textarea name="quote">{{ old('quote') }}</x-textarea>
            </x-label>
            @error('quote')
            <x-error>{{ $message }}</x-error>
            @enderror
        </div>
        <x-button>Create</x-button>
    </x-form>
</x-layout>