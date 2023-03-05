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
        <table>
          <tbody>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
      </div>
    </div>
  </div>

  @if($todos->isNotEmpty())
  @foreach ($todos as $item)
  <div class="1">


    <tr>
      <td class="2">
        <div>
          {{ $item->name}}
        </div>
      </td>
      <td>
        <div class="textbox">
          <form action="/edit{{$item->content}}" method="get"></form>
          </td>
        </div>
        <td class="eb">
          <div>
            <a href="/edit{{ $item->content }}" class="edit">
              <button class="button_edit">更新</button>
            </a>
          </div>
        </td>
        <td>
          <div class="db">
            <form action="/dalete/{{ $item->id }}" method="post" class="delete" role="menuitem" tabindex="-1">
              @csrf
              @method('DELETE')
              <button type="submit" class="button_delete">削除</button>
            </form>
          </div>
        </td>
    </tr>
  </div>
  @endforeach
  </tbody>
  </table>
  @endif



</body>

</html>