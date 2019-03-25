<header class="masthead mb-auto text-center">
    <div class="inner">
        <h3 class="masthead-brand"><i class="fa fa-universal-access" aria-hidden="true"></i>&nbsp;Web App </h3>
        <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link {{(request()->is('/')) ? 'active' : '' }}" href="{{route('home')}}">Home</a>
            <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="{{route('contact')}}">Contact</a>
        </nav>
    </div>
</header>