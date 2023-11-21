@extends('layouts.page', ['body_class' => 'gallery'])

@section('meta_title', 'Galeria')
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Galeria'])
@stop

@section('content')
    <div id="gallery-list" class="container">
        <div class="row">
            <div class="col-12 col-sm-7 col-news-list-thumb">
                <a href="#" title="Wizualizacje">
                    <div class="image">
                        <img src="https://hotelbalticwave.pl/files/galeria/katalog/przykladowa-galeria_031220191300.c1.jpg" alt="Wizualizacje" class="w-100">
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-5 d-flex align-items-center justify-content-center">
                <div class="list-gallery-content inner-column">
                    <a href="#" title="Wizualizacje">
                        <h2 class="list-gallery-title section-title">Wizualizacje</h2>
                        <div class="list-gallery-entry">
                            <p>Wizualizacje inwestycji Baltic Wave w Kołobrzegu.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row flex-row-reverse">
            <div class="col-12 col-sm-7 col-news-list-thumb">
                <a href="" title="Postęp prac budowlanych">
                    <div class="image">
                        <img src="https://hotelbalticwave.pl/files/galeria/katalog/postep-budowy_080120201829.dji_0022-hdr.jpg" alt="Postęp prac budowlanych" class="w-100">
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-5 d-flex align-items-center justify-content-center">
                <div class="list-gallery-content inner-column">
                    <a href="#" title="Postęp prac budowlanych">
                        <h2 class="list-gallery-title section-title">Postęp prac budowlanych</h2>
                        <div class="list-gallery-entry">
                            <p>W tym miejscu moga Pańswto śledzić aktualny postęp budowy.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection