<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
</head>
<body>
    <div id="navbar-admin">
        <a href="">Add student</a>
        <a href="">Remove student</a>
        <a href="">Update student</a>
        <a href="">See all students</a>
        <a href="/">Go back</a>
    </div>
    <div id="main-content">
        <h1>{{$page_name}} page</h1>
        @yield('content')
    </div>
    <div id="footer-section">
        &copy Shahed Chowdhury Omi 18-38760-3 [Admin Page] 
    </div>
</body>
</html>