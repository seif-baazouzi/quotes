<x-layout>

    <x-form action="/signup" method="POST">
        @csrf
        <x-title>Signup</x-title>
        <div>
            <x-label>
                Name
                <x-input type="text" name="name" value="{{ old('name') }}" />
            </x-label>
            @error('name')
            <x-error>{{ $message }}</x-error>
            @enderror
        </div>
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
        <div>
            <x-label>
                Confirm
                <x-input type="password" name="password_confirmation" />
            </x-label>
            @error('password_confirmation')
            <x-error>{{ $message }}</x-error>
            @enderror
        </div>
        <x-button>Signup</x-button>
    </x-form>
</x-layout>