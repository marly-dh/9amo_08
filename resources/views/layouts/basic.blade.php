<html>
@include('partials.header')
<body>
<main style="min-height: 100vh">
    @section('sidebar')
        This is the master sidebar
    @show

    <div class="container">
        @yield('content')
    </div>
</main>

@include('partials.footer')
</body>
</html>
