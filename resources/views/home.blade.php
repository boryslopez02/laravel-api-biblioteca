@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
        @foreach ($listbooks as $item)
            @foreach ($item as $book)
                <div class="col-12 col-sm-10 col-md-6 col-lg-4 my-5">
                    <div class="book card bg-primary text-white mb-3">
                        <h3 class="card-header">{{$book['title']}}</h3>
                        <div class="card-body">
                            <h5 class="card-title">Editor: {{$book['publisher']}}</h5>
    
                            <h5 class="card-title">Categoría: {{$book['category']}}</h5>
    
                            <h6 class="card-subtitle text-muted">Fecha de Publicación: {{$book['publication_date']}}</h6>
                        </div>
                        <div class="img-box">
                            <img src="{{$book['img_big']}}" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lenguaje: {{$book['language']}}</p>
    
                            <p class="card-text">{{$book['content_short']}}</p>
    
                            <p class="card-text mb-0">Páginas: {{$book['page_nums']}}</p>
    
                        </div>
                        <div class="card-footer text-muted">
                            Autor: {{$book['author']}}
                        </div>
                        <form action="{{ route('user.delete', $book) }}" method="post">
                            @csrf @method('DELETE')
                            <input type="submit" class="btn btn-block btn-danger btn-delete rounded-1" value="Eiminar">
                        </form>
                        <a href="{{ route('show', $book) }}" class="btn btn-info btn-read">Leer Más</a>
                    </div>
                </div>
            @endforeach
        @endforeach
           
        </div>
    </div>
@endsection
