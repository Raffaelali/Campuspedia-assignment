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
                        <input type="text" class="form-control" placeholder="Search Recipe" name="keyword" id="cari-recipe" aria-describedby="button-addon2" autocomplete="off">
                    </div>
                </form>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="list-group" id="the-recipes">
                        @foreach ($recipes as $recipe)
                        <li class="list-group-item" >
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

@section('customScript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#cari-recipe').on('keyup', function() {
                var input = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "{{route('Recipes.search')}}",
                    data: {
                        '_token' : '{{csrf_token()}}',
                        keyword: input
                    },
                    dataType: "JSON",
                    success: function (response) {
                        var result = '';
                        
                        const ul = document.getElementById('the-recipes');
                        ul.innerHTML = "";

                        $.each(response, function(index,value) {
                            result = '<li class="list-group-item" ><h5 class="lp-font">' + value.judul + '</h5><h5 class="lp-font text-muted">' + value.subjudul +'</h5><div style="display:flex"><a href="{{ route("Recipes.edit", $recipe->id) }}" class="btn btn-warning float-right ml-2">Edit Recipe</a><form action="{{ route("Recipes.delete",  $recipe->id )}}" method="POST" id="form-delete" class="mx-1">@method("delete")@csrf<button  type="submit" class="btn btn-danger float-right ml-2">Delete</button></form><a href="{{ route("Recipes.show", $recipe->id) }}" class="btn btn-primary float-right ml-2">Detail</a></div></li>'
                            $('#the-recipes').append(result);
                        });
                    }
                });
            });
        });
    </script>
@endsection