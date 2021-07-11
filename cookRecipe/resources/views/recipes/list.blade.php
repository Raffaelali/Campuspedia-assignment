@extends('layouts.main')

@section('title','List Recipe')

@section('customCSS')
    <link rel="stylesheet" href="{{ asset('css/landingPage/LP.css') }}">
@endsection

@section('content')
<main class="bg-light">
    <section class="py-5 bg-light">
        <div class="container pt-5" style="padding-left:2.5%">
            <h3>Recipe List</h3>
            <div class="row">
                <div class="col-lg-6">
                    {{-- AJAX --}}
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Recipe" name="keyword" id="keyword" aria-describedby="button-addon2" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="list-group">
                        @foreach ($recipes as $recipe)
                        <li class="list-group-item">
                            <h5 class="lp-font">{{$recipe->judul}}</h5>
                            <h5 class="lp-font text-muted">{{$recipe->subjudul}}</h5>
                            <div style="display:flex">
                                <a href="{{ route('Recipes.edit', $recipe->id) }}" class="btn btn-warning float-right ml-2">Edit Recipe</a>
                                    <form action="{{ route('Recipes.delete', $recipe->id)}}" method="POST" id="form-delete" class="mx-1">
                                        @method('delete')
                                        @csrf
                                        <button  type="submit" class="btn btn-danger float-right ml-2">Delete</button>
                                    </form>
                                <a href="{{ route('Recipes.show', $recipe->id) }}" class="btn btn-primary float-right ml-2">Detail</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
