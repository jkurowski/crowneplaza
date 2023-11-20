@extends('layouts.page', ['body_class' => 'investment no-bottom'])

@section('meta_title', 'Lokalizacja')
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'O inwestycji'])
@stop

@section('content')
<section class="pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center section-title">Zostań właścicielem luksusowego apartamentu hotelowego w mieście miliona turystów!</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <p class="text-center"><b>Baltic Wave będzie jednym z najwyższych i najbardziej luksusowych budynków w Kołobrzegu oraz jednym z nielicznych obiektów z basenem infinity edge w Polsce.</b></p>
                <p>&nbsp;</p>
                <p>Ten wyjątkowy wśród nadmorskich inwestycji projekt łączący w sobie wspaniałą lokalizację, nowoczesną architekturę oraz szereg udogodnień zwiększających potencjalny zysk z inwestycji. Z powodu niewielu dostępnych działek inwestycyjnych w okolicy, obiekt Baltic Wave daje jedną z ostatnich szans na zakup nowego apartamentu w tak atrakcyjnym miejscu w Kołobrzegu.</p>
            </div>
        </div>
    </div>
</section>

<section class="p-0">
    <div class="container-fluid right-left">
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('uploads/boom-3.jpg') }}" alt="" class="w-100 border-img">
            </div>
            <div class="col-6 d-flex align-items-center">
                <div class="right-left-text">
                    <p class="big">JAK DBAMY O WŁAŚCICIELI</p>
                    <h2 class="section-title">Najwyższy standard</h2>
                    <p>Baltic Wave zaoferuje gamę niepowtarzalnych, wysokiej klasy udogodnień. Właściciele i goście apartamentów będą mogli korzystać m.in. z luksusowej strefy SPA & wellness, zażywać kąpieli w unikalnym basenie panoramicznym z widokiem na morze czy rozkoszować się wyśmienitą kolacją w eleganckiej restauracji na terenie kompleksu lub kawą w naszej kawiarni widokowej. W hotelu znajdzie się również nowoczesna, profesjonalna przestrzeń konferencyjna na 500 osób, która uatrakcyjni ofertę obiektu.</p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <p>Każdy apartament zostanie zaprojektowany przez renomowaną, warszawską pracownię Piotr Płaskowicki & Partnerzy Architekci. Przyszli właściciele mają z czego wybierać – w ofercie dostępnych jest ponad 476 lokali o powierzchniach od 29 do 130 m² z balkonami lub tarasami do 80 m². Aż 6 kondygnacji spośród czternastu będzie miało widok na morze!</p>
            </div>
        </div>
    </div>
</section>

<section class="p-0">
    <img src="{{ asset('/uploads/mapa-lokalizacji.jpg') }}" alt="" class="w-100">
</section>
@endsection