@extends('layouts.page', ['body_class' => 'location no-bottom'])

@section('meta_title', 'Lokalizacja')
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Lokalizacja'])
@stop

@section('content')
    <div id="lokalizacja">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe src="https://mapyinwestycji.pl/deweloperzy/vacationinvestments/balticwave/" id="vrmap"></iframe>
                </div>
            </div>
        </div>

        <section>
            <img src="{{ asset('/uploads/morze.jpg') }}" alt="" class="w-100">
            <div class="container on-img">
                <div class="row">
                    <div class="col-6">
                        <div class="section-apla">
                            <p class="big text-uppercase">Kołobrzeg</p>
                            <h2 class="section-title">Lokalizacja z potencjałem</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 pt-3">
                    <div class="col-12">
                        <p>Kołobrzeg to jedna z najbardziej popularnych destynacji turystycznych w Polsce. Miasto z roku na rok coraz bardziej się rozwija i umacnia pozycję atrakcyjnego nadmorskiego kurortu oraz największego polskiego uzdrowiska. Popularność Kołobrzegu wśród podróżnych, a co za tym idzie wysokie obłożenie najlepszych obiektów turystycznych to doskonałe przesłanki dla osób, które chcą ulokować swój kapitał w condohotelu, apartamentach pod wynajem czy w aparthotelu.</p>
                        <p>&nbsp;</p>
                        <ul class="mb-0 pink-list">
                            <li>Zajmuje też trzecią lokatę biorąc pod uwagę liczbę noclegów w powiatach, zaraz po Warszawie (6,4 mln) i Krakowie (5,6 mln).*</li>
                            <li>Powiat kołobrzeski osiągnął imponujący wynik na poziomie 5,1 mln noclegów w ciągu roku.*</li>
                            <li>Łącznie Kołobrzeg, Warszawa i Kraków koncentrują 19,2% liczby noclegów udzielonych turystom w 2018 r.*</li>
                            <li>Miasto położone w północno-zachodniej Polsce, u ujścia rzeki Parsęty do Morza Bałtyckiego.</li>
                            <li>Drugi najpopularniejszy polski kurort nadmorski nad Bałtykiem, odwiedzane rocznie przez &gt; 1 mln turystów**.</li>
                            <li>Popularne miejsce wypoczynku turystów z Polski i z zagranicy – między innymi Niemiec, Szwecji i Danii.</li>
                            <li>Lokalizacja w pobliżu źródeł wody mineralnej i solanek oraz pokładów borowiny.</li>
                            <li>Lokalny port handlowy, pasażerski, rybacki, jachtowy.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p>*Raport „Turystyka 2018 r.”, Główny Urząd Statystyczny</p>
                        <p>**www.kolobrzeg.pl – strona Urzędu Miasta Kołobrzeg</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title text-center">Turystyczne boom w Kołobrzegu</h2>
                    </div>
                </div>
            </div>

            <div class="container-fluid right-left">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ asset('uploads/boom-1.jpg') }}" alt="" class="w-100 border-img">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <div class="right-left-text">
                            <p>Według analiz przedstawionych w raporcie Głównego Urzędu Statystycznego pt. „Turystyka w 2018 r.” <b>powiat kołobrzeski uplasował się w ubiegłym roku na trzecim miejscu pod względem liczby udzielonych noclegów w Polsce</b>. Liczba ta wyniosła 5,1 mln, co pozostawia rejon niedaleko w tyle za miastami Kraków i Warszawa, które jako jedyne uplasowały się na wyższych pozycjach, udzielając odpowiednio 5,6 mln oraz 6,4 mln noclegów. 19,2% noclegów udzielonych w Polsce w 2018 r. koncentrowała się właśnie w tych trzech lokalizacjach<sup>1</sup>.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid right-left">
                <div class="row flex-row-reverse">
                    <div class="col-6">
                        <img src="{{ asset('uploads/boom-2.jpg') }}" alt="" class="w-100 border-img">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <div class="right-left-text">
                            <p>Kołobrzescy turyści odwiedzają miasto zarówno w celach wypoczynkowych, jak i leczniczych. Tutejsze warunki przyrodnicze – morze, piaszczyste plaże i bujna roślinność sprzyjają relaksowi na świeżym powietrzu. Oprócz niezaprzeczalnych walorów naturalnych, miasto ma do zaoferowania szereg atrakcji turystycznych dla całej rodziny m.in. molo, Muzeum Oręża Polskiego, oceanarium, Muzeum 3D, Muzeum Figur Woskowych czy zabytkową latarnię stanowiącą doskonały punkt widokowy oraz majestatyczną bazylikę.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid right-left">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ asset('uploads/boom-3.jpg') }}" alt="" class="w-100 border-img">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <div class="right-left-text">
                            <p>Kołobrzeskie hotele notują <b>średnie obłożenie w wysokości 63%</b>, czyli o ok. 10% większe niż wynosi średnia krajowa<sup>2</sup>. Największe nasycenie ruchu turystycznego przynoszą miesiące letnie. W wysokim sezonie obłożenie sięga nawet <b>98%</b>.<sup>3</sup></p>
                            <p>&nbsp;</p>
                            <p>Biorąc pod uwagę ogół hoteli na terenie Polski, najmniej na obłożenie narzekają te o najwyższym standardzie. Połączenie atrakcyjnej lokalizacji , prestiżowego charakteru oraz współpracy z międzynarodową siecią hotelową, obiekt zdaje się być przepisem na sukces zapewniającym wysoką frekwencję wśród gości.</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="section-title text-center">Kołobrzeg wyborem turystów zagranicznych</h2>
                    </div>
                    <div class="col-12">
                        <p>Spory odsetek turystów stanowią w powiecie kołobrzeskim obcokrajowcy. Najczęściej Kołobrzeg odwiedzają Niemcy, ale liczną grupę stanowią także mieszkańcy Skandynawii. Ogółem w powiecie <b>kołobrzeskim noclegi wykupione przez gości spoza kraju wynoszą już 26,9% spośród ogółu noclegów</b><sup>4</sup>. Urlop w Kołobrzegu to atrakcyjna kontroferta dla droższych wakacji w egzotycznych destynacjach. Przyczynia się do tego powstawanie nowoczesnych hoteli o wysokim standardzie, które odpowiadają potrzebom nawet najbardziej wymagających turystów.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-6">
                        <img src="{{ asset('/uploads/boom-50-1.jpg') }}" alt="" class="w-100">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('/uploads/boom-50-2.jpg') }}" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title text-center">Raj dla kuracjuszy</h2>
                    </div>
                    <div class="col-12">
                        <p>Kołobrzeg to największe polskie uzdrowisko. Dzięki bogatym pokładom solanek i borowiny stanowi doskonałą lokalizację dla kuracjuszy, którzy chętnie zjeżdżają tu w celach leczniczych. Dzięki temu <b>kołobrzeskiej bazie noclegowej nie doskwiera mocno problem sezonowości – z infrastruktury uzdrowiskowej można bowiem korzystać przez cały rok</b>. Część uzdrowiskowa stanowi jednocześnie najbardziej atrakcyjny pod kątem turystycznym obszar miasta. Malownicze okolice zapewniają bliskość natury, ale są również bogate w infrastrukturę usługową i handlową. To właśnie w tej części miasta powstaje hotel Baltic Wave, w którym można zakupić apartament inwestycyjny. Obiekt będzie znajdował się zaledwie 200 m od morza, ale jednocześnie będzie oferował dostęp do okolicznych udogodnień handlowo-usługowych.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <img src="{{ asset('/uploads/turystyka-biznesowa.jpg') }}" alt="" class="w-100">
            <div class="container on-img">
                <div class="row">
                    <div class="col-6">
                        <div class="section-apla">
                            <h2 class="section-title">Turystyka biznesowa</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 pt-3">
                    <div class="col-12">
                        <p>Kołobrzeg to także doskonałe miejsce na organizację dużego wydarzenia – konferencji, kongresu, szkolenia czy imprezy firmowej. Konferencje i kongresy najczęściej odbywają się w miesiącach marzec-czerwiec oraz wrzesień-listopad, a więc poza wysokim sezonem. Blisko 65% z nich organizowanych jest w hotelach<sup>6</sup>. <b>Obiekty posiadające atrakcyjne zaplecza konferencyjne są w stanie zapewnić sobie wyższy poziom obłożenia poza miesiącami letnimi</b>, co czyni inwestycję nad morzem jeszcze bardziej opłacalną. Stanowią one atut także z perspektywy mniejszych wydarzeń – szkoleń czy firmowych wyjazdów integracyjnych, które często odbywają się w malowniczych, zacisznych miejscach w otoczeniu przyrody.</p>
                        <p>&nbsp;</p>
                        <p>W hotelu Baltic Wave zaprojektowano przestrzeń obejmującą salę konferencyjną na 500 osób, której powierzchnia osiągnie 578,9 m<sup>2</sup>. Będzie można ją także podzielić na mniejsze sale o powierzchniach ok. 230m<sup>2</sup>, 200m<sup>2</sup> i 150m<sup>2</sup>. Przestrzeń będzie spełniać różnorodne funkcje: bankietową, konferencyjną czy wystawienniczą, z możliwością wjazdu samochodów.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>Podsumowując, Kołobrzeg to nie tylko letnia stolica wypoczynkowa Polski, ale także popularne uzdrowisko oraz miasto z dużym potencjałem dla branży MICE (Meetings, Incentives, Conferences and Exhibitions Industry). Dzięki temu kołobrzeskie hotele notują wysokie obłożenie przez cały rok, co jest niezwykle ważne z perspektywy osób inwestujących w tutejsze obiekty turystyczne – apartamenty pod wynajem, aparthotele czy condohotele. Warto postawić na obiekty o wysokim standardzie, które posiadają zaplecze konferencyjne, a także strefę SPA i wellness, z których można korzystać przez cały rok.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0">
            <img src="{{ asset('/uploads/mapa-lokalizacji.jpg') }}" alt="" class="w-100">
        </section>
@endsection