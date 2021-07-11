@extends('layouts.main')

@section('title','Cook Recipe')

@section('customCSS')
<link rel="stylesheet" href="{{ asset('css/landingPage/LP.css') }}">
@endsection

@section('content')
<main class="bg-light">
    <section class="py-5 bg-light">
        <div class="container" style="padding-left:2.5%;">
            <div class="row mb-5 pb-5">
                <div class="col mt-5">
                    <div class="col-7">
                        <h2 class="text-muted">Hai, selamat datang di</h2>
                        <h2 class="lp-bigFont">Test and Gather Feedback</h2>
                        <p class="lp-font">Present interactions and gather feedback with smart animations and dynamic overlays that bring your designs to life.</p>
                        <img class="img-fluid w-100" src="{{ asset('images/Hangout.svg') }}" alt="">
                    </div>
                </div>
                <div class="col-5 mt-5">
                    <img class="img-fluid w-100" src="{{asset('images/food1.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-2 bg-light">
        <div class="container" style="padding-left:2.5%;">
            <h1 class="mb-3 lp-bigFont text-center">Have a taste of new recipes</h1>
            <div class="row">
                @foreach ($recipes as $recipe)
                    <div class="col-4 mt-5">
                        <div class="card lp-card rounded">
                            <img src="{{ asset('images/' . $recipe->image) }}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body bg-light">
                                <h5 class="card-title lp-medFont">{{$recipe->judul}}</h5>
                                <p class="card-text lp-font pop">{{$recipe->subjudul}}</p>
                                <a href="{{ route('Recipes.show', $recipe->id) }}" class="card-link">Go to Recipe</a>
                            </div>
                        </div>                    
                    </div>
                @endforeach
        </div>
    </section>

    <section class="py-5">
        <div class="container pb-5" style="padding-left:2.5%;">
            <button type="button" class="btn-lg btn-outline-primary btn-rounded pl-medFont">
                More Recipe
            </button>
        </div>
    </section>
</main>
@endsection

@section('customScript')

@endsection