<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Learn if in Blade</title>
</head>
<body>
  <h3>start</h3>
  @if ($saltedEgg >= 2)
    <p>Salted egg Ready boskue</p>
  @elseif ($saltedEgg === 1)
    <p>Salted egg Tinggal Satu yaaa</p>
  @else
    <p>Mohon Maaf salted egg Sold Out</p>
  @endif
</body>
</html>