<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student dashboard</title>
</head>
<body>
    <div id="navbar-student">
        <a href="">Register</a>
        <a href="">Offered Courses</a>
        <a href="">Grades</a>
        <a href="/">Go back</a>
    </div>
    <div id="main-content">
        <h1>{{$page_name}} page</h1>
        @yield('content')
    </div>
    <div id="footer-section">
        &copy Shahed Chowdhury Omi 18-38760-3 [Student Page] 
    </div>
</body>
</html>