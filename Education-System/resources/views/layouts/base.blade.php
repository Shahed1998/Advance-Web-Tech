<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Class Task 4</title>
</head>
<body>
    <div id="nav">
        <a href="/" class="btn btn-link">Home</a>
        <a href="{{route('all.departments')}}" class="btn btn-link">All departments</a>
        <a href="">All courses</a>
        <a href="{{route('all.students')}}" class="btn btn-link">All students</a>
    </div>
    <h1>{{$pageName ?? ""}}</h1>
    <div id="content">
        @yield('content')
    </div>
    <div id="footer">
        Developed by <span style="color:red;">18-38760-3</span>
    </div>
</body>
</html>