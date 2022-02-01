<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Task 1</title>
</head>
<body>
    <div id="navbar-basic">
        <a href="/">Home</a>
        <a href="/login">Login</a>
        <a href="/contacts">Contacts</a>
    </div>
    <div id="main-content">
        <h1>{{$page_name}} page</h1>
        @yield('content')
    </div>
    <div id="footer-section">
        &copy Shahed Chowdhury Omi 18-38760-3 [Basic Page]
    </div>
</body>
</html>