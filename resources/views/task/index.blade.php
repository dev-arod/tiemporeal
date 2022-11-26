<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ mix('js/app.js') }}" defer></script>
  <script src="{{ mix('js/tasks.js') }}"></script>
  <title>Document</title>
</head>

<body>
  <h2>Estas en el index de Task</h2>

  <div x-data="tasks()">
    <template x-for="task in datatasks">
      <li x-text="task"></li>
    </template>
  </div>
</body>

</html>