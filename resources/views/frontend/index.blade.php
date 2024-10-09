@extends('layouts.frontend')
@section('content')
<!-- Start Slider Are -->
<header id="slider-home" class="slider slider-prlx bg-b">
    <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
            @foreach($banners as $banner)
            <div class="swiper-slide">
                <div class="bg-img valign" style="object-fit: cover;" data-background="{{ asset('storage/' . str_replace('\\', '/', $banner->image)) }}" data-overlay-dark="5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="caption text-center">
                                    <h2>{!! $banner->getTranslatedAttribute('title', app()->getLocale()) !!}</h2>
                                    <span class="back-text">{!! $banner->getTranslatedAttribute('body', app()->getLocale()) !!}</span>
                                    <h1>{!! $banner->getTranslatedAttribute('background_word', app()->getLocale()) !!}</h1>
                                    <p style="max-width: 650px; margin: 0 auto;">{!! $banner->getTranslatedAttribute('content', app()->getLocale()) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</header>
<!-- End Slider Area -->


<!-- Services Section Start -->
<div id="services" class="section-padding pb-0">
    <div class="container position-relative">

        <div class="row d-flex align-items-center position-relative mtm-150">
            <!-- single service -->
            <div class="col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center"
                data-wow-delay="0.2s">
                <div class="zr-theme-single-service-card flip">
                    <img src="assets/images/icons/quality-icon.svg" alt="image">
                    <h5><x-translation key="quality" /><br></h5>
                    <p><x-translation key="quality_text" /></p>
                    <!-- <a class="theme-button-dark mt-20" href="#"><span class="plus">+</span>View Details<span></span></a> -->
                </div>
            </div>
            <!-- single service -->

            <!-- single service -->
            <div class="col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInUp text-center"
                data-wow-delay="0.3s">
                <div class="zr-theme-single-service-card flip">
                    <img src="assets/images/icons/trust-icon.svg" alt="image">
                    <h5><x-translation key="trust" /></h5>
                    <p><x-translation key="trust_text" /></p>
                    <!-- <a class="theme-button-dark mt-20" href="#"><span class="plus">+</span>View Details<span></span></a> -->
                </div>
            </div>
            <!-- single service -->

            <!-- single service -->
            <div class="col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInRight text-center"
                data-wow-delay="0.4s">
                <div class="zr-theme-single-service-card flip">
                    <img src="assets/images/icons/professionalism-icon.svg" alt="image">
                    <h5><x-translation key="professionalism" /></h5>
                    <p><x-translation key="professionalism_text" /></p>
                    <!-- <a class="theme-button-dark mt-20" href="#"><span class="plus">+</span>View Details<span></span></a> -->
                </div>
            </div>
            <!-- single service -->

        </div>
    </div>
</div>
<!-- Services Section End -->

<!-- Start Counter Section Start -->
<div id="counter" class="counter-area section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="counter-container fadeInUp wow" data-wow-delay="0.2s">
                    <img src="assets/images/icons/wide-icon.svg" alt="image">
                    <div class="counter" data-target="500"></div>
                    <span>Wide assortment</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="counter-container fadeInUp wow" data-wow-delay="0.4s">
                    <img src="assets/images/icons/custumer.svg" alt="image">
                    <div class="counter" data-target="490"></div>
                    <span>Happy Clients</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="counter-container fadeInUp wow" data-wow-delay="0.6s">
                    <img src="assets/images/icons/architect.svg" alt="image">
                    <div class="counter" data-target="14"></div>
                    <span>Many years of experience</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="counter-container fadeInUp wow" data-wow-delay="0.8s">
                    <img src="assets/images/icons/partnership-icon-2.svg" alt="image" style="color: #FFA500;">
                    <div class="counter" data-target="430"></div>
                    <span>Partnerships</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Counter Section Start -->


<!-- Start Why us Section -->
<div id="about-us" class="about-us section-padding">
    <div class="container">
        <div class="guarantee-content">
            <div class="row mb-30">
                <div class="col-lg-6 col-md-12">
                    <div class="single-services-item">
                        <div class="services-heading">
                            <h2>{!! $intoFuture->getTranslatedAttribute('title', app()->getLocale()) !!}</h2>
                            <p>{!! $intoFuture->getTranslatedAttribute('content', app()->getLocale()) !!}</p>
                            <br>

                            <a class="theme-button-dark mt-20" href="{{route('about')}}"><span class="plus">+</span>Read
                                more<span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="{{ asset('storage/' . str_replace('\\', '/', $intoFuture->image)) }}" class="img-fluid" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Gallery Section Start -->
<section id="gallery" class="gallery-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <h2><x-translation key="our_project" /></h2>
                    <h5><x-translation key="our_project_text" /></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="gallery-list">
                    <ul class="nav" id="gallery-flters">
                        <li class="filter filter-active" data-filter=".all"><x-translation key="all_link" /><span></span></li>
                        <li class="filter" data-filter=".Construction"><x-translation key="construction_link" /><span></span></li>
                        <li class="filter" data-filter=".Electrical"><x-translation key="electrical_link" /><span></span></li>
                        <li class="filter" data-filter=".Architect"><x-translation key="architect_link" /><span></span></li>
                        <li class="filter" data-filter=".Building"><x-translation key="building_link" /><span></span></li>
                    </ul>
                </div>
            </div>
            <div class="gallery-container">
                <div class="row"> <!-- Add a row here to wrap the grid items -->
                    <!-- Electrical Projects -->
                    @foreach($electrical as $project)
                    <div class="col-lg-3 col-md-4 col-sm-6 gallery-grid-item Electrical">
                        <div class="gallery-item">
                            @if(is_array($project->images_array) && count($project->images_array) > 0)
                            <img class="image-1" src="{{ asset('storage/' . $project->images_array[0]) }}" alt="Product Image">
                            @else
                            <p>No images available.</p>
                            @endif
                            <div class="gallery-img-overlay">
                                <div class="gallery-content">
                                    <div class="top">
                                        <a href="/project-single/{{$project->id}}" class="poplink mr-7">
                                            <span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="assets/images/photos/gallery-1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/project-single/{{$project->id}}" class="poplink">
                                            {{ $project->getTranslatedAttribute('title') }} <!-- Use the project title dynamically -->
                                        </a>
                                        <p>{!! Str::words($project->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}</p> <!-- Dynamic project description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- All Projects -->
                    @foreach($projects as $project)
                    <div class="col-lg-3 col-md-4 col-sm-6 gallery-grid-item all">
                        <div class="gallery-item">
                            @if(is_array($project->images_array) && count($project->images_array) > 0)
                            <img class="image-1" src="{{ asset('storage/' . $project->images_array[0]) }}" alt="Product Image">
                            @else
                            <p>No images available.</p>
                            @endif
                            <div class="gallery-img-overlay">
                                <div class="gallery-content">
                                    <div class="top">
                                        <a href="/project-single/{{$project->id}}" class="poplink mr-7">
                                            <span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="assets/images/photos/gallery-1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/project-single/{{$project->id}}" class="poplink">
                                            {{ $project->getTranslatedAttribute('title') }} <!-- Use the project title dynamically -->
                                        </a>
                                        <p>{!! Str::words($project->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}</p> <!-- Dynamic project description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Building Projects -->
                    @foreach($building as $project)
                    <div class="col-lg-3 col-md-4 col-sm-6 gallery-grid-item Building">
                        <div class="gallery-item">
                            @if(is_array($project->images_array) && count($project->images_array) > 0)
                            <img class="image-1" src="{{ asset('storage/' . $project->images_array[0]) }}" alt="Product Image">
                            @else
                            <p>No images available.</p>
                            @endif
                            <div class="gallery-img-overlay">
                                <div class="gallery-content">
                                    <div class="top">
                                        <a href="/project-single/{{$project->id}}" class="poplink mr-7">
                                            <span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="assets/images/photos/gallery-1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/project-single/{{$project->id}}" class="poplink">
                                            {{ $project->getTranslatedAttribute('title') }} <!-- Use the project title dynamically -->
                                        </a>
                                        <p>{!! Str::words($project->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}</p> <!-- Dynamic project description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Construction Projects -->
                    @foreach($construction as $project)
                    <div class="col-lg-3 col-md-4 col-sm-6 gallery-grid-item Construction">
                        <div class="gallery-item">
                            @if(is_array($project->images_array) && count($project->images_array) > 0)
                            <img class="image-1" src="{{ asset('storage/' . $project->images_array[0]) }}" alt="Product Image">
                            @else
                            <p>No images available.</p>
                            @endif

                            <div class="gallery-img-overlay">
                                <div class="gallery-content">
                                    <div class="top">
                                        <a href="/project-single/{{$project->id}}" class="poplink mr-7">
                                            <span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="assets/images/photos/gallery-1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/project-single/{{$project->id}}" class="poplink">
                                            {{ $project->getTranslatedAttribute('title') }} <!-- Use the project title dynamically -->
                                        </a>
                                        <p>{!! Str::words($project->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}</p> <!-- Dynamic project description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Architect Projects -->
                    @foreach($architect as $project)
                    <div class="col-lg-3 col-md-4 col-sm-6 gallery-grid-item Architect">
                        <div class="gallery-item">
                            @if(count($project->images_array) > 0)
                            <img class="image-1" src="{{ asset('storage/' . $project->images_array[0]) }}" alt="Product Image">
                            @else
                            <p>No images available.</p>
                            @endif

                            <div class="gallery-img-overlay">
                                <div class="gallery-content">
                                    <div class="top">
                                        <a href="/project-single/{{$project->id}}" class="poplink mr-7">
                                            <span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="assets/images/photos/gallery-1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/project-single/{{$project->id}}" class="poplink">
                                            {{ $project->getTranslatedAttribute('title') }} <!-- Use the project title dynamically -->
                                        </a>
                                        <p>{!! Str::words($project->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}</p> <!-- Dynamic project description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div> <!-- Close the row here -->
            </div>
        </div>
    </div>
</section>
<!-- Gallery Section End -->




<!-- Start Reservation Area -->
<section id="reservation" class="zr-theme-reservation-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                <h2><x-translation key="help_link" /></h2>
                <h5><x-translation key="help_text" /></h5>
                <h2><a href="tel:+998712236508">{{$site->phone_1}}</a></h2>

                <div class="mt-20"><a class="theme-button-dark" #"><span
                            class="plus">+</span><x-translation key="help_link" /><span></span></a></div>
            </div>
        </div>
    </div>
</section>
<!-- End Reservation Area -->


<!-- Team Section Start -->
<!-- Team Section Start -->
<section id="team" class="team bg-grey section-padding">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="section-title">
            <h2><x-translation key="our_team_link" /></h2>
            <h5><x-translation key="our_team_text" /></h5>
        </div>

        <div id="team-carousel" class="owl-carousel owl-theme">
            @foreach($teams as $item)
            <div class="team-member aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="member flip">
                    <img src="{{ asset('storage/' . str_replace('\\', '/', $item->image_url)) }}" style="height:auto" class="img-fluid" alt="">
                    <h4>{{ $item->getTranslatedAttribute('name') }}</h4>
                    <span>{{ $item->getTranslatedAttribute('position') }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Team Section End -->


<!-- Testimonials Section Start -->
<section id="review" class="testimonial-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2><x-translation key="testimonial_link" /></h2>
                    <h5><x-translation key="people_love" /></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="testimonial-slide" class="owl-carousel owl-theme owl-loaded owl-drag">
                    <!-- testimonials item -->
                    @foreach($testimonials as $item)
                    <div class="single-testimonial">
                        <div class="testi-content-inner">
                            <div class="testimonial-bio">
                                <div class="avatar">
                                    <img src="{{ asset('storage/' . str_replace('\\', '/', $item->image)) }}" alt="testimonial">
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>{!! $item->getTranslatedAttribute('content', app()->getLocale()) !!}</p>
                            </div>
                            <div class="testimonial-bio">
                                <div class="bio-info">
                                    <h3 class="name">{!! $item->getTranslatedAttribute('name', app()->getLocale()) !!}</h3>
                                </div>
                            </div>
                            <div class="rating-box">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Section End -->


<!-- Partner Section Start -->
<div class="theme-partner-area bg-grey section-padding">
    <div class="container">
        <div class="owl-carousel">
            @foreach($partners as $item)
            <div class="item">
                <div class="theme-single-press-content flip">
                    <img src="{{ asset('storage/' . $item->icon) }}" style="height:150px; object-fit:cover;" alt="image">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<!-- Partner Section End -->


<!-- Blog Section Start -->
<section id="blog" class="blog-area section-padding">
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
            @foreach($blogs as $blog)
            <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
                <a href="/blog-single/{{$blog->id}}">
                    <div class="card flip">
                        <img class="card-img" src="assets/images/news/blog-1.jpg" alt="blog image">
                        <div class="card-body">
                            <h4 class="card-title">{!! $blog->getTranslatedAttribute('title', app()->getLocale()) !!}</h4>
                            <div class="blog-text">
                                <p>{!! Str::words($blog->getTranslatedAttribute('content', app()->getLocale()), 10, '...') !!}</p>
                            </div>
                            <div class="blog-bottom-text-link">
                                <span class="date">{{ ($blog->date) ? $blog->date->format('F d, Y') : $blog->created_at->format('F d, Y') }}</span>
                                <span class="red-text">Read Story</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            <div class="col-md-12">
                <div class="blog-more-btn text-center mt-15">
                    <a class="theme-button-dark" href="{{route('blog')}}"><span class="plus">+</span><x-translation key="view_blogs_link" /><span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

@endsection
<!-- Include jQuery and Owl Carousel Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Include Owl Carousel CSS and JavaScript -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Initialize Owl Carousel -->
<script>
    $(document).ready(function() {
        $('#team-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false, // Disable dots
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1 // Mobile: 1 item
                },
                600: {
                    items: 2 // Tablet: 2 items
                },
                1000: {
                    items: 4 // Desktop: 4 items
                }
            }
        });
    });
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000, // har 3 soniyada aylanish
            autoplayHoverPause: true,
            nav: false, // navigatsiya tugmalarini o'chirish
            dots: false, // nuqtalarini o'chirish
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });
    });
</script>

<!-- Include Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />