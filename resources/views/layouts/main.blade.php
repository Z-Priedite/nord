<!DOCTYPE html>
<html lang="lv">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <meta name="description" content="This page is about design and construction of energy efficient wooden houses">
  <meta name="author" content="Zane Priedite">
  <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon" sizes="16x16">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
  @yield('links_project')
  @yield('links_contact')
  <link href="/css/app.css" rel="stylesheet">
</head>

<body>
  @include('partials.navigation_1')
  @yield('content')
  @yield('script_project')
  @yield('script_contact')
  <script src="js/web.js"></script>
</body>

</html>