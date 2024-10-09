@extends('layouts.frontend')
@section('content')
<div class="single-page">
    <div class="container">
        <nav aria-label="breadcrumb single-page">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}"><x-translation key="home_link" /></a></li>
                <li class="breadcrumb-item active" aria-current="page"> <a href="{{route('projects')}}"><x-translation key="project_description" /></a></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Page Section Start -->
<div id="page" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-left">
                    <h2><x-translation key="project_description" /></h2>
                    <h5><x-translation key="construction_text" /> </h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
                <img src="{{ asset('storage/' . str_replace('\\', '/', $project->images_array[0])) }}" alt="Showroom Image" class="w-100 h-auto">
                <div class="row mt-2">
                    @foreach($project->images_array as $index => $image)
                    <div class="col-lg-6 col-md-6">
                        <img src="{{ asset('storage/' . str_replace('\\', '/', $image)) }}" alt="Showroom Image">

                    </div>
                    @endforeach
                </div>
                <p><x-translation key="long_construction_text" /></p>
                <br>
                <p>{!! $project->getTranslatedAttribute('content', app()->getLocale()) !!} </p>
                <h3><x-translation key="project_features" /></h3>
                <ul class="content-listing">
                    <li><i class="fa fa-caret-right"></i>{!! $project->getTranslatedAttribute('featured_1', app()->getLocale()) !!}</li>
                    <li><i class="fa fa-caret-right"></i>{!! $project->getTranslatedAttribute('featured_2', app()->getLocale()) !!}</li>
                    <li><i class="fa fa-caret-right"></i>{!! $project->getTranslatedAttribute('featured_3', app()->getLocale()) !!}</li>
                    <li><i class="fa fa-caret-right"></i>{!! $project->getTranslatedAttribute('featured_4', app()->getLocale()) !!}</li>
                    <li><i class="fa fa-caret-right"></i>{!! $project->getTranslatedAttribute('featured_5', app()->getLocale()) !!}</li>
                </ul>

            </div>
            <!-- Start Pricing Section -->
            <div class="col-lg-5 col-md-5 price-item">
                <div class="pricing-content">
                    <div class="price-heading">
                        <div class="price-name">
                            <h3><x-translation key="project_value" /> </h3>
                            <h2><span class="price-small-text">$</span>920</h2>
                            <span class="price-small-text"> <x-translation key="million" /></span>
                        </div>
                    </div>
                    <div class="price-body">
                        <ul class="single-project-list">
                            <li><span><x-translation key="client" />:</span>{!! $project->getTranslatedAttribute('client', app()->getLocale()) !!}</li>
                            <li><span><x-translation key="address" /></span>{!! $project->getTranslatedAttribute('location', app()->getLocale()) !!}</li>
                            <li><span><x-translation key="surface_area" />:</span>{!! $project->getTranslatedAttribute('surface_area', app()->getLocale()) !!}</li>
                            <li><span><x-translation key="year_completed" />:</span>{{$project->year_completed}}</li>
                            <li><span><x-translation key="arxitektor" />:</span>{!! $project->getTranslatedAttribute('architect', app()->getLocale()) !!}</li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- End Pricing Section -->
        </div>
    </div>
</div>
<!-- Page End -->

@endsection