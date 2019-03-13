<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>

@include('includes.nav')

<div class="container-fluid">
    <div class="row">
        @include('includes.sidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @yield('content')
        </main>
    </div>
</div>


@include('includes.jsfooter')
@include('includes.footer')
</body>
</html>