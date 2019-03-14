<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
<header id="header" class="header">
	@include('includes.nav')
<header>

<section class="container-fluid">
    <div class="row">
        @include('includes.sidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @yield('content')
        </main>
    </div>
</section>

<footer id="footer" class="footer">
	@include('includes.jsfooter')
	@include('includes.footer')
</footer>
</body>
</html>