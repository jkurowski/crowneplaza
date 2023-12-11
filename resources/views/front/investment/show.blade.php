@extends('layouts.page', ['body_class' => 'investment no-bottom no-top'])

@section('meta_title', 'O inwestycji')
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Apartamenty'])
@stop

@section('content')
    <div class="container-fluid p-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <iframe id="qupto-cloud-viewer-id" class="qupto-cloud_viewer" loading="lazy" src="https://antczak-kolobrzeg-balticwave.sensevr.pl/investment/187" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <style>
        .qupto-cloud_viewer {
            border: none !important;
            height: 80vh !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }
        @media only screen and (max-width: 768px) {
            .qupto-cloud_viewer {
                height: 85vh !important;
            }
        }
    </style>
@endsection

