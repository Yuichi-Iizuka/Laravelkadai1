@extends('layouts.layout')

@section('title','ユーザー登録')

<!-- ログイン画面に遷移するボタン -->
@section('menubar')
<a href="{{action('\App\Http\Controllers\LoginController@index')}}">ログイン</a>
@endsection

@section('content')
<!-- ユーザーの登録情報を入力するフォーム -->
<form method="POST" action="#">
  @csrf 
  <p>UserName:<input type="text" name="username"></p><br>
  <p>Email:<input type="text" name="email"></p><br>
  <p>Password:<input type="password" name="password"></p><br>
  <p><input type="submit" value="登録"></p>

</form>
@endsection


@section('footer')

@endsection