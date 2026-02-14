<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>isset in blade</title>
</head>
<body>
  <p>singkatnya isset yang depan nya pake @ itu untuk mengecek apakah variable itu ada/didefinisikan dan tidak null/kosong, contoh : setelah ini jika ada lanjutannya maka isset berhasil dijalankan</p>
  <i>ini from isset @isset($test)
    <i>isset berhasil {{$test}}</i>
  @endisset</i>
</body>
</html>