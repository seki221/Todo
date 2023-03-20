<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>



  <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('/css/index.css')}}">
</head>

<body>
  <div class="container">
    <div class="card">
      <p class=title>Todo List</p>
      <div class="todo">
        @if ($errors->has('content'))
        <tr>
          <th>
            <ul>
              <li>
                {{$errors->first('content')}}
              </li>
              <!-- <li>{{$errors->first('content20')}}</li> -->
            </ul>
          </th>
        </tr>
        @endif
        

        <form action="/add" method="post" class="mb-30">
          @csrf
          <input type="text" name="content" class="input-add">
          <input class="button-add" type="submit" value="追加">
        </form>
        <div class="todolist">
          <table>
            <tbody>
              <tr>
                <th>作成日</th>
                <th>タスク名</th>
                <th>更新</th>
                <th>削除</th>
              </tr>
              @include('task')
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</body>

</html>