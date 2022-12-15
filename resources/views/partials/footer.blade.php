<?php
$lists = config('menufooter');
?>
<div>
    <div id="primofoo" class="d-flex ">
        <div class="container d-flex ">

            <div class="liste ">
                <div class="d-flex">

                    @foreach ($lists as $list)
                        <div class="d-flex align-items-center ">
                            <div class="d-flex  align-items-center">

                                <h4 class="text-white aling-items-start">{{ $list['title'] }}</h4>
                                <ul class=" list-unstyled">
                                    @foreach ($list['links'] as $lis)
                                        <li class="me-1  "><a class="text-secondary"
                                                href="{{ $lis['url'] }} ">{{ $lis['text'] }} </a>
                                        </li>
                                    @endforeach
                                </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="img">
    <img src={{ Vite::asset('resources/images/dc-logo-bg.png') }} alt="">
</div>
</div>
</div>
<div id="secondofoo">
</div>
</div>
