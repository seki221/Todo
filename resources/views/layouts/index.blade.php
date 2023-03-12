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
              @foreach ($todos as $todo)
              <tr>
                <td>{{$todo->created_at}}</td>
                <td>
                  <input type="text" name="task" class="input-update" value={{$todo->content}}>
                  
                </td>

                <td class="eb">
                  <div>
                    <form action="/edit" method="edit">
                      @csrf
                      <a href="/edit" class="edit">
                        <button class="button_edit">更新</button>
                        @method('PUT')
                    </form>
                    </a>
                  </div>
                </td>
                <td>
                  <div class="db">
                    <form action="/dalete" method="delete" class="delete" role="menuitem" tabindex="-1">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="button_delete">削除</button>
                    </form>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>





</body>

</html>