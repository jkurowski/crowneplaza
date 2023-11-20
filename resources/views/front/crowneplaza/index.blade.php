@extends('layouts.page', ['body_class' => 'location'])

@section('meta_title', 'Lokalizacja')
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Crowne Plaza'])
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><img src="/uploads/logotypy.png" alt="IHG" title="IHG" class="m-auto"></p>
                <p style="text-align: center;">&nbsp;</p>
                <p style="text-align: center;">&nbsp;&nbsp;</p>
                <p style="text-align: center;">
                    <img src="/uploads/zdjcie_crowne_palaza_singapore_1.jpg" class="w-100" alt="">
                </p>
                <p style="text-align: center;">&nbsp;</p>
                <p>Podjęliśmy współpracę z InterContinental Hotels Group, jednym z najważniejszych graczy na światowym rynku hotelarskim, który posiada w portfolio ponad 5.900 hoteli zlokalizowanych w ponad 100 krajach. Na mocy podpisanej umowy franczyzowej nasz hotel będzie funkcjonował pod prestiżową marką Crowne Plaza. Będzie to trzeci obiekt brandu w Polsce, ale jednocześnie pierwszy w naszym kraju hotel pod szyldem Crowne Plaza Resort będący połączeniem biznesowego DNA marki z udogodnieniami rodem z największych światowych kurortów.</p>
                <p>&nbsp;</p>
                <p>Jakie korzyści wynikają ze współpracy z InterContinental Hotels Group?</p>
                <ul class="pink-list">
                    <li>Najwyższa jakość obsługi i ponadprzeciętny komfort hotelu</li>
                    <li>Podkreślenie prestiżowego charakteru obiektu</li>
                    <li>Dostęp hotelu do bogatego know-how IHG</li>
                    <li>Dołączenie do programu lojalnościowego IHG Rewards Club, który skupia ponad 100 milionów członków</li>
                    <li>Szansa na zainteresowanie ofertą hotelu większej ilości turystów, zwłaszcza cudzoziemców, którzy znają i cenią markę Crowne Plaza</li>
                </ul>
                <p>&nbsp;</p>
                <div class="embed-container">
                    <iframe width="770" height="390" src="https://player.vimeo.com/video/373146133?modestbranding=1&amp;rel=0" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection