@extends('frontend.layouts.app')
@section('title', 'Home')

@section('content')
    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area" {{$header?'style=background:url('.asset('uploads/headers/'.$header->bg_image).')':''}}>
        <div class="banner_inner pt-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-12">
                        <div class="banner_content pt-5 mt-5 pb-5 mb-5">
                            <h3>Hey There !</h3>
                            <h1 class="text-uppercase">{{$header?$header->title:'I am Zaman'}}</h1>
                            <h5 class="text-uppercase">{{$header?$header->subtitle:'Web Designer & Developer'}}</h5>
                            <div class="social_icons mt-3 mb-3">
                                <a href="{{$header?$header->facebook_link:'https://facebook.com'}}"><i class="ti-facebook"></i></a>
                                <a href="{{$header?$header->skype_link:'https://skype.com'}}"><i class="ti-skype"></i></a>
                                <a href="{{$header?$header->instagram_link:'https://instagram.com'}}"><i class="ti-instagram"></i></a>
                                <a href="{{$header?$header->github_link:'https://github.com'}}"><i class="ti-github"></i></a>
                            </div>
                            <a class="primary_btn" href="#"><span>See My Work</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="statistics_area">
            <div class="container">
                <div class="row justify-content-lg-start justify-content-center">
                    <div class="col-lg-2 col-md-3">
                        <div class="statistics_item">
                            <h3><span class="counter">5</span>k+</h3>
                            <p>Happy Customer</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="statistics_item">
                            <h3><span class="counter">3</span>k+</h3>
                            <p>Ticket Solved</p>
                        </div>
                    </div>
                    @php
                        $testimonial = App\Testimonial::all();
                        $average = !empty($testimonial)?$testimonial->sum('rating')/$testimonial->count():'';
                    @endphp
                    <div class="col-lg-2 col-md-3">
                        <div class="statistics_item">
                            <h3><span class="counter">{{$average}}</span>*/5*</h3>
                            <p>Average Rating</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!--================ Start About Us Area =================-->
    <section class="about_area section_gap" {{$about?'style=background:url('.asset('uploads/abouts/'.$about->bg_image).')':''}}>
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="" src="{{asset('uploads/abouts/'.$about->image)}}" alt="">
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <p class="top_text">About me <span></span></p>
                        <h2>{{$about?$about->title:'Junior Web Designer & Developer'}}</h2>
                        <p>{!! $about?Str::words($about->description, 50):'Lorem ipsum dolor sit amet......' !!} <a href="">More</a></p>
                        <a class="primary_btn" href="#"><span>Download CV</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Us Area =================-->

    <!--================ Start Features Area =================-->
    <section class="services_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p class="top_text">Our Service <span></span></p>
                        <h2>What Service We <br>
                            Offer For You </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="service_item">
                            <img src="{{ asset('uploads/services-icon/'.$service->image_icon) }}" alt="">
                            <h4>{{$service->title}}</h4>
                            <p>{!! Str::words($service->description, 45) !!}</p>
                            <a href="#" class="primary_btn2 mt-35">Learn More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================ End Features Area =================-->

    <!--================ Start Testimonial Area =================-->
    <section class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p class="top_text">Our Tesitmonial <span></span></p>
                        <h2>Honourable Client Says <br>
                            About Me </h2>
                    </div>
                </div>
            </div>

            <div class="owl-carousel owl-theme testimonial-slider ">
                <div class="testimonial-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="testi-img mb-4 mb-lg-0">
                                <img src="{{ asset('uploads/abouts/default-image.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testi-right">
                                <h4>Roser Henrique</h4>
                                <p><small>Project Manager, Apple</small></p>

                                <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                                <ul class="star_rating mt-4">
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li class="disable"><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="testi-img mb-4 mb-lg-0">
                                <img src="{{ asset('uploads/abouts/default-image.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testi-right">
                                <h4>Roser Henrique</h4>
                                <p><small>Project Manager, Apple</small></p>

                                <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                                <ul class="star_rating mt-3">
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li class="disable"><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="testi-img mb-4 mb-lg-0">
                                <img src="{{ asset('uploads/abouts/default-image.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testi-right">
                                <h4>Roser Henrique</h4>
                                <p><small>Project Manager, Apple</small></p>

                                <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                                <ul class="star_rating mt-3">
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li class="disable"><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Testimonial Area =================-->

    <!--================ Start Portfolio Area =================-->
    <section class="portfolio_area" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p class="top_text">Our Portfolio <span></span></p>
                        <h2>Check Our Recent <br>
                            Client Work </h2>
                    </div>
                </div>
            </div>

            <div class="filters portfolio-filter">
                <ul>
                    <li class="active" data-filter="*">all</li>
                    <li data-filter=".popular">popular</li>
                    <li data-filter=".latest"> latest</li>
                    <li data-filter=".following">following</li>
                    <li data-filter=".upcoming">upcoming</li>
                </ul>
            </div>

            <div class="filters-content">
                <div class="row portfolio-grid">
                    <div class="grid-sizer col-md-3 col-lg-3"></div>

                    @foreach(App\Testimonial::take(6)->latest()->get() as $testimonial)
                        @php
                            if ($loop->index == 1 OR $loop->index == 2 ) {
                                $col = '3';
                            }
                            else{
                                $col = '6';
                            }
                        @endphp
                        <div class="col-lg-{{$col}} col-md-{{$col}} all following">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ asset('frontend') }}/img/portfolio/p1.jpg" alt="">
                                <div class="overlay"></div>
                                <div class="short_info">
                                    <h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
                                    <p>Art, Illustration</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--================ End Portfolio Area =================-->

    <!--================ Start Blog Area =================-->
    <section class="blog-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p class="top_text">Our blog <span></span></p>
                        <h2>Latest Story From <br>
                            Our Blog </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/b1.jpg" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#"><i class="ti-user"></i> Admin post</a>
                                <a href="#"><i class="ti-calendar"></i> Feb 14, 2019</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Shall every fourth lesser have...</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    Have whose a two night earth she set you creeping replenish place whales move Forth first him seed green.
                                </p>
                            </div>
                            <a href="#" class="primary_btn2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/b2.jpg" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#"><i class="ti-user"></i> Admin post</a>
                                <a href="#"><i class="ti-calendar"></i> Feb 14, 2019</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Shall every fourth lesser have...</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    Have whose a two night earth she set you creeping replenish place whales move Forth first him seed green.
                                </p>
                            </div>
                            <a href="#" class="primary_btn2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('frontend') }}/img/b3.jpg" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#"><i class="ti-user"></i> Admin post</a>
                                <a href="#"><i class="ti-calendar"></i> Feb 14, 2019</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Shall every fourth lesser have...</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    Have whose a two night earth she set you creeping replenish place whales move Forth first him seed green.
                                </p>
                            </div>
                            <a href="#" class="primary_btn2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Blog Area =================-->

@endsection