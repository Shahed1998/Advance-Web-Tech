<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
</head>
<body>
    <div id="navbar">
        <a href="{{route('product.all')}}">All products</a>
        <a href="{{route('product.add')}}">Add product</a>
    </div>
    <h1>Product Details</h1>
    <div id="content-section">
        @yield('content')
    </div>
</body>
</html>