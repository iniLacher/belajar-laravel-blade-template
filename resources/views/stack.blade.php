<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Stack Blade</title>
</head>
<body>
  @push('testStack')
    <script src="first.js"></script>
  @endpush
  @push('testStack')
    <script src="second.js"></script>
  @endpush
  @prepend('testStack')
    <script src="third.js"></script>
  @endprepend

@stack('testStack')
</body>
</html>