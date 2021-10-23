@extends('frontend.layouts.master')
@section('title','Edas Makina')


@section('content')
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-1" data-loop="false" data-autoplay="5000" data-simulate-touch="false">
        <div class="swiper-wrapper">
            <div class="swiper-slide context-dark" data-slide-bg="assets/images/swiper-slide-1.jpg">
                <div class="swiper-slide-caption section-lg">
                    <div class="container">
                        <div class="row justify-content-md-center justify-content-xxl-start">
                            <div class="col-md-6">
                                <h4 class="text-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="150">high quality</h4>
                                <h2 data-caption-animate="fadeInLeft" data-caption-delay="350">Reliable products</h2><a class="button button-lg button-primary" href="#" data-caption-animate="fadeInLeft" data-caption-delay="450">Get in touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark" data-slide-bg="assets/images/swiper-slide-2.jpg">
                <div class="swiper-slide-caption section-lg">
                    <div class="container">
                        <div class="row justify-content-md-center justify-content-xxl-start">
                            <div class="col-md-6">
                                <h4 class="text-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="150">Best service</h4>
                                <h2 data-caption-animate="fadeInLeft" data-caption-delay="350">Equipment Rental</h2><a class="button button-lg button-primary" href="#" data-caption-animate="fadeInLeft" data-caption-delay="450">Get in touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark" data-slide-bg="assets/images/swiper-slide-3.jpg">
                <div class="swiper-slide-caption section-lg">
                    <div class="container">
                        <div class="row justify-content-md-center justify-content-xxl-start">
                            <div class="col-md-6">
                                <h4 class="text-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="150">Welcome to Digger</h4>
                                <h2 data-caption-animate="fadeInLeft" data-caption-delay="350">Construction equipment</h2><a class="button button-lg button-primary" href="#" data-caption-animate="fadeInLeft" data-caption-delay="450">Get in touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Swiper Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-counter"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>
    <!-- Section icons-->
    <section class="section-md bg-gray-1">
        <div class="container">
            <div class="row row-30 row-xl-50 row-decorate">
                <div class="col-md-6 col-lg-4 wow slideInUp">
                    <div class="box-icon-modern align-items-sm-center">
                        <div class="box-icon-inner decorate-triangle"><span class="icon-xl linearicons-document icon-secondary"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Safety</a></h4>
                            <p>Making your work safe</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow slideInUp">
                    <div class="box-icon-modern align-items-sm-center">
                        <div class="box-icon-inner decorate-triangle"><span class="icon-xl linearicons-group-work icon-secondary"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Teamwork</a></h4>
                            <p>Qualified team</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow slideInUp">
                    <div class="box-icon-modern align-items-sm-center">
                        <div class="box-icon-inner decorate-triangle"><span class="icon-xl linearicons-cog icon-secondary"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Integrity</a></h4>
                            <p>Always honest & dedicated</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-xl bg-gray-700">
        <div class="container">
            <div class="row row-30 align-items-lg-end">
                <div class="col-lg-4 wow-outer">
                    <div class="wow slideInRight">
                        <h3 class="title-decorate"><span>Browse by Industry</span></h3>
                    </div>
                </div>
                <div class="col-lg-8 wow-outer">
                    <div class="wow slideInLeft">
                        <p class="text-opacity-80">We provide heavy-duty equipment for a variety of industries. companies all over the world buy & rent our equipment to make their work safe, reliable, and efficient.</p>
                    </div>
                </div>
            </div>
            <div class="row row-15 row-gutters-14">
                <div class="col-md-6 col-lg-4 wow fadeInUp"><a class="box-product" href="#">
                        <div class="box-product-figure"><img src="assets/images/home-1-379x291.jpg" alt="" width="379" height="291"/>
                        </div>
                        <div class="box-product-caption">
                            <h4 class="box-product-title">Agriculture</h4>
                            <p>20 models</p>
                            <div class="box-product-divider"></div>
                        </div></a>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp"><a class="box-product" href="#">
                        <div class="box-product-figure"><img src="assets/images/home-2-379x291.jpg" alt="" width="379" height="291"/>
                        </div>
                        <div class="box-product-caption">
                            <h4 class="box-product-title">Construction</h4>
                            <p>25 models</p>
                            <div class="box-product-divider"></div>
                        </div></a>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp"><a class="box-product" href="#">
                        <div class="box-product-figure"><img src="assets/images/home-3-379x291.jpg" alt="" width="379" height="291"/>
                        </div>
                        <div class="box-product-caption">
                            <h4 class="box-product-title">Asphalt Paving</h4>
                            <p>10 models</p>
                            <div class="box-product-divider"></div>
                        </div></a>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp"><a class="box-product" href="#">
                        <div class="box-product-figure"><img src="assets/images/home-4-379x291.jpg" alt="" width="379" height="291"/>
                        </div>
                        <div class="box-product-caption">
                            <h4 class="box-product-title">Warehousing</h4>
                            <p>28 models</p>
                            <div class="box-product-divider"></div>
                        </div></a>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp"><a class="box-product" href="#">
                        <div class="box-product-figure"><img src="assets/images/home-5-379x291.jpg" alt="" width="379" height="291"/>
                        </div>
                        <div class="box-product-caption">
                            <h4 class="box-product-title">Mining</h4>
                            <p>15 models</p>
                            <div class="box-product-divider"></div>
                        </div></a>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp"><a class="box-product" href="#">
                        <div class="box-product-figure"><img src="assets/images/home-6-379x291.jpg" alt="" width="379" height="291"/>
                        </div>
                        <div class="box-product-caption">
                            <h4 class="box-product-title">Transportation</h4>
                            <p>30 models</p>
                            <div class="box-product-divider"></div>
                        </div></a>
                </div>
            </div>
        </div>
    </section>
    <section class="section tabs-custom tabs-horizontal tabs-creative" id="tabs-1">
        <div class="container container-wide">
            <div class="row">
                <div class="col-lg-4 col-xl-5">
                    <div class="tabs-creative-title">
                        <h3 class="title-decorate"><span>Equipment</span></h3>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-7">
                    <div class="nav-tabs-cteative-wrap">
                        <ul class="nav nav-tabs nav-tabs-cteative">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">New equipment</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Used equipment</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Special Deals</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-xxl section-xxl-top-105 bg-gray-1">
            <div class="container">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-1-1">
                        <div class="event-item-classic wow slideInleft">
                            <div class="event-item-classic-figure"><a href="product-page.html"><img src="assets/images/home-equipment-1-164x119.png" alt="" width="164" height="119"/></a></div>
                            <div class="event-item-classic-caption">
                                <h4 class="event-item-classic-title"><a href="product-page.html">DT899-19 Articulated Dump Truck</a></h4>
                                <p class="event-item-classic-text">With the Digger DT899-19, you'll move more materials faster and work harder in tough conditions, and navigate roadways or difficult terrain with ease.</p>
                            </div>
                        </div>
                        <div class="event-item-classic wow slideInleft">
                            <div class="event-item-classic-figure"><a href="product-page.html"><img src="assets/images/home-equipment-2-164x119.png" alt="" width="164" height="119"/></a></div>
                            <div class="event-item-classic-caption">
                                <h4 class="event-item-classic-title"><a href="product-page.html">DF592-18 Electric Cushion Tire Forklift</a></h4>
                                <p class="event-item-classic-text">The Digger DF592-18 cushion tire forklift series has a comfortable operator compartment with advanced AC motor and optimized visibility.</p>
                            </div>
                        </div>
                        <div class="event-item-classic wow slideInleft">
                            <div class="event-item-classic-figure"><a href="product-page.html"><img src="assets/images/home-equipment-3-164x119.png" alt="" width="164" height="119"/></a></div>
                            <div class="event-item-classic-caption">
                                <h4 class="event-item-classic-title"><a href="product-page.html">DX389-17 Crawler Excavator</a></h4>
                                <p class="event-item-classic-text">With remarkable over-the-side lifting performance, the conventional tail swing Digger crawler excavator can take on many difficult jobs.</p>
                            </div>
                        </div>
                        <div class="event-item-classic wow slideInleft">
                            <div class="event-item-classic-figure"><a href="product-page.html"><img src="assets/images/home-equipment-4-164x119.png" alt="" width="164" height="119"/></a></div>
                            <div class="event-item-classic-caption">
                                <h4 class="event-item-classic-title"><a href="product-page.html">DL558-18 Wheel Loader</a></h4>
                                <p class="event-item-classic-text">Complete tough load and carry applications without sacrificing maneuverability. The Digger DL558-18 is a valued workhorse in many types of work.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-2">
                        <div class="event-item-classic">
                            <div class="event-item-classic-figure"><a href="product-page.html"><img src="assets/images/home-equipment-3-164x119.png" alt="" width="164" height="119"/></a></div>
                            <div class="event-item-classic-caption">
                                <h4 class="event-item-classic-title"><a href="product-page.html">DX389-17 Crawler Excavator</a></h4>
                                <p class="event-item-classic-text">With remarkable over-the-side lifting performance, the conventional tail swing Digger crawler excavator can take on many difficult jobs.</p>
                            </div>
                        </div>
                        <div class="event-item-classic">
                            <div class="event-item-classic-figure"><a href="product-page.html"><img src="assets/images/home-equipment-4-164x119.png" alt="" width="164" height="119"/></a></div>
                            <div class="event-item-classic-caption">
                                <h4 class="event-item-classic-title"><a href="product-page.html">DL558-18 Wheel Loader</a></h4>
                                <p class="event-item-classic-text">Complete tough load and carry applications without sacrificing maneuverability. The Digger DL558-18 is a valued workhorse in many types of work.</p>
                            </div>
                        </div>
                        <div class="event-item-classic">
                            <div class="event-item-classic-figure"><a href="product-page.html"><img src="assets/images/home-equipment-1-164x119.png" alt="" width="164" height="119"/></a></div>
                            <div class="event-item-classic-caption">
                                <h4 class="event-item-classic-title"><a href="product-page.html">DT899-19 Articulated Dump Truck</a></h4>
                                <p class="event-item-classic-text">With the Digger DT899-19, you'll move more materials faster and work harder in tough conditions, and navigate roadways or difficult terrain with ease.</p>
                            </div>
                        </div>
                        <div class="event-item-classic">
                            <div class="event-item-classic-figure"><a href="product-page.html"><img src="assets/images/home-equipment-2-164x119.png" alt="" width="164" height="119"/></a></div>
                            <div class="event-item-classic-caption">
                                <h4 class="event-item-classic-title"><a href="product-page.html">DF592-18 Electric Cushion Tire Forklift</a></h4>
                                <p class="event-item-classic-text">The Digger DF592-18 cushion tire forklift series has a comfortable operator compartment with advanced AC motor and optimized visibility.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-3">
                        <div class="event-item-classic">
                            <div class="event-item-classic-figure"><a href="product-page.html"><img src="assets/images/home-equipment-1-164x119.png" alt="" width="164" height="119"/></a></div>
                            <div class="event-item-classic-caption">
                                <h4 class="event-item-classic-title"><a href="product-page.html">DT899-19 Articulated Dump Truck</a></h4>
                                <p class="event-item-classic-text">With the Digger DT899-19, you'll move more materials faster and work harder in tough conditions, and navigate roadways or difficult terrain with ease.</p>
                            </div>
                        </div>
                        <div class="event-item-classic">
                            <div class="event-item-classic-figure"><a href="product-page.html"><img src="assets/images/home-equipment-2-164x119.png" alt="" width="164" height="119"/></a></div>
                            <div class="event-item-classic-caption">
                                <h4 class="event-item-classic-title"><a href="product-page.html">DF592-18 Electric Cushion Tire Forklift</a></h4>
                                <p class="event-item-classic-text">The Digger DF592-18 cushion tire forklift series has a comfortable operator compartment with advanced AC motor and optimized visibility.</p>
                            </div>
                        </div>
                        <div class="event-item-classic">
                            <div class="event-item-classic-figure"><a href="product-page.html"><img src="assets/images/home-equipment-3-164x119.png" alt="" width="164" height="119"/></a></div>
                            <div class="event-item-classic-caption">
                                <h4 class="event-item-classic-title"><a href="product-page.html">DX389-17 Crawler Excavator</a></h4>
                                <p class="event-item-classic-text">With remarkable over-the-side lifting performance, the conventional tail swing Digger crawler excavator can take on many difficult jobs.</p>
                            </div>
                        </div>
                        <div class="event-item-classic">
                            <div class="event-item-classic-figure"><a href="product-page.html"><img src="assets/images/home-equipment-4-164x119.png" alt="" width="164" height="119"/></a></div>
                            <div class="event-item-classic-caption">
                                <h4 class="event-item-classic-title"><a href="product-page.html">DL558-18 Wheel Loader</a></h4>
                                <p class="event-item-classic-text">Complete tough load and carry applications without sacrificing maneuverability. The Digger DL558-18 is a valued workhorse in many types of work.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brands-->
    <section class="section section-lg bg-default text-center">
        <div class="container">
            <h3 class="title-decorate title-decorate-center">Brands</h3>
            <div class="row row-30">
                <div class="col-sm-6 col-lg-3"><a class="box-sponsor wow fadeInUp" href="#"><img src="assets/images/logo-1-270x121.png" alt="" width="270" height="121"/></a></div>
                <div class="col-sm-6 col-lg-3"><a class="box-sponsor wow fadeInUp" href="#" data-wow-delay="0.3s"><img src="assets/images/logo-2-270x121.png" alt="" width="270" height="121"/></a></div>
                <div class="col-sm-6 col-lg-3"><a class="box-sponsor wow fadeInUp" href="#" data-wow-delay="0.6s"><img src="assets/images/logo-3-270x121.png" alt="" width="270" height="121"/></a></div>
                <div class="col-sm-6 col-lg-3"><a class="box-sponsor wow fadeInUp" href="#" data-wow-delay="0.9s"><img src="assets/images/logo-4-270x121.png" alt="" width="270" height="121"/></a></div>
            </div>
        </div>
    </section>
    <section class="parallax-container" data-parallax-img="assets/images/parallax-img-1.jpg">
        <div class="parallax-content section-xl context-dark text-center bg-dark-filter">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10 wow-outer">
                        <div class="wow fadeInUp">
                            <h3 class="title-decorate title-decorate-center">Have questions? we can help</h3><a class="button button-lg button-primary" href="contacts.html">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
            <div class="wow-outer">
                <div class="wow slideInDown">
                    <h3 class="title-decorate title-decorate-center">Testimonials</h3>
                </div>
            </div>
            <!-- Slick Carousel-->
            <div class="slick-slider carousel-parent" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                <div class="item">
                    <div class="testimonials-modern">
                        <div class="testimonials-modern-text">
                            <p>One of the biggest factors in my buying decisions is dealer support. Digger has provided us great service after the sale, so we’ve continued to work with them from sales, rental and service standpoints.</p>
                        </div>
                        <div class="testimonials-modern-name">John Smith</div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonials-modern">
                        <div class="testimonials-modern-text">
                            <p>Digger is our preferred supplier for our heavy machinery rental and purchase requirements. They have been working with us for more than 3 years now and have maintained a very professional business relationship.</p>
                        </div>
                        <div class="testimonials-modern-name">James Williams</div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonials-modern">
                        <div class="testimonials-modern-text">
                            <p>We recently used Digger for the rent of a 20 tonne crawler excavator. The equipment was in good condition and was supplied with the correct attachments for the job as agreed. Thank you!</p>
                        </div>
                        <div class="testimonials-modern-name">Sam McMillan</div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonials-modern">
                        <div class="testimonials-modern-text">
                            <p>From service to sales and office personnel, Digger keeps our materials and products moving in an efficient and professional manner. Our yearly PM agreement ensures safe operation of our various fork trucks, manual lifts, and aerial lift.</p>
                        </div>
                        <div class="testimonials-modern-name">Peter Wilson</div>
                    </div>
                </div>
            </div>
            <div class="slick-slider slider-dots" id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="4" data-xs-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="4" data-slide-to-scroll="1">
                <div class="item">
                    <div class="slick-dot-item"><img src="assets/images/user-1-60x60.jpg" alt="" width="60" height="60"/>
                    </div>
                </div>
                <div class="item">
                    <div class="slick-dot-item"><img src="assets/images/user-2-60x60.jpg" alt="" width="60" height="60"/>
                    </div>
                </div>
                <div class="item">
                    <div class="slick-dot-item"><img src="assets/images/user-3-60x60.jpg" alt="" width="60" height="60"/>
                    </div>
                </div>
                <div class="item">
                    <div class="slick-dot-item"><img src="assets/images/user-4-60x60.jpg" alt="" width="60" height="60"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-default">
        <div class="container">
            <h3 class="title-decorate title-decorate-center text-center">Latest News</h3>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
                        <div class="wow slideInUp">
                            <div class="post-classic">
                                <div class="post-classic-figure"><a href="blog-post.html"><img src="assets/images/home-post-1-370x255.jpg" alt="" width="370" height="255"/></a></div>
                                <div class="post-classic-caption">
                                    <h4 class="post-classic-title"><a href="blog-post.html">Top 5 Things to Do Before Buying Construction Equipment</a></h4>
                                    <ul class="post-classic-meta">
                                        <li>April 25, 2019</li>
                                        <li><a class="post-classic-tag" href="#">News</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="wow slideInUp">
                            <div class="post-classic">
                                <div class="post-classic-figure"><a href="blog-post.html"><img src="assets/images/home-post-2-370x255.jpg" alt="" width="370" height="255"/></a></div>
                                <div class="post-classic-caption">
                                    <h4 class="post-classic-title"><a href="blog-post.html">What is Happening to Used Heavy Equipment Pricing?</a></h4>
                                    <ul class="post-classic-meta">
                                        <li>April 25, 2019</li>
                                        <li><a class="post-classic-tag" href="#">News</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="wow slideInUp">
                            <div class="post-classic">
                                <div class="post-classic-figure"><a href="blog-post.html"><img src="assets/images/home-post-3-370x255.jpg" alt="" width="370" height="255"/></a></div>
                                <div class="post-classic-caption">
                                    <h4 class="post-classic-title"><a href="blog-post.html">How to Buy Heavy Equipment Safely &amp; Avoid Unethical Sellers</a></h4>
                                    <ul class="post-classic-meta">
                                        <li>April 25, 2019</li>
                                        <li><a class="post-classic-tag" href="#">News</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

