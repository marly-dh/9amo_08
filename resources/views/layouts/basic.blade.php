<html>
@include('partials.header')
<body>
@section('sidebar')
    This is the master sidebar
@show

<div class="container">
    @yield('content')
</div>

</body>
</html>
