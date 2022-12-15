@extends('layouts.app')
@section('page-title', 'comics-singlepage')

@section('content')
    <div class="container">
        <img src="{{ $comics[0]['thumb'] }}" alt="">
    </div>
    <div class="container d-flex">
        <div class="desc col-6">
            <h2>{{ $comics[0]['title'] }}</h2>
            <div class="bg-success text-white d-flex justify-content-center justify-center p-3">
                <div class="col-9 primo-verde">U.S. Price <strong>{{ $comics[0]['price'] }}</strong></div>
                <div class="col-3">
                    Check Availability
                </div>
            </div>
            <div class="mt-3">
                <p>{{ $comics[0]['description'] }}</p>
            </div>
        </div>
        <div class="ms-5 mt-3">
            <img src="{{ Vite::asset('/resources/images/ioboh.jpg') }}" alt="">
        </div>

    </div>
    <div class="bg-light p-3">
        <div class="container d-flex">
            <div class="col-6">
                <div>
                    <h3>Talent</h3>
                    <div class="">
                        <div class="d-flex">
                            <div class="col-3 justify-content-center justify-center ">
                                <h4>Art by:</h4>
                            </div>
                            <div class="col-3 text-primary justify-content-center justify-center ms-2 ">
                                <p>
                                    @foreach ($comics[0]['artists'] as $arte)
                                        {{ $arte }} ,
                                    @endforeach

                                </p>
                            </div>

                        </div>
                        <div class="d-flex">
                            <div>
                                <h4>
                                    Written by:
                                </h4>
                            </div>
                            <div class="col-3 text-primary justify-content-center justify-center  ms-5">
                                @foreach ($comics[0]['writers'] as $write)
                                    {{ $write }} ,
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <h3>Specs</h3>
                    <div class="">
                        <div class="d-flex">
                            <div class="col-3  ">
                                <p>series</p>
                            </div>
                            <div class="text-primary">
                                <p>
                                    {{ $comics[0]['series'] }}

                                </p>
                            </div>

                        </div>

                        <div class="d-flex">
                            <div>
                                <p>
                                    US. PRIECE
                                </p>
                            </div>
                            <div class="col-3  justify-content-center justify-center  ms-5">
                                {{ $comics[0]['price'] }}
                            </div>

                        </div>
                        <div class="d-flex">
                            <div>
                                <p>
                                    on sale date:
                                </p>
                            </div>
                            <div class="col-3  justify-content-center justify-center  ms-5">
                                {{ $comics[0]['sale_date'] }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
