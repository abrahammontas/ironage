@extends('layouts.main')

@section('title', 'Credenza Part II')

@section('content')

        <!-- Intro Section -->
        <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="../img/IAO/products-bg.jpg">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">The Edwin Credenza, Part II</h2>
                </div>
            </div>
        </section>
        <!-- End Intro Section -->
        
        <!-- Work Detail Section -->
        <section class="pt pt-sm-80">
            <div class="container">

                <div class="row mb-60 mb-xs-30">
                    <div class="col-md-6">
                        <h4>The Edwin Credenza is a great addition to any workspace.</h4>
                    </div>
                    <div class="col-md-6">
                        <p class="lead">
                            We allow you to customize this product to meet your unique design specifications.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel image-slider o-flow-hidden">
                            <div class="item">
                                <img src="../img/products/credenza-part-2-1.jpg" alt="" />
                            </div>
                            <div class="item">
                                <img src="../img/products/credenza-part-2-2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mtb-60 mtb-xs-30">
                    <div class="col-md-4 mb-30">
                        <div class="project-detail-block">
                            <p>
                                <strong class="dark-color">Product :</strong>Credenza
                            </p>
                            <p>
                                <strong class="dark-color">Drawers :</strong>Yes
                            </p>
                            <p>
                                <strong class="dark-color">Wire Port :</strong>No
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <h5>Price</h5>
                                <p>Staring at $3,500</p>
                                <p>Price varies depending on custom requirements.</p>
                                <?php /* echo $modal_top; include ("../includes/contact-form.php"); echo $modal_bottom; */ ?> Contact <a href="mailto:custom@ironageoffice.com">custom@ironageoffice.com</a> for all inquiries.
                            </div>
                            <div class="col-md-6 mb-30">
                                <h5>Dimensions Displayed</h5>
                                <p>72"L x 18"W x 36"H</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <h5>Time Frame</h5>
                                <p>Depending on the size of the order, the time frame can range from 8-12 weeks.</p>
                            </div>
                            <div class="col-md-6 mb-30">
                                <h5>Stains</h5>
                                <p>Choose from a variety of stain options available for ALL products.</p>
                                <a href="{{ url('stains') }}">View Stains Here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <hr />

        <section class="ptb ptb-sm-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h3 class="">Start Your Iron Age Experience</h3>
                        <p class="mt-15">Reach out with your custom requirements and one of our design consultants will respond within 24 hours.</p>
                        <br />
                         <a class="btn btn-md btn-hover" style="background-color:#323232; color:white;" href="{{ url('contact') }}">Inquire Now</a>

                    </div>
                </div>
            </div>
        </section>

        <hr />

        <section class="ptb ptb-40">
            <div class="container text-center">
                <h4>Related Products</h4>
                <div class="row">

                    <?php
                    $products = array
                    (
                        array('credenza', 'credenza-show-3.jpg', 'Credenza'),
                        array('helvetica-shelving', 'helvetica-shelving-12x8.jpg', 'Helvetica Shelving Unit'),
                        array('filing-cabinet', 'industrial-filing-cabinet-12x8-2.jpg', 'Industrial Filing Cabinet')
                    );
                        $rand_keys = array_rand($products, 2);
                                        
                        $product_1 = $products[$rand_keys[0]];
                            $product_1_link = $product_1[0];
                            $product_1_image = $product_1[1];
                            $product_1_title = $product_1[2];

                        $product_2 = $products[$rand_keys[1]];
                            $product_2_link = $product_2[0];
                            $product_2_image = $product_2[1];
                            $product_2_title = $product_2[2];

                        // $product_3 = $products[$rand_keys[2]];
                        //     $product_3_link = $product_3[0];
                        //     $product_3_image = $product_3[1];
                        //     $product_3_title = $product_3[2];     
                ?>

                    <div class="col-lg-6 spacing-grid">
                        <div class="item-box">
                            <a href="<?php echo $product_1_link ?>">
                                <img alt="1" src="../img/products/<?php echo $product_1_image; ?>" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white"><?php echo $product_1_title; ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 spacing-grid">
                        <div class="item-box">
                            <a href="<?php echo $product_2_link ?>">
                                <img alt="1" src="../img/products/<?php echo $product_2_image; ?>" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white"><?php echo $product_2_title; ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php /*
                    <div class="col-lg-4 spacing-grid">
                        <div class="item-box">
                            <a href="<?php echo $product_3_link ?>">
                                <img alt="1" src="../img/products/<?php echo $product_3_image; ?>" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white"><?php echo $product_3_title; ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    */ ?>
                </div>
            </div>
        </section>

@endsection