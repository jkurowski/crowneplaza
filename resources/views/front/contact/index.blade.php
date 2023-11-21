@extends('layouts.page', ['body_class' => 'location no-top no-bottom'])

@section('meta_title', 'Lokalizacja')
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Kontakt'])
@stop

@section('content')
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="section-text contact-text pe-5">
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
    <a href="https://goo.gl/maps/A5DPM8RAWTmr8PTT7" target="_blank" title="Link do lokalizacji w Google Maps"><img src="{{ asset('images/mapa.jpg') }}" alt="" width="1920" height="700" class="w-100"></a>
@endsection