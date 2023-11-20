@extends('layouts.page', ['body_class' => 'location'])

@section('meta_title', 'Lokalizacja')
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Inwestor'])
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <p>FB Antczak jest wiodącym polskim deweloperem, generalnym wykonawcą oraz inwestorem na rynku nieruchomości. Grupa od 40 lat realizuje inwestycje mieszkaniowe, hotelowe, biurowe oraz logistyczno-przemysłowe. W sektorze deweloperskim Grupa zbudowała ponad 5 tys. mieszkań i domów. Wśród najważniejszych i najbardziej rozpoznawalnych na rynku inwestycji FB Antczak w sektorze biurowo-hotelowo-gastronomicznym znajdują się m.in. Garden Plaza w Warszawie, Calisia One wraz z hotelem Hampton by Hilton w Kaliszu oraz SQ Business Center we Wrocławiu.</p>
            <p>&nbsp;</p>
            <p>
                <img src="https://prowly-uploads.s3.eu-west-1.amazonaws.com/uploads/4981/assets/102542/original-382ca4f8ac1becd90948bd00e1ee4098.png" class="m-auto" alt="">
            </p>
            <p>&nbsp;</p>
            <h2 class="section-title">Deweloper</h2>
            <p>Baltic Wave Sp. z o.o.<br>Al. Jana Pawła II 29<br>00-867 Warszawa<br>NIP: 6711833128<br>REGON: 380797082</p>
        </div>
    </div>
</div>
@endsection