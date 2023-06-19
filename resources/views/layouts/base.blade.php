<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Event App | @yield('title')</title>

</head>
<body>
   <nav class="navbar navbar-expend-lg bg-primary navbar-dark">
        <div class="container-fluid">

        </div>
   </nav>
   <main>
        @yield('content')
   </main>
</body>
</html>

