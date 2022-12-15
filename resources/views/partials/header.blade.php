<?php
$links = config('navbarlinks');
?>
<div class="bg-primary   flex-end ">
    <div class="container">
        <ul class=" text-white d-flex list-unstyled">
            <li class="me-3">DC POWER ^SM VISA &copy;</li>
            <li>Additional dc site</li>
        </ul>
    </div>

</div>
<header class="bg-white container d-flex align-items-center">
    <div>

        <a href="{{ route('home-page') }}"><img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
        </a>
    </div>
    <nav class="navbar-nav container ">
        <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
            @foreach ($links as $link)
                <li class="{{ Route::currentRouteName() == $link['text'] ? 'active' : '' }}"><a
                        :href="{{ $link['url'] }}">{{ $link['text'] }}</a></li>
            @endforeach

        </ul>
    </nav>


</header>
