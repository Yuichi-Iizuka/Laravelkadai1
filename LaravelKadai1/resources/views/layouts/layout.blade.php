<!DOCTYPE html>
<!-- 親レイアウト -->
<html>

<head>
  <title>@yield('title')</title>

</head>
<a href="{{action('LoginController@index')}}">ログイン</a>
<a href="{{action('RegisterController@index')}}">ユーザ登録</a>

<body>
  <h1>@yield('title')</h1>
 
@yield('content')

</body>

</html>