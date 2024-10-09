@extends('layouts.frontend')
@section('content')
<div class="single-page">
    <div class="container">
        <nav aria-label="breadcrumb single-page">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}"><x-translation key="home_link" /></a></li>
                <li class="breadcrumb-item"><a href="{{route('blog')}}"><x-translation key="blog_link" /></a></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Blog Section Start -->
<section id="page" class="blog-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <h2><x-translation key="our_blog_link" /></h2>
                    <h5><x-translation key="latest_new" /></h5>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($blogs as $item)
            <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
                <a href="blog-single/{{$item->id}}">
                    <div class="card flip">
                        <img class="card-img" style="height:300px; object-fit:cover;" src="{{ asset('storage/' . str_replace('\\', '/', $item->image_url)) }}" alt="blog image">
                        <div class="card-body">
                            <h4 class="card-title"> {!! $item->getTranslatedAttribute('title', app()->getLocale()) !!}</h4>
                            <div class="blog-text">
                                <p>
                                    <!-- {!! $item->getTranslatedAttribute('content', app()->getLocale()) !!} -->
                                    {!! Str::words($item->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}
                                </p>
                            </div>
                            <div class="blog-bottom-text-link">
                                <span class="date">{{ ($item->date) ? $item->date->format('F d, Y') : $item->created_at->format('F d, Y') }}</span>
                                <span class="red-text"><x-translation key="read_story" /></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach



            <!-- Pagination Starts -->
            <div class="col-12 mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        {{ $blogs->links('vendor.pagination.bootstrap-4') }}
                    </ul>
                </nav>
            </div>

            <!-- Pagination Ends -->
        </div>
    </div>
</section>
<!-- Blog Section End -->

@endsection