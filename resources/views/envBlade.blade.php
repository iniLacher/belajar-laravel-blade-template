<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mencoba env Blade </title>
</head>
<body>
  @env('local')
    <p>This is LOCAL environment</p>
  @endenv
  @env('testing')
    <p>This is TESTING environment</p>
  @endenv
  @env('production')
    <p>This is PRODUCTION environment</p>
  @endenv
</body>
</html>