<!DOCTYPE html>
<!-- 親レイアウト -->
<html>

<head>
  <title>@yield('title')</title>

</head>

<body>
  <h1>@yield('title')</h1>
  @yield('menubar')

  @yield('content')

  @yield('footer')

</body>

</html>