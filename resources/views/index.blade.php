<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


  <style>
    .card {
      width: 50vw;
      background-color: white;
      padding: 30px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 10px;
    }

    body {
      font-family: 'Nunito', sans-serif;
      background: blue;
      line-height: 1;

    }

    .title {
      font-weight: bold;
      font-size: 24px;
    }

    .mb-30 {
      display: flex;
      margin-bottom: 30px;
      justify-content: space-between;
    }

    input,
    select {
      vertical-align: middle;
    }

    .input-add {
      width: 80%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none;
    }

    .div {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    .button-add {
      text-align: left;
      border: 2px solid #dc70fa;
      font-size: 12px;
      color: #dc70fa;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
      text-indent: initial;
      width: 100%;
      text-align: center;
    }

    tr {
      display: table-row;
      height: 50px;
    }

    th {
      display: table-cell;
      /* vertical-align: inherit; */
      font-weight: bold;
      text-align: -internal-center;
    }
  </style>
  <link rel="stylesheet" href="/Applications/MAMP/htdocs/Todolistpj/resources/css/style.css">
</head>


<body>
  <div class="container">
    <div class="card">
      <p class=title>Todo List</p>
      <div class="todo">
        <form action="/" method="POST" class="mb-30">
          @csrf
          <input type="text" name="content" class="input-add">
          <input class="button-add" type="submit" value="追加">
        </form>
        <table>
          <tbody>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


</body>

</html>