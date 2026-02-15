<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Coba for in blade</title>
</head>
<body>
  <ul>
    @for ($row = 1; $row <= 5; $row++)
      <li>
        {{ $row }}
      </li>
    @endfor
  </ul>


  <ul>
    @foreach ($hobbies as $hobby)
    <p>Hobby : </p>
      <li>{{ $hobby }}</li>
    @endforeach
  </ul>

  <ul>
    @forelse ($anuu as $anu)
    <p><i>versi forelse</i>
      Hobby : </p>
      <li>{{ $anu }}</li>
    @empty
      <p>forelse tidak punya hobby</p>
    @endforelse
  </ul>
  
</body>
</html>