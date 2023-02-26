<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  

  <style>
    body {
      font-family: 'Nunito', sans-serif;
      background: blue;
    }

    .card {
      background: #2d197c
    }
  </style>
  <link rel="stylesheet" href="/Applications/MAMP/htdocs/Todolistpj/resources/css/style.css">
</head>


<body>
  <div class="container">
    <div class="card">
      <div>
        <h1>Todo List</h1>
        <form action="/" method="POST">
          @csrf
          <input type="text" name="content">
          <input type="submit" value="追加">
        </form>
      </div>
    </div>
    作成日
    
  </div>

</body>

</html>