<x-layout>
    <h1>Login</h1>

    <form action="/login" method="POST">
        @csrf
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
        <button>Login</button>
    </form>
</x-layout>