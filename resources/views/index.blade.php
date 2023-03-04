<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>



  <link rel="stylesheet" href="{{asset('/css/index.css')}}">
  <link rel="stylesheet" href="{{asset('/public/css/reset.css')}}">


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

  <form action="/{{$todos -> id }}" method="post" class="inline-block text-gray-500 font-medium" role="menuitem" tabindex="０">
    @csrf
    @method('PUT')

    <input type="hidden" name="status" value="{{$todos->status}}">


    <button type="submit" class="add_button">追加</button>
  </form>





</body>

</html>