<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @include('part.link')
  </head>
  <body style="height: 100%">
    <section class="vh-100" style="background-image:url('img/background.jpg');background-size:cover;" >
        @include('layout.navbar-2')
        @yield('content')
    </section>
    @yield('content-2')
    @include('layout.footer')
    @include('part.script')
  </body>
</html>
