<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<header class="header">
    <div class=""container">
    @include('includes.nav')
    </div>
</header>

<section id="main" class="container">
    <div class="row">

        @yield('content')

    </div>
</section>

<footer class="footer">
    <div class=""container">
    @include('includes.footer')
    </div>
</footer>
</body>
</html>