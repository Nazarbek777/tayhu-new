@extends('layouts.frontend')
@section('content')
<div class="single-page">
    <div class="container">
        <nav aria-label="breadcrumb single-page">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}"><x-translation key="home_link" /></a></li>
                <li class="breadcrumb-item active" aria-current="page"><x-translation key="construction_service" /></li>
            </ol>
        </nav>
    </div>
</div>

<!-- details area start -->
<div class="product-details-area pt-120">
    <div class="tp-product-details-top pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="tab-content m-img" id="productDetailsNavContent">
                        @php
                        $images = json_decode($singleProduct->images);
                        @endphp
                        @if($images)
                        @foreach($images as $index => $image)
                        <div class="tab-pane fade @if($index == 0) active show @endif" id="nav-{{ $index + 1 }}" role="tabpanel" aria-labelledby="nav-{{ $index + 1 }}-tab" tabindex="0">
                            <div class="tp-product-details-nav-main-thumb">
                                <img id="mainImage" src="{{ asset('storage/' . str_replace('\\', '/', $images[0])) }}" alt="image">
                            </div>
                        </div>
                        @endforeach
                        @else
                        <span>Not Found</span>
                        @endif
                    </div>
                    <nav>
                        @php
                        // JSON satrini massivga aylantirish
                        $images = json_decode($singleProduct->images);
                        @endphp

                        <div class="nav nav-tabs d-flex justify-content-center justify-content-lg-start" id="productDetailsNavThumb" role="tablist" style="border: 0px;">
                            @if($images)
                            @foreach($images as $index => $image)
                            <button class="nav-link @if($index == 0) active @endif"
                                id="nav-{{ $index + 1 }}-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#nav-{{ $index + 1 }}"
                                type="button"
                                role="tab"
                                aria-controls="nav-{{ $index + 1 }}"
                                aria-selected="{{ $index == 0 ? 'true' : 'false' }}"
                                onclick="document.getElementById('mainImage').src = '{{ asset('storage/' . str_replace('\\', '/', $image)) }}'">
                                <img width="100px" height="100px" src="{{ asset('storage/' . str_replace('\\', '/', $image)) }}" style="object-fit: cover; border:0px;" alt="image">
                            </button>
                            @endforeach
                            @else
                            <span>Not Found</span>
                            @endif
                        </div>
                    </nav>


                </div>
                <!-- col end -->
                <div class="col-xl-6 col-lg-6">
                    <div class="tp-product-details-wrapper">
                        <div class="tp-product-details-title-content">
                            <h3 class="single-product-title d-inline-block mb-20">{!! $singleProduct->getTranslatedAttribute('name', app()->getLocale()) !!}</h3>
                        </div>
                        <!-- inventory details -->
                        <div class="tp-product-details-inventory d-sm-flex flex-wrap align-items-center mb-20">
                            <div class="tp-product-details-stock">
                                <h4><x-translation key="brand_text" />: <span class="brand-type"> {!! ($singleProduct->brands == null) ? "Has not Brand" : $singleProduct->brands->getTranslatedAttribute('name', app()->getLocale()) !!}</span></h4>
                            </div>

                        </div>
                        <p class="tp-product-details-price-dsc mb-25">{!! $singleProduct->getTranslatedAttribute('description', app()->getLocale()) !!}</p>
                        <!-- model -->
                        <div class="tp-product-details-model">
                            <h4><x-translation key="model_text" />: <span> {!! ($singleProduct->models == null) ? "Has not Model" : $singleProduct->brands->getTranslatedAttribute('name', app()->getLocale()) !!}</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- details area end -->

<!-- product area start -->
<div class="tp-product-area pt-115 pb-110 p-relative fix">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-product-title-box mb-50">
                    <span class="tp-section-subtitle">Featured Window & Door Product</span>
                    <h3 class="tp-section-title">Releated Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-prduct-wrapper">
                    <div class="swiper-container tp-product-active-3">
                        <div class="swiper-wrapper">
                            @foreach($categoryProduct as $item)
                            <div class="swiper-slide">
                                <div class="tp-product-item p-relative">
                                    <div class="tp-product-thumb-box p-relative mb-25">
                                        <a href="/service-single/{{$item->id}}">
                                            @if(count($item->images_array) > 0)
                                            @foreach(array_slice($item->images_array, 0, 2) as $image) <!-- Take only the first 2 images -->
                                            <img class="image-{{ $loop->index + 1 }}" src="{{ asset('storage/' . $image) }}" alt="Product Image">
                                            @endforeach
                                            @else
                                            <p>No images available.</p>
                                            @endif
                                        </a>
                                    </div>
                                    <div class="tp-product-content text-center">
                                        <h4 class="tp-product-title"><a href="/service-single/{{$item->id}}" class="text-anim" style="color: inherit;">
                                                {!! $item->getTranslatedAttribute('name', app()->getLocale()) !!}</a></h4>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection