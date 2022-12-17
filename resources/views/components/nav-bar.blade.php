<nav>
    <h3>Quotes</h3>
    <ul>
        @auth
        <li><a href="/quotes/create">Create Quote</a></li>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
        @else
        <li><a href="/signup">Signup</a></li>
        <li><a href="/login">Login</a></li>
        @endauth
    </ul>
</nav>