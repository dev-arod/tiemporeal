<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form action="/task" method="post">
    @csrf
    <label for="description">Agrega una tarea:</label>
    <input type="text" name="description" id="description">
    <button type="submit">Crear Tarea</button>
  </form>
</body>

</html>