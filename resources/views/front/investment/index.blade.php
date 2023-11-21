@extends('layouts.page', ['body_class' => 'investment no-bottom'])

@section('meta_title', 'O inwestycji')
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

<section class="pt-0">
    <div class="oinwestycji-ikonki">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-3 col-lg-4"></div>
                <div class="col-6 col-lg-4">
                    <img src="https://hotelbalticwave.pl/files/inline/inwest-1.png" alt="">
                    <h3>Budynek realizowany w standardzie 5 gwiazdkowym</h3>

                </div>
                <div class="col-3 col-lg-4"></div>

                <div class="col-6 col-lg-4">
                    <img src="https://hotelbalticwave.pl/files/inline/inwest-5.png" alt="">
                    <h3>Bezobsługowa umowa zarządzania apartamentem i oszczędność czasu</h3>

                </div>
                <div class="col-6 col-lg-4">
                    <img src="https://hotelbalticwave.pl/files/inline/inwest-7.png" alt="">
                    <h3>Nowoczesny projekt z wyjątkową infrastrukturą</h3>

                </div>
                <div class="col-6 col-lg-4">
                    <img src="https://hotelbalticwave.pl/files/inline/inwest-6.png" alt="">
                    <h3>Lokalizacja blisko morza i parków, w sercu dzielnicy uzdrowiskowe</h3>

                </div>
                <div class="col-6 col-lg-4">
                    <img src="https://hotelbalticwave.pl/files/inline/inwest-4.png" alt="">
                    <h3>Długie pobyty właścicielskie</h3>

                </div>
                <div class="col-6 col-lg-4">
                    <img src="https://hotelbalticwave.pl/files/inline/inwest-3.png" alt="">
                    <h3>Wykończenie i wyposażenie pod klucz</h3>

                </div>
                <div class="col-6 col-lg-4">
                    <img src="https://hotelbalticwave.pl/files/inline/inwest-2.png" alt="">
                    <h3>Lokal z odrębną księgą wieczystą</h3>

                </div>
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

<section class="pt-0">
    <div class="main-lista container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-xl-4">
                <h5>Panoramiczny basen infinity edge z widokiem <br>na morze</h5>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <h5>VIP Spa &amp; Wellness z opcją rezerwacji przestrzeni tylko dla siebie</h5>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <h5>Centrum konferencyjno-biznesowe na co najmniej 500 osób</h5>
            </div>

            <div class="col-12 col-md-6 col-xl-4">
                <h5>Baseny zadaszone, <br>w tym solankowe jaccuzi</h5>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <h5>Groty solne, sauny, zaplecze do fizjoterapii</h5>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <h5>Dwupoziomowy garaż podziemny</h5>
            </div>

            <div class="col-12 col-md-6 col-xl-4">
                <h5>Kawiarnia widokowa <br>&amp; bar</h5>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <h5>Restauracje, <br>w tym à la carte</h5>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <h5>Strefa zabaw <br>dla dzieci</h5>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark-blue">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wybor">
                    <p class="big text-center">NASZA OFERTA</p>
                    <h2 class="section-title text-center">Dostępne rodzaje apartamentów</h2>
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