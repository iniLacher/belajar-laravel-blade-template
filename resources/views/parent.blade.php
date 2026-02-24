<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Belajar @yield('title')</title>
</head>
<body>
  <h1>Belajar Laravel Blade Template</h1>
  @yield('headerr')

  @yield('content')

  @section('childDefault')
    <p>ini Default</p>
  @show
</body>
</html>