<!doctype html>
<html lang="en">

@include('head')

<!-- START body -->
<body style="background-color: #4d4d4d !important">

    @include('nav')

    <!-- START main -->
    <main role="main" class="container">
      @yield('body')
    </main>
    <!-- END main -->

    @include('footer')

</body> <!-- END Body -->
</html>
