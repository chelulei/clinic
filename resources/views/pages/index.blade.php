@extends('layouts.main')
@section('content')
    <!-- start banner Area -->
    @include('partials.banner')
    <!-- End banner Area -->
    <!-- Start appointment Area -->
    @include('partials.appointment')
    <!-- End appointment Area -->
    <!-- Start facilities Area -->
    <section class="facilities-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-7">
                    <div class="title text-center">
                        <h1 class="mb-10">Our Latest Facilities</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-facilities">
                        <span class="lnr lnr-rocket"></span>
                        <a href="#"><h4>24/7 Emergency</h4></a>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-facilities">
                        <span class="lnr lnr-heart"></span>
                        <a href="#"><h4>24/7 Emergency</h4></a>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-facilities">
                        <span class="lnr lnr-bug"></span>
                        <a href="#"><h4>Intensive Care</h4></a>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-facilities">
                        <span class="lnr lnr-users"></span>
                        <a href="#"><h4>Family Planning</h4></a>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End facilities Area -->


    <!-- Start offered-service Area -->
    <section class="offered-service-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offered-left">
                    <h1 class="text-white">Our Offered Services</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.
                    </p>
                    <div class="service-wrap row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-service">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/s1.jpg" alt="">
                                </div>
                                <a href="#">
                                    <h4 class="text-white">Cardiac Treatment</h4>
                                </a>
                                <p>
                                    inappropriate behavior Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-service">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/s2.jpg" alt="">
                                </div>
                                <a href="#">
                                    <h4 class="text-white">Routine Checkup</h4>
                                </a>
                                <p>
                                    inappropriate behavior Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="offered-right relative">
                        <div class="overlay overlay-bg"></div>
                        <h3 class="relative text-white">Departments</h3>
                        <ul class="relative dep-list">
                            <li><a href="#">Pediatric Diagnosis</a></li>
                            <li><a href="#">Outpatient Rehabilitation</a></li>
                            <li><a href="#">Laryngological Functions</a></li>
                            <li><a href="#">Ophthalmology Unit</a></li>
                            <li><a href="#">Cardiac Unit</a></li>
                            <li><a href="#">Outpatient Surgery</a></li>
                            <li><a href="#">Gynaecological Wings</a></li>
                        </ul>
                        <a class="viewall-btn" href="#">View all Department</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End offered-service Area -->

    <!-- Start team Area -->
    <section class="team-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-7">
                    <div class="title text-center">
                        <h1 class="mb-10">Our Consultants</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">
                <div class="col-lg-3 col-md-6 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/t1.jpg" alt="">
                        <div class="align-items-end justify-content-center d-flex">
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p>
                                inappropriate behavior
                            </p>
                            <h4>Andy Florence</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/t2.jpg" alt="">
                        <div class="align-items-end justify-content-center d-flex">
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p>
                                inappropriate behavior
                            </p>
                            <h4>Andy Florence</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/t3.jpg" alt="">
                        <div class="align-items-end justify-content-center d-flex">
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p>
                                inappropriate behavior
                            </p>
                            <h4>Andy Florence</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/t4.jpg" alt="">
                        <div class="align-items-end justify-content-center d-flex">
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p>
                                inappropriate behavior
                            </p>
                            <h4>Andy Florence</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End team Area -->
@endsection