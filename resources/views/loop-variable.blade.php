<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Loop Variabel In Blade</title>
</head>
<body>
  @foreach ($mobil as $mbl)
      {{ $loop->iteration . '. ' . $mbl }}
  @endforeach


  @foreach ($tasks as $task)
      <p>{{$task}}</p>
      @if ($loop->remaining > 0)
          <small>tersisa {{ $loop->remaining }} tugas lagi </small>
      @else
          <small>ini tugas terakhir</small>
      @endif

      @if($loop->last)
        <p>Selasai🎉</p>
      @endif
  @endforeach
</body>
</html>