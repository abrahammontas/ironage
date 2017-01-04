@extends('layouts.main')

@section('title', 'Commercial Products')

@section('content')

    <!-- Intro Section -->
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="img/IAO/products-bg.jpg">
        <div class="container">
            <div class="row title">
                <h2 class="h2">Commercial Workstations</h2>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->

    <section style="padding-top:100px; margin-bottom:120px;">
        <div class="container-fluid" style="margin-right:40px; margin-left:40px;">
            <div class="row text-center" style="margin:0px 20% 80px;">
                <h6 style="line-height:20px; font-weight: 300; text-transform:none; font-weight:500;">All designs come with a built-in trough system allowing you to pick and choose what power strips you would like at each desk. Our workstations are custom-built to meet the dimensional requirements of your new workspace.</h6>
            </div>
            <div class="row">
                <div class="col-md-4" style="margin-bottom:20px;">
                    <div class="item-box" style="padding:0px;">
                        <a href="product/carruca-workbench">
                            <img alt="Carruca Workbench" src="img/products/Carruca-6P-WorkStation.jpg" class="item-continer">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Carruca Workbench</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4" style="margin-bottom:20px;">
                    <div class="item-box" style="padding:0px;">
                        <a href="product/bastille-workstation">
                            <img alt="Bastille Workbench" src="img/products/Bastille_2.jpg">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Bastille Workbench</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4" style="margin-bottom:20px;">
                    <div class="item-box" style="padding:0px;">
                        <a href="product/harrod-carruca-workstation">
                            <img alt="Dogbone Workbench" src="img/products/Carruca-Dogbone.jpg">
                            <div class="item-mask">
                                <div class="item-caption">
                                    <h5 class="white">Dogbone Workbench</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
