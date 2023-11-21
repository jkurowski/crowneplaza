@extends('layouts.page', ['body_class' => 'business'])

@section('meta_title', 'Model biznesowy')
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Model biznesowy'])
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="model-step">
                    <img src="https://hotelbalticwave.pl/files/inline/zainwestuj-w-luksusowy-apartament_5e132a19e1eda.box-1.png" alt="Zainwestuj w luksusowy apartament">
                    <h3>INWESTUJESZ W LUKSUSOWY APARTAMENT HOTELOWY</h3>
                    <div>
                        <p>Apartament 200 metrów od plaży w jednym z najwyższych budynków w Kołobrzegu, w dodatku klasy premium? Projekt jest wyjątkowy na skalę kraju - posiada wszystkie najważniejsze cechy warunkujące sukces apartamentom pod wynajem, takie jak: wyjątkową lokalizację, bajeczny widok, wysoki standard oraz bogatą infrastrukturę. Ekskluzywny charakter inwestycji podkreślą wnętrza pełne nowoczesnej architektury, w kolorystyce nawiązującej do barw bałtyckiej plaży i morza o różnych porach roku w elegancki i wyrafinowany sposób. Takie założenie przyświecało architektom od samego początku.</p>
                        <p>Z części apartamentów będzie roztaczał się widok na morze, który w zależności od pory roku pozwoli podziwiać wyjątkowe wschody i zachody słońca!</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="model-step">
                    <img src="https://hotelbalticwave.pl/files/inline/profesjonalny-operator-hotelowy_5e132a368f33a.box-2.png" alt="Profesjonalny operator hotelowy">
                    <h3>PROFESJONALNY OPERATOR HOTELOWY</h3>
                    <div>
                        <p>Do zarządzania hotelem zostanie powołana spółka celowa, która będzie działać w kooperacji z <b>międzynarodową siecią hotelarską</b>. Inwestor zatrudnia doświadczonych managerów z przeszło 10-letnim w zarządzaniu hotelem 4-gwiazdkowym oraz ponad 20-letnim doświadczeniem w zarządzaniu nieruchomościami.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="model-step">
                    <img src="https://hotelbalticwave.pl/files/inline/ciesz-sie-zyskami_5e132a569efc3.box-3.png" alt="Ciesz się zyskami">
                    <h3>CIESZYSZ SIĘ ZYSKAMI Z BEZPOŚREDNIEGO WYNAJMU BEZOBSŁUGOWEGO</h3>
                    <div>
                        <p>Apartamenty z wynajmem bezobsługowym to propozycja inwestycji dla tych, którzy z racji codziennych zajęć nie mogą samodzielnie angażować się w działania związane z najmem, promocją i zarządzaniem nieruchomości.</p>
                        <p>W ocenie ekspertów, inwestowanie w nieruchomości jest obecnie jednym z najpopularniejszych sposobów na pomnażanie kapitału. Podpierając się danymi zbieranymi w ciągu ostatnich pięciu lat, można zauważyć, że dały one polskim inwestorom wyższą stopę zwrotu niż obligacje skarbowe, lokaty w banku, złoto czy spółki z indeksu WIG na Giełdzie Papierów Wartościowych w Warszawie. Już trzy lata temu Izba Zarządzających Funduszami i Aktywami wskazała, że większość Polaków posiadających nadwyżki finansowe wybiera zakup lokalu pod inwestycje.</p>
                        <p>Jedną z ciekawych możliwości jest inwestowanie w nieruchomości objęte usługą zarządzanego wynajmu. W ten sposób możliwe jest zarabianie bez osobistego zaangażowania w kontakt z potencjalnymi najemcami. Odchodzą także działania związane z reklamą danego lokalu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>Inwestorzy decydujący się na zakup apartamentu w Baltic Wave będą mogli zdecydować, czy wolą zmienny, czy stały czynsz z najmu. Możliwość wyboru modelu biznesowego: czynsz zmienny stanowiący udział przysługujący Klientowi w około 50% łącznej sumy przychodów netto z tytułu świadczonych na rzecz Gości usług wynajmu apartamentów lub czynsz stały stanowiący do 6,5% ceny apartamentu z wykończeniem i wyposażeniem w skali roku, w zależności od konkretnego lokalu*. Informacje o ryzykach inwestycji są dostępne w biurach sprzedaży inwestycji. Są to między innymi: ryzyko przyjętego modelu biznesowego, ryzyko stopy zwrotu, ryzyko inflacji, ryzyko wypłacalności dewelopera oraz operatora hotelowego, ryzyko lokalizacji inwestycji, ryzyko niepozyskania najemców, ryzyko utraty wartości wskutek niewłaściwego używania, ryzyko realizacji projektu z opóźnieniem lub w sposób wadliwy, ryzyko związane ze wzrostem kosztów działalności oraz wzrostem kosztu realizacji projektu, ryzyko utraty osób kluczowych, ryzyko kondycji rynku turystycznego, ryzyko braku rachunku powierniczego, ryzyko  kryzysu na rynku nieruchomości, ryzyko nadpodaży hoteli i apartamentów na najem krótkoterminowy, ryzyko wystąpienia innych zdarzeń. Szczegółowe informacje dostępne są w biurze sprzedaży.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark-blue">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wybor">
                    <h2 class="section-title text-center">Wybierz model biznesowy i zarabiaj</h2>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="wybor-opcja-6 text-center">
                    <h3>WARIANT 1</h3>
                    <div>
                        <p>Podział przychodów z udzielonych noclegów 50/50*</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="wybor-opcja-6 text-center">
                    <h3>WARIANT 2</h3>
                    <div>
                        <p>Czynsz wypłacany kwartalnie w stałej wysokości</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-0">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12 bg-darkblue">
                <div class="row">
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <div class="model-box">
                            <img src="https://hotelbalticwave.pl/files/inline/ghdfgd_5e1331d31be2f.wynajem.png" alt="ghdfgd" data-img="44">
                            <h5>BEZOBSŁUGOWY WYNAJEM</h5>
                            <p>gwarancja oszczędności czasu</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <div class="model-box">
                            <img src="https://hotelbalticwave.pl/files/inline/ghdfgd_5e1331c50017e.doswiadczenie.png" alt="ghdfgd" data-img="45">
                            <h5>DOŚWIADCZONY OPERATOR HOTELOWY</h5>
                            <p>działający pod międzynarodową marką</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-md-0">
                        <div class="model-box">
                            <img src="https://hotelbalticwave.pl/files/inline/ghdfgd_5e1331baf15e5.stopa-zwrotu.png" alt="ghdfgd" data-img="46">
                            <h5>ATRAKCYJNA STOPA ZWROTU</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 mt-5 text-center">
                <p class="small">* Powyższe wartości nie stanowią oferty w rozumieniu art. 66 par. 1 Kodeksu Cywilnego. Opisują stan na dzień 25.11.2019. Rentowność w wariancie 2 ma charakter szacunkowy i jest wyliczona dla poszczególnych typów apartamentów. Szczegóły dotyczące poszczególnych modeli biznesowych (Wariant 1 i Wariant 2) oraz informacje o ryzykach inwestycji dostępne są w biurach sprzedaży inwestycji.</p>
            </div>
        </div>
    </div>
</section>
@endsection