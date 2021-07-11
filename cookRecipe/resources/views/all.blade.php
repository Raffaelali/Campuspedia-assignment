@extends('layouts.main')

@section('title','Cook Recipe')

@section('customCSS')
<link rel="stylesheet" href="{{ asset('css/landingPage/LP.css') }}">
@endsection

@section('content')
<main class="bg-light">
    <section class="pt-5 pb-5 bg-light">
        <div class="container pt-5" style="padding-left:2.5%;">
            <h1 class="mb-3 lp-bigFont text-center">Have a taste of the recipes</h1>
            <h2 class="mb-3 lp-medFont text-center">From great chef all over the world</h2>
            <div class="row pt-5">
                @foreach($recipes as $recipe)
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
</main>
@endsection

@section('customScript')

@endsection