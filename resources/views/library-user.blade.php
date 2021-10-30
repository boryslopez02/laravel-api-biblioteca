@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <div class="row justify-content-center">

            {{ $books->links() }}

            @foreach ($books as $item)
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 my-5">
                <form action="{{ route('orderedbook', $item) }}" method="POST" class="book card bg-primary text-white mb-3">
                    @csrf
                    <input type="text" name="id" class="d-none" value="{{$item['id']}}">
                    <h3 class="card-header">{{$item['title']}}</h3>
                    <div class="card-body">
                        <h5 class="card-title">Editor: {{$item['publisher']}}</h5>
                        <h5 class="card-title">Categoría: {{$item['category']}}</h5>
                        <h6 class="card-subtitle text-muted">Fecha de Publicación: {{$item['publication_date']}}</h6>
                    </div>
                    <div class="img-box">
                        <img src="{{$item['img_big']}}" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lenguaje: {{$item['language']}}</p>
                        <p class="card-text">{{$item['content_short']}}</p>
                        <p class="card-text mb-0">Páginas: {{$item['page_nums']}}</p>
                    </div>
                    <div class="card-footer text-muted">
                        Autor: {{$item['author']}}
                    </div>
                    <div class="mt-2">
                        <input type="submit" value="Agregar a mi biblioteca" class="btn btn-block btn-success">
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </div>
@endsection