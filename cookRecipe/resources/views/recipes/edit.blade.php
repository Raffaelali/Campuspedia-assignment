@extends('layouts.main')

@section('title','Make Recipes')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('css/landingPage/LP.css') }}">
    <link rel="stylesheet" href="{{ asset('css/editPage/EP.css') }}">
@endsection

@section('content')
<main class="bg-light">
    <section class="py-5 bg-light">
        <div class="container" style="padding-left:2.5%;">
            <div class="row mb-5 pb-2">
                <div class="col-5 mt-5 image-container" id="imageContainer">
                    <img class="img-fluid w-100 theImage" src="{{ asset('images/' . $recipe->image) }}" alt="Image">
                </div>
                <div class="col mt-5">
                    <div class="col-12 edit-form">
                        <form action="{{ route('Recipes.store') }}" method="POST" enctype="multipart/form-data" id="coba">
                            @method('patch')
                            @csrf
                            <input type="text" name="judul" value="{{$recipe->judul}}" class="lp-bigFont bg-light">
                            <input type="text" name="subjudul" value="{{$recipe->subjudul}}" class="lp-medFont bg-light"><br>
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <textarea  name="text_recipe" rows="20" cols="51" class="lp-font bg-light">{!! $recipe->text_recipe !!}</textarea>
                        </div>
                    </div>
                    <input type="file" name="image" id="inpFile">
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn-lg btn-primary CP-button">Make Recipe</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection

@section('customScript')
    <script src="{{ asset('js/editPage/EP.js') }}"></script>
@endsection