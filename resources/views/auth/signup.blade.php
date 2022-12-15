<x-layout>
    <h1>Signup</h1>

    <form action="/signup" method="POST">
        @csrf
        <div>
            <label>
                Name
                <input type="text" name="name" value="{{ old('name') }}">
            </label>
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label>
                E-mail
                <input type="text" name="email" value="{{ old('email') }}">
            </label>
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label>
                Password
                <input type="password" name="password">
            </label>
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label>
                Confirm
                <input type="password" name="password_confirmation">
            </label>
            @error('password_confirmation')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <button>Signup</button>
    </form>
</x-layout>