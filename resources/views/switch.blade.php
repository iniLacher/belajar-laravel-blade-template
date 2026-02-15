<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Belajar SWITCH</title>
</head>
<body>
  @switch($masak)
      @case('menumis')
          <p>-Potong bawang dan cabai lalu tumis dan masukkan bahan</p>
          @break
      @case('menggoreng')
          <p>-Masukkan minyak goreng tunggu hingga panas,lalu masukkan bahan</p>
          @break
      @case('merebus')
          <p>-Didihkan air lalu masukkan bahan</p>
          @break
      @case('bakar')
          <p>-Oleskan bumbu pada bahan, lalu bakar hingga matang</p>
          @break
      @default
          <i>SILAHKAN BERI TAHU METHODE MEMASAK ANDA</i>
  @endswitch
</body>
</html>