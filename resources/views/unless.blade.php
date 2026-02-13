<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Unless Blade</title>
</head>
<body>
  <p>kalo kondisinya false,maka di bawah akan ada paragraf</p>
  @unless ($isAdmin === true)
    <p>Kamu tidak memiliki otoritas ke halaman ini</p>
  @endunless
</body>
</html>