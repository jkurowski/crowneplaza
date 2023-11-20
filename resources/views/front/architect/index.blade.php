@extends('layouts.page', ['body_class' => 'location'])

@section('meta_title', 'Lokalizacja')
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'O architekcie'])
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center">Renomowana pracownia architektoniczna</h2>
                <p>Pracownia <b>Piotr Płaskowicki &amp; Partnerzy Architekci</b> została założona w 2000 roku. Na swoim koncie ma liczne projekty związane z architekturą, urbanistyką oraz projektowaniem wnętrz w tym projekty budynków: użyteczności publicznej, mieszkaniowe, biurowe, sportowe, hotelowe, industrialne.</p>
                <p>&nbsp;</p>
                <p>PPA to wysokiej klasy architekci, urbaniści, architekci wnętrz, krajobrazu będący laureatami ogólnopolskich nagród architektonicznych, w tym m.in. Ich projekty publikowane są w wielu periodykach branżowych.</p>
                <p>&nbsp;</p>
                <p>Zarówno elewacja, części wspólne jak i wystrój apartamentów stanowią spójną całość. Luksusowy charakter inwestycji podkreśli wyjątkowy basen infinity edge, który niejednemu kojarzy się z jego singapurskim odpowiednikiem. Architektura elewacji zostła zaprojektowana w oparciu o najnowsze trendy.</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <img src="/uploads/ppa-logo.png" alt="" class="m-auto">
            </div>
        </div>
    </div>
@endsection