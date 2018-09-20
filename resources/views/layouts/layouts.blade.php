<html>

  @include('layouts._head')

  <body>

    @include('layouts._nav')

    <main class="py-4">
        @yield('content')
    </main>

    @include('layouts._footer')
  </body>
</html>
