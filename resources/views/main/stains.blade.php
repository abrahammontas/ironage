@extends('layouts.main')

@section('title', 'Stains')

@section('content')

    <!-- Intro Section -->
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="img/header-bgs/stains.jpg">
        <div class="container">
            <div class="row title">
                <h2 class="h2">Stain Options</h2>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->

    <!-- Work Detail Section -->
    <section class="ptb ptb-sm-80">
        <div class="container">
            <!-- work Filter -->
            <div class="row">
                <ul class="container-filter categories-filter">
                    <li><a class="categories active" data-filter="*">All</a></li>
                    <li><a class="categories" data-filter=".popular">Popular</a></li>
                    <li><a class="categories" data-filter=".spray-stain">Spray Stain</a></li>
                    <li><a class="categories" data-filter=".hand-rubbed">Hand Rubbed</a></li>
                </ul>
            </div>
            <!-- End work Filter -->
            <div class="row container-grid nf-col-3">

                <div class="nf-item hand-rubbed popular">
                    <div class="item-box">
                        <a class="cbox-gallary1" href="img/stains/provincial.jpg">
                            <img alt="1" src="img/stains/provincial.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Provincial</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item spray-stain popular">
                    <div class="item-box">
                        <a class="cbox-gallary1" href="img/stains/natural.jpg">
                            <img alt="1" src="img/stains/natural.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Natural</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item hand-rubbed popular">
                    <div class="item-box">
                        <a class="cbox-gallary1" href="img/stains/medium-walnut.jpg">
                            <img alt="1" src="img/stains/medium-walnut.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Medium Walnut</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item spray-stain">
                    <div class="item-box">
                        <a class="cbox-gallary1" href="img/stains/light-brown.jpg">
                            <img alt="1" src="img/stains/light-brown.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Light Brown</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item spray-stain">
                    <div class="item-box">
                        <a class="cbox-gallary1" href="img/stains/medium-brown.jpg" title="Consequat massa quis">
                            <img alt="1" src="img/stains/medium-brown.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Meidum Brown</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item spray-stain">
                    <div class="item-box">
                        <a class="cbox-gallary1" href="img/stains/dark-brown.jpg">
                            <img alt="1" src="img/stains/dark-brown.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Dark Brown</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item spray-stain">
                    <div class="item-box">
                        <a class="cbox-gallary1" href="img/stains/gray.jpg">
                            <img alt="1" src="img/stains/gray.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Gray</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item popular spray-stain">
                    <div class="item-box">
                        <a class="cbox-gallary1" href="img/stains/ebony.jpg">
                            <img alt="1" src="img/stains/ebony.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Ebony</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="nf-item spray-stain">
                    <div class="item-box">
                        <a class="cbox-gallary1" href="img/stains/mahogany.jpg">
                            <img alt="1" src="img/stains/mahogany.jpg" class="item-container">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Mahogany</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection