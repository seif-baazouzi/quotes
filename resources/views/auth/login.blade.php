<x-layout>
    <x-form action="/login" method="POST">
        @csrf
        <x-title>Login</x-title>
        <div>
            <x-label>
                E-mail
                <x-input type="text" name="email" value="{{ old('email') }}" />
            </x-label>
            @error('email')
            <x-error>{{ $message }}</x-error>
            @enderror
        </div>
        <div>
            <x-label>
                Password
                <x-input type="password" name="password" />
            </x-label>
            @error('password')
            <x-error>{{ $message }}</x-error>
            @enderror
        </div>
        <x-button>Login</x-button>
    </x-form>
</x-layout>