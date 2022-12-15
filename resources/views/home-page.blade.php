@extends('layouts.app')
@section('content')
    <!-- section  bg imgage -->

    <!--section card -->
    <section class="bg-black p-3 text-center">
        <div class="container d-flex flex-wrap ">
            <div class='row mt-5'>


                @foreach ($comics as $comic)
                    <div class="card col-2 p-3 bg-black text-white">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <h3 class="card-title h5 mt-2  text-left"> {{ $comic['title'] }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
        <button class="btn btn-primary text-white px-5">Load More</button>


        </div>
        </div>
    </section>
    <section id="blue">
        <div class="container d-flex justify-content-between p-5">
            <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
            <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
            <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
            <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="">
        </div>
    </section>
@endsection
