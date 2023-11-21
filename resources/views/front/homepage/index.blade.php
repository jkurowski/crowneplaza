@extends('layouts.homepage')

@section('content')
<div id="slider">
    <picture>
        <source type="image/webp" srcset="{{ asset('uploads/slider/slider-1.webp') }}">
        <source type="image/jpeg" srcset="{{ asset('uploads/slider/slider-1.jpg') }}">
        <img src="{{ asset('uploads/slider/slider-1.jpg') }}" alt="Apartamenty nad morzem - Baltic Wave" width="1920" height="860" class="w-100">
    </picture>
</div>

<div id="mainsearch">
    <div class="container">
        <div class="row">
            <div class="form">
                [ Tu pojawi się wyszukiwarka z modułu 3d ]
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <div class="section-text">
                    <p class="big">WYJĄTKOWA INWESTYCJA</p>
                    <h2 class="section-title">Luksus nad morzem</h2>
                    <ul class="mb-0 list-unstyled">
                        <li>Hotel klasy premium zlokalizowany zaledwie 200 m od plaży</li>
                        <li>Jedna z największych inwetycji nad polskim morzem</li>
                        <li>Obiekt działać będzie pod marką Crowne Plaza z grupy Intercontinental Hotels Group</li>
                        <li>Wyjątkowa nieruchomość w wypoczynkowej stolicy Polski. Jak wynika z przedstawionych przez GUS najnowszych danych, podczas lipca i sierpnia 2022 roku, udzielono w uzdrowisku 888,1 tys. noclegów</li>
                        <li>Jeden z najwyższych obiektów w Kołobrzegu - aż 14-kondygnacji</li>
                        <li>Apartamenty zarządzane przez doświadczonego operatora – oszczędność czasu dla inwestujących</li>
                        <li>Atrakcyjny model biznesowy – do wyboru stały lub zmienny czynsz z wynajmu lokalu</li>
                        <li>Luksusowe udogodnienia: basen ze szklanym dnem, kompleks basenowy, VIP strefy spa & wellness, bar, restauracje, imponujące centrum konferencyjno-biznesowe, strefa dla najmłodszych i wiele innych</li>
                        <li>Długie pobyty właścicielskie, które z pewnością ucieszą również rodzinę i przyjaciół!</li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="icons-row">
                    <div class="icons-item text-center">
                        <img src="https://placehold.co/90x90" alt="">
                        <h3>29m<sup>2</sup> - 130m<sup>2</sup></h3>
                        <p>Dostępne powierzchnie <br>apartamentów</p>
                    </div>
                    <div class="icons-item text-center">
                        <img src="https://placehold.co/90x90" alt="">
                        <h3>29m<sup>2</sup> - 130m<sup>2</sup></h3>
                        <p>Wysoki standard <br>wykończenia</p>
                    </div>
                    <div class="icons-item text-center">
                        <img src="https://placehold.co/90x90" alt="">
                        <h3>Pod klucz</h3>
                        <p>Wykończenie <br>i wyposażenie</p>
                    </div>
                    <div class="icons-item text-center">
                        <img src="https://placehold.co/90x90" alt="">
                        <h3>476</h3>
                        <p>Nowoczesnych <br>apartamentów</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container-fluid p-0">
    <div class="row no-gutters justify-content-end position-relative">
        <div class="col-5 d-flex justify-content-center align-items-center offset-left">
            <img src="{{ asset('images/homepage-investment.jpg') }}" alt="" width="947" height="674" class="w-100 offset-right">
        </div>
        <div class="col-7">
            <div class="full-right">
                <div class="right-left-text">
                    <p class="big">JAK DBAMY O WŁAŚCICIELI</p>
                    <h2 class="section-title">Najwyższy standard</h2>
                    <p>Crowne Plaza Resort zaoferuje gamę niepowtarzalnych, wysokiej klasy udogodnień. Właściciele i goście apartamentów będą mogli korzystać m.in.  z luksusowej strefy SPA & wellness, zażywać kąpieli w unikalnym basenie panoramicznym z widokiem na morze czy rozkoszować się wyśmienitą kolacją w eleganckiej restauracji na terenie kompleksu.
                    <p>&nbsp;</p>
                    <p>W hotelu znajdzie się również nowoczesna, profesjonalna przestrzeń konferencyjna na 500 osób, która uatrakcyjni ofertę obiektu.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="bg-dark-blue">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-6">
                <p class="big">KORZYŚCI W CROWNE PLAZA RESORT</p>
                <h2 class="section-title">Dlaczego warto?</h2>

                <div class="d-flex flex-wrap justify-content-center">
                    <div class="features-bg">
                        <div class="features-content">
                            <span>
                                <img src="{{ asset('/images/icons/pink-spa-icon.png') }}" width="90" height="90" alt="">
                            </span>
                            <h3>STREFA SPA</h3>
                        </div>
                    </div>

                    <div class="features-bg">
                        <div class="features-content">
                            <span>
                                <img src="{{ asset('/images/icons/pink-water-icon.png') }}" width="90" height="90" alt="">
                            </span>
                            <h3>STREFA BASENOWA</h3>
                        </div>
                    </div>

                    <div class="features-bg">
                        <div class="features-content">
                            <span>
                                <img src="{{ asset('/images/icons/pink-spa-icon.png') }}" width="90" height="90" alt="">
                            </span>
                            <h3>VIP SPA</h3>
                        </div>
                    </div>

                    <div class="features-bg">
                        <div class="features-content">
                            <span>
                                <img src="{{ asset('/images/icons/pink-restaurant-icon.png') }}" width="90" height="90" alt="">
                            </span>
                            <h3>RESTAURACJA</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 offset-absolute d-flex align-items-center">
                <img src="{{ asset('/images/widok-na-otwarty-basen.jpg') }}" width="960" height="710" alt="">
            </div>

            <div class="col-6">
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="features-bg">
                        <div class="features-content">
                            <span>
                                <img src="{{ asset('/images/icons/pink-drink-icon.png') }}" width="90" height="90" alt="">
                            </span>
                            <h3>BAR Z WIDOKIEM <br>NA MORZE</h3>
                        </div>
                    </div>

                    <div class="features-bg">
                        <div class="features-content">
                            <span>
                                <img src="{{ asset('/images/icons/pink-recepcja-icon.png') }}" width="90" height="90" alt="">
                            </span>
                            <h3>RECEPCJA</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="features-bg">
                        <div class="features-content">
                            <span>
                                <img src="{{ asset('/images/icons/pink-sea-icon.png') }}" width="90" height="90" alt="">
                            </span>
                            <h3>200 M. DO MORZA</h3>
                        </div>
                    </div>

                    <div class="features-bg">
                        <div class="features-content">
                            <span>
                                <img src="{{ asset('/images/icons/pink-water-icon.png') }}" width="90" height="90" alt="">
                            </span>
                            <h3>BASEN Z WIDOKIEM <br>NA MORZE</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-0">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-6">
                <div class="col-12">
                    <picture>
                        <source type="image/webp" srcset="{{ asset('images/budynek-baltic-wave-zachod-slonca.webp') }}">
                        <source type="image/jpeg" srcset="{{ asset('images/budynek-baltic-wave-zachod-slonca.jpg') }}">
                        <img src="{{ asset('images/budynek-baltic-wave-zachod-slonca.jpg') }}" alt="Budynek Baltic Wave" width="960" height="480" class="w-100">
                    </picture>
                </div>
                <div class="col-12">
                    <picture>
                        <source type="image/webp" srcset="{{ asset('images/budynek-baltic-wave-z-widokiem-na-morze.webp') }}">
                        <source type="image/jpeg" srcset="{{ asset('images/budynek-baltic-wave-z-widokiem-na-morze.jpg') }}">
                        <img src="{{ asset('images/budynek-baltic-wave-z-widokiem-na-morze.jpg') }}" alt="Budynek Baltic Wave" width="960" height="480" class="w-100">
                    </picture>
                </div>
            </div>
            <div class="col-6">
                <picture>
                    <source type="image/webp" srcset="{{ asset('images/budynek-baltic-wave.webp') }}">
                    <source type="image/jpeg" srcset="{{ asset('images/budynek-baltic-wave.jpg') }}">
                    <img src="{{ asset('images/budynek-baltic-wave.jpg') }}" alt="Budynek Baltic Wave" width="960" height="960" class="w-100">
                </picture>
            </div>
        </div>
    </div>
</section>

<a href="https://goo.gl/maps/A5DPM8RAWTmr8PTT7" target="_blank" title="Link do lokalizacji w Google Maps"><img src="{{ asset('images/mapa.jpg') }}" alt="" width="1920" height="700" class="w-100"></a>

<section class="bg-dark-blue">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="section-text contact-text">
                    <p class="big">FORMULARZ KONTAKTOWY</p>
                    <h2 class="section-title">Skontaktuj się z nami!</h2>

                    <p class="big"><a href="">695 051 396</a></p>
                    <p class="big"><a href="">sprzedazbalticwave@antczak.pl</a></p>
                    <p>&nbsp;</p>
                    <p><b class="text-pink">Biuro sprzedaży:</b> <br>Atrium Plaza, Warszawa 00-867, al. Jana Pawła II 29
                    </p>
                </div>
            </div>
            <div class="col-6">
                @if (session('success'))
                    <div class="alert alert-success border-0">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning border-0">
                        {{ session('warning') }}
                    </div>
                @endif
                <form method="post" id="contact-form" action="" class="validateForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12 col-md-6 form-input">
                            <label for="form_name">Imię <span class="text-danger">*</span></label>
                            <input name="form_name" id="form_name" class="validate[required] form-control @error('form_name') is-invalid @enderror" type="text" value="{{ old('form_name') }}">

                            @error('form_name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-12 form-input col-input-important">
                            <label for="form_surnames">Nazwisko <span class="text-danger">*</span></label>
                            <input name="form_surnames" id="form_surnames" class="form-control" type="text" value="{{ old('form_surname') }}">
                        </div>
                        <div class="col-12 col-md-6 form-input">
                            <label for="form_email">E-mail <span class="text-danger">*</span></label>
                            <input name="form_email" id="form_email" class="validate[required] form-control @error('form_email') is-invalid @enderror" type="text" value="{{ old('form_email') }}">

                            @error('form_email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6 form-input mt-4">
                            <label for="form_phone">Telefon</label>
                            <input name="form_phone" id="form_phone" class="form-control @error('form_phone') is-invalid @enderror" type="text" value="{{ old('form_phone') }}">

                            @error('form_phone')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6 form-input mt-4">
                            <label for="form_company">Firma</label>
                            <input name="form_company" id="form_company" class="form-control @error('form_company') is-invalid @enderror" type="text" value="{{ old('form_company') }}">

                            @error('form_company')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-12 mt-4 form-input">
                            <label for="form_message">Wiadomość <span class="text-danger">*</span></label>
                            <textarea rows="5" cols="1" name="form_message" id="form_message" class="validate[required] form-control @error('form_message') is-invalid @enderror">{{ old('form_message') }}</textarea>

                            @error('form_message')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="rodo-rules">

                        </div>
                    </div>
                    <div class="row row-form-submit">
                        <div class="col-4 pt-3">
                            <div class="input">
                                <input name="form_page" type="hidden" value="homepage">
                                <script type="text/javascript">
                                    document.write("<button class=\"bttn w-100\" type=\"submit\">WYŚLIJ</button>");
                                </script>
                                <noscript><b>Do poprawnego działania, Java musi być włączona.</b></noscript>
                            </div>
                        </div>
                        <div class="col-8">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
@push('scripts')
    <script src="{{ asset('/js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
            });
        });
        @if (session('success')||session('warning'))
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.alert').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush