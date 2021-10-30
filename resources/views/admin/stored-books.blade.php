@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <div class="row justify-content-center">    
            <div class="col-12">
                <h3 class="text-center">Libros Almacenados en la Plataforma</h3>
            </div>
            {{ $books->links() }}
            @foreach ($books as $item)
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 my-5">
                <div class="book card bg-primary text-white mb-3">
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
                    <form action="{{ route('admin.delete', $item) }}" method="post">
                        @csrf @method('DELETE')
                        <input type="submit" class="btn btn-block btn-danger rounded-1" value="Eiminar de la biblioteca">
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection