@extends('layouts.main')

@section('title','Recipes')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('css/landingPage/LP.css') }}">
@endsection

@section('content')
    <main class="bg-light">
        <section class="py-5 bg-light">
            <div class="container" style="padding-left:2.5%;">
                <div class="row mb-5 pb-5">
                    <div class="col-5 mt-5">
                        <img class="img-fluid w-100" src="{{ asset('images/'. $recipe->image) }}" alt="">
                    </div>
                    <div class="col mt-5">
                        <div class="col-12 ">
                            <h2 class="lp-bigFont mb-4">{{$recipe->judul}}</h2>
                            <h2 class="text-muted mb-3">{{$recipe->subjudul}}</h2>
                            <p class="lp-font">{!!nl2br($recipe->text_recipe)!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection