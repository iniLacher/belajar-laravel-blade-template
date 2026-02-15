<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Raw Blade</title>
</head>
<body>
  @php
    class Person {
      public string $nama;
      public string $alamat;
    }

    $person = new Person;
    $person->nama = 'kingabdi';
    $person->alamat = 'Indonesia';
  @endphp


  <p>nama : {{ $person->nama }}</p>
  <p>alamat : {{ $person->alamat }}</p>
</body>
</html>