
@section('content')

<div class="container">
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
        <td>{{$todo->id}}</id>
        <td>{{$todo->content}}</td>
        <td class="eb">
          <div>
            <a href="/edit{{ $todo->content }}" class="edit">
              <button class="button_edit">更新</button>
            </a>
          </div>
        </td>
        <td>
          <div class="db">
            <form action="/dalete/{{ $todo->id }}" method="post" class="delete" role="menuitem" tabindex="-1">
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
@endsection