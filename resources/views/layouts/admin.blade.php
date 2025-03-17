<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <nav>
        <a href="{{ route('admin.theses.index') }}">Theses</a>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>

    <div>
        @yield('content')
    </div>
</body>
</html>
