@extends('layouts.app')
@section('content')

 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(../assets/img/services/31.jpg);">
        <div class="container text-dark">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>PostHarvest Services</h1>
                    <ul class="breadcrumb">
                        <li><a href="postharvest.html"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
     <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog blog-standard full-blog grid-colum default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="blog-content">
                    <div class="blog-item-box">
                        <div class="row">
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" data-wow-delay="500ms">   
                                    <div class="info">
                                        <h4>
                                            <a href="blog-single-with-sidebar.html">Direct Marketing</a>
                                        </h4>
                                        <p>
                                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something.
                                        </p>
                                        <a class="btn circle btn-primary center border btn-md text-center" href="DirectMarket.html">Order service</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" data-wow-delay="500ms">
                                    
                                    <div class="info">
                                        <h4>
                                            <a href="blog-single-with-sidebar.html">Food science & AgroTips</a>
                                        </h4>
                                        <p>
                                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something.
                                        </p>
                                        <a class="btn circle btn-primary border btn-md text-center" href="blog-single-with-sidebar.html">Order service</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6 single-item">
                                <div class="item wow fadeInUp" data-wow-delay="500ms">
                                    <div class="info">
                                        <h4>
                                            <a href="blog-single-with-sidebar.html">Industrial&Transpotation</a>
                                        </h4>
                                        <p>
                                            Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something.
                                        </p>
                                        <a class="btn circle btn-primary border btn-md text-center" id="one" href="industries.html">Order service</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
  
                        <!-- Pagination -->
                        <div class="row text-center">
                            <div class="col-md-12 pagi-area text-center ">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

     <!-- Start Gallery Area
    ============================================= -->
    <div class="gallery-area default-padding">
        <!-- Shape -->
        <div class="fixed-shape">
            <img src="../assets/img/shape/5.png" alt="Shape">
        </div>
        <!-- Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Most recent projects</h4>
                        <h2>Latest projects showcase</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="case-items-area">
                <div class="masonary">
                    <div id="portfolio-grid" class="gallery-items colums-4">
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/services/23.jpg" alt="Thumb">
                                    <a href="../assets/img/services/23.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="#">Industria processing</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/services/14.jpg" alt="Thumb">
                                    <a href="../assets/img/services/14.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="#">food science & AgroTips</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/services/16.jpg" alt="Thumb">
                                    <a href="../assets/img/services/16.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="#">Shop & Market</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/services/30.jpg" alt="Thumb">
                                    <a href="../assets/img/services/30.jpg" class="item popup-gallery"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="#">Request Transport</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->
@endsection