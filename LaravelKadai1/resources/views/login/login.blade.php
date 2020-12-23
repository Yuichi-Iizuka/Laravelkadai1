@extends('layouts.layout')

@section('title','ログイン')

<!-- 登録画面に遷移するボタン -->
@section('menubar')
<a href="{{action('\App\Http\Controllers\RegisterController@index')}}">ユーザ登録</a>
@endsection


@section('content')
<!-- ログイン情報入力フォーム -->
<form method="POST" action="#">
  @csrf
  <p>Email:<input type="text" name="email"></p><br>
  <p>Password:<input type="password" name="password"></p><br>
  <p><input type="submit" value="ログイン"></p>

</form>
@endsection

@section('footer')

@endsection