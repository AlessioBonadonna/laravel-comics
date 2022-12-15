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
        <button class="btn btn-primary text-white">LoadMore</button>


        </div>
        </div>
    </section>
@endsection
