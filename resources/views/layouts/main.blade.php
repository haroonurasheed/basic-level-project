<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>My Laravel App</h1>
    </header>

    @if(Auth::check())
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
@else
    <a href="{{ route('login') }}">Login</a> |
    <a href="{{ route('register') }}">Register</a>
@endif

    <div>
        @yield('content')
    </div>
</body>
</html>