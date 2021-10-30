@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <div class="row justify-content-center">
            
            <div class="col-12">
                <h3 class="text-center">Cine</h3>
            </div>
            @foreach ($arr1 as $item)
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 my-5">
                <form action="/addbook" method="POST" class="book card bg-primary text-white mb-3">
                    @csrf
                    <h3 class="card-header">{{$item['title']}}</h3>
                    <input type="text" name="title" value="{{$item['title']}}" class="d-none">
                    <div class="card-body">
                        <h5 class="card-title">Editor: {{$item['publisher']}}</h5>
                        <input type="text" name="publisher" value="{{$item['publisher']}}" class="d-none">

                        <h5 class="card-title">Categoría: {{$item['categories'][0]['name']}}</h5>
                        <input type="text" name="category" value="{{$item['categories'][0]['name']}}" class="d-none">

                        <h6 class="card-subtitle text-muted">Fecha de Publicación: {{$item['publisher_date']}}</h6>
                        <input type="text" name="publication_date" value="{{$item['publisher_date']}}" class="d-none">
                    </div>
                    <div class="img-box">
                        <img src="{{$item['cover']}}" class="img-fluid">
                        <input type="text" name="img_big" value="{{$item['cover']}}" class="d-none">
                        <input type="text" name="img_small" value="{{$item['thumbnail']}}" class="d-none">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lenguaje: {{$item['language']}}</p>
                        <input type="text" name="language" value="{{$item['language']}}" class="d-none">

                        <p class="card-text">{{$item['content_short']}}</p>
                        <input type="text" name="content" value="{{$item['content']}}" class="d-none">
                        <input type="text" name="content_short" value="{{$item['content_short']}}" class="d-none">

                        <p class="card-text mb-0">Páginas: {{$item['pages']}}</p>
                        <input type="text" name="page_nums" value="{{$item['pages']}}" class="d-none">

                        <input type="text" name="url_details" value="{{$item['url_details']}}" class="d-none">
                        <input type="text" name="url_download" value="{{$item['url_download']}}" class="d-none">
                    </div>
                    <div class="card-footer text-muted">
                        Autor: {{$item['author']}}
                        <input type="text" name="author" value="{{$item['author']}}" class="d-none">
                    </div>
                    <div class="mt-2">
                        <input type="submit" value="Agregar a la biblioteca" class="btn btn-block btn-warning">
                    </div>
                </form>
            </div>
            @endforeach
            
            <div class="col-12">
                <h3 class="text-center">Marketing y Negocios</h3>
            </div>
            @foreach ($arr2 as $item)
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 my-5">
                <form action="/addbook" method="POST" class="book card bg-primary text-white mb-3">
                    @csrf
                    <h3 class="card-header">{{$item['title']}}</h3>
                    <input type="text" name="title" value="{{$item['title']}}" class="d-none">
                    <div class="card-body">
                        <h5 class="card-title">Editor: {{$item['publisher']}}</h5>
                        <input type="text" name="publisher" value="{{$item['publisher']}}" class="d-none">

                        <h5 class="card-title">Categoría: {{$item['categories'][0]['name']}}</h5>
                        <input type="text" name="category" value="{{$item['categories'][0]['name']}}" class="d-none">

                        <h6 class="card-subtitle text-muted">Fecha de Publicación: {{$item['publisher_date']}}</h6>
                        <input type="text" name="publication_date" value="{{$item['publisher_date']}}" class="d-none">
                    </div>
                    <div class="img-box">
                        <img src="{{$item['cover']}}" class="img-fluid">
                        <input type="text" name="img_big" value="{{$item['cover']}}" class="d-none">
                        <input type="text" name="img_small" value="{{$item['thumbnail']}}" class="d-none">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lenguaje: {{$item['language']}}</p>
                        <input type="text" name="language" value="{{$item['language']}}" class="d-none">

                        <p class="card-text">{{$item['content_short']}}</p>
                        <input type="text" name="content" value="{{$item['content']}}" class="d-none">
                        <input type="text" name="content_short" value="{{$item['content_short']}}" class="d-none">

                        <p class="card-text mb-0">Páginas: {{$item['pages']}}</p>
                        <input type="text" name="page_nums" value="{{$item['pages']}}" class="d-none">

                        <input type="text" name="url_details" value="{{$item['url_details']}}" class="d-none">
                        <input type="text" name="url_download" value="{{$item['url_download']}}" class="d-none">
                    </div>
                    <div class="card-footer text-muted">
                        Autor: {{$item['author']}}
                        <input type="text" name="author" value="{{$item['author']}}" class="d-none">
                    </div>
                    <div class="mt-2">
                        <input type="submit" value="Agregar a la biblioteca" class="btn btn-block btn-warning">
                    </div>
                </form>
            </div>
            @endforeach
            
            <div class="col-12">
                <h3 class="text-center">Educación</h3>
            </div>
            @foreach ($arr3 as $item)
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 my-5">
                <form action="/addbook" method="POST" class="book card bg-primary text-white mb-3">
                    @csrf
                    <h3 class="card-header">{{$item['title']}}</h3>
                    <input type="text" name="title" value="{{$item['title']}}" class="d-none">
                    <div class="card-body">
                        <h5 class="card-title">Editor: {{$item['publisher']}}</h5>
                        <input type="text" name="publisher" value="{{$item['publisher']}}" class="d-none">

                        <h5 class="card-title">Categoría: {{$item['categories'][0]['name']}}</h5>
                        <input type="text" name="category" value="{{$item['categories'][0]['name']}}" class="d-none">

                        <h6 class="card-subtitle text-muted">Fecha de Publicación: {{$item['publisher_date']}}</h6>
                        <input type="text" name="publication_date" value="{{$item['publisher_date']}}" class="d-none">
                    </div>
                    <div class="img-box">
                        <img src="{{$item['cover']}}" class="img-fluid">
                        <input type="text" name="img_big" value="{{$item['cover']}}" class="d-none">
                        <input type="text" name="img_small" value="{{$item['thumbnail']}}" class="d-none">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lenguaje: {{$item['language']}}</p>
                        <input type="text" name="language" value="{{$item['language']}}" class="d-none">

                        <p class="card-text">{{$item['content_short']}}</p>
                        <input type="text" name="content" value="{{$item['content']}}" class="d-none">
                        <input type="text" name="content_short" value="{{$item['content_short']}}" class="d-none">

                        <p class="card-text mb-0">Páginas: {{$item['pages']}}</p>
                        <input type="text" name="page_nums" value="{{$item['pages']}}" class="d-none">

                        <input type="text" name="url_details" value="{{$item['url_details']}}" class="d-none">
                        <input type="text" name="url_download" value="{{$item['url_download']}}" class="d-none">
                    </div>
                    <div class="card-footer text-muted">
                        Autor: {{$item['author']}}
                        <input type="text" name="author" value="{{$item['author']}}" class="d-none">
                    </div>
                    <div class="mt-2">
                        <input type="submit" value="Agregar a la biblioteca" class="btn btn-block btn-warning">
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </div>
@endsection