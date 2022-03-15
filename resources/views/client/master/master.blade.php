<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title',config('app.name','@Master Layout'))</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    @yield('css')

</head>
<body>
    @yield('header')

    <main id="main">

        @yield('content')

        @yield('about')

        @yield('counts')

        @yield('nervous')

        @yield('cta')

        @yield('promise')

        @yield('reason')

        @yield('services')

        @yield('portfolio')

        @yield('feedback')

        @yield('team')

        @yield('contact')
    </main>

    @yield('footer')

    @yield('js')

</body>
</html>
