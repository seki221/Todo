@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }

  tr:nth-child(odd) td {
    background-color: #FFFFFF;
  }

  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }

  button {
    padding: 10px 20px;
    background-color: #289ADC;
    border: none;
    color: white;
  }
</style>
@section('title', 'add.blade.php')

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif
<form action="/add" method="get">
  <table>
    @csrf
    <tr>
      <th>cleated_at</th>
      <td><input type="text" name="cleated_at"></td>
    </tr>
    <tr>
      <th>content</th>
      <td><input type="textbox" name="content"></td>
    </tr>
    <tr>
      <th></th>
      <td><button>更新</button></td>
    </tr>
  </table>
</form>
@endsection