@extends('layouts.layout')

@section('title','ログイン')

@section('content')
<!-- ログイン情報入力フォーム -->
<form method="POST" action="#">
  @csrf
  <p>Email:<input type="text" name="email"></p><br>
  <p>Password:<input type="password" name="password"></p><br>
  <p><input type="submit" value="ログイン"></p>

</form>
@endsection('content')