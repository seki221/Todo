@extends('layouts.index')
@section('content')
@foreach ($todos as $todo)
<div class="container">
  <tr>
    <td class="2">
      <div>
        <form action="/add{{$todo -> $todos}}" method="get" class="date">
          <input type="datetime" value="<?php echo date('Y-m-d H:m:s'); ?>">
          @method('date_add')
        </form>
      </div>
    </td>
    <td>
      <div class="textbox_edit">
        <form action="/update{{$todo -> $todos}}" method="post">
          @csrf
          @method('creat')
          <input type="text" name="content" class="edit_flame">
        </form>
      </div>
    </td>

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
</div>
@endforeach
@endsection