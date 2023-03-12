@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }

  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'find.blade.php')

@section('content')
<form action="find" method="POST">
  @csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="見つける">
</form>
@if (@isset($todo))
<table>
  <tr>
    <th>id</th>
    <th>content</th>
    <th>edit</th>
    <th>delete</th>
  </tr>
  <tr>
    <td>{{$todos->id}}</td>
    <td>{{$todos->name}}</td>
    <td>{{$todos->edit}}</td>
    <td>{{$todos->delete}}</td>
  </tr>
</table>
@endif
@endsection