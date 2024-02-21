<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    <h2>Welcome home</h2>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>
    @endauth

    @guest
        <p>not logged  in</p>
    @endguest
</body>
</html>