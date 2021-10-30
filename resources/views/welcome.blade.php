@extends('layouts.app')

@section('content')

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/slider/1.jpg') }}" class="d-block" alt="">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Cine</h5>
                        <p>La consideración del Cine como arte, medio expresivo capaz de ofrecer una estética propia tras la que se condensan éticas e ideologías, ha obligado a analizar y explicar sus elementos sustanciales partiendo de lo fílmico en concreto o de lo cinematográfico en sus múltiples implicaciones. Aqui encontrarás una gran variedad de libros relacionados a esta area.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/slider/2.jpg') }}" class="d-block" alt="...">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Marketing y Negocios</h5>
                        <p>Recurso, consejos y materiales de apoyo para Emprendedores, durante el cual se comparten conceptos teóricos sobre como se hace para empezar con un emprendimiento comercial y se trabaja grupalmente con las experiencias, dudas, conflictos y logros de los participantes.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/slider/3.jpg') }}" class="d-block" alt="...">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Educación</h5>
                        <p>La enseñanza en línea puede volverse abrumadora rápidamente. Encontrar formas de ofrecer apoyo, aprendizaje y retroalimentación detallados y de calidad, pero a través de métodos eficientes y que ahorran tiempo, significará un aprendizaje de mayor calidad por menos tiempo de instrucción.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/slider/4.jpg') }}" class="d-block" alt="...">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Arte</h5>
                        <p>Publicaciones de artistas que son concebidas desde un principio como obras de arte. Pueden ser libros autopublicados o producidos por imprentas individuales o realizados por grupos de artistas, usualmente en ediciones limitadas, pudiendo incluso llegar a ser piezas únicas.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3 class="text-center">ULTIMAS NOVEDADES</h3>
            </div>

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
                    <a href="{{ route('orderedbook', $item) }}" class="btn btn-success rounded-1">Añadir a mi biblioteca</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    <div class="footer py-5 bg-primary">
        <p class="text-muted text-center text-white">&copy; 2021 Todos los derechos reservados.</p>
    </div>
@endsection