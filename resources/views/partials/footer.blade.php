<?php
$lists = config('menufooter');
?>
<div id="primofoo">
    <div class="container">
        <div class="liste d-flex">
            @foreach ($lists as $list)
                <div class="d-flex align-content-center ">
                    <div class="d-flex  align-content-center">

                        <h4 class="text-white aling-items-start">{{ $list['title'] }}</h4>
                        <ul class=" list-unstyled">
                            @foreach ($list['links'] as $lis)
                                <li class="me-1  "><a class="text-secondary"
                                        href="{{ $lis['url'] }} ">{{ $lis['text'] }} </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach

            <div class="img">
                <img src={{ Vite::asset('resources/images/dc-logo-bg.png') }} alt="">
            </div>
        </div>
    </div>
</div>
<div id="secondofoo" class="bg-dark text-white p-5">
    <div class="container d-flex justify-content-between ">
        <div>
            <button class="sign"> Sign-up now!</button>
        </div>
        <div class="social">

            <span class="me-3 text-uppercase text-primary fw-bold">Follow us</span>
            <img src={{ Vite::asset('resources/images/footer-facebook.png') }} alt="fb">
            <img src={{ Vite::asset('resources/images/footer-twitter.png') }} alt="twitter">
            <img src={{ Vite::asset('resources/images/footer-youtube.png') }} alt="yt">
            <img src={{ Vite::asset('resources/images/footer-pinterest.png') }} alt="pinterst">
            <img src={{ Vite::asset('resources/images/footer-periscope.png') }} alt="periscope">



        </div>
    </div>

</div>
</div>
