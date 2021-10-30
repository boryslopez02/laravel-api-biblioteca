@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <div class="row justify-content-center">    
            <div class="col-12">
                <h3 class="text-center"></h3>
            </div>

            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 my-5 my-lg-0">
                <div class="book card bg-primary text-white mb-3">
                    <h3 class="card-header">{{$findbook['title']}}</h3>
                    <div class="card-body">
                        <h5 class="card-title">Editor: {{$findbook['publisher']}}</h5>

                        <h5 class="card-title">Categoría: {{$findbook['category']}}</h5>

                        <h6 class="card-subtitle text-muted">Fecha de Publicación: {{$findbook['publication_date']}}</h6>
                    </div>
                    <div class="img-box">
                        <img src="{{$findbook['img_big']}}" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lenguaje: {{$findbook['language']}}</p>

                        <p class="card-text">{{$findbook['content_short']}}</p>

                        <p class="card-text mb-0">Páginas: {{$findbook['page_nums']}}</p>

                    </div>
                    <div class="card-footer text-muted">
                        Autor: {{$findbook['author']}}
                    </div>
                </div>

                <div class="d-flex">
                    <a href="{{$findbook['url_details']}}" target="_blank" class="btn btn-info">Link Oficial</a>
                    <a href="{{$findbook['url_download']}}" target="_blank" class="btn btn-success">Descargar</a>
                </div>
            </div>
            
            <div class="col-12 col-sm-10 col-lg-6 col-xl-8 detailbook">
                <h3>{{$findbook['title']}}</h3>
                <p class="text-muted">Autor: {{$findbook['author']}}</p>
                <p class="lead">{{$findbook['content']}}</p>
                <a href="{{ route('home') }} " class="btn btn-dark mt-2">Volver al listado</a>
            </div>
        </div>
    </div>

@endsection