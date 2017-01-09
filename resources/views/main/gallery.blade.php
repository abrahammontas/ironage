@extends('layouts.main')

@section('title', 'All Products')

@section('content')

    <!-- Intro Section -->
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="img/gallery/iao-workbench-2a.jpg">
        <div class="container">
            <div class="row title">
                <h2 class="h2">Gallery</h2>
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
                    @foreach($categories as $c)
                        <li><a class="categories" data-filter=".{{$c->name}}">{{$c->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- End work Filter -->
            <div class="row container-masonry nf-col-3">

                @foreach($galleries as $g)
                    <div class="nf-item {{$g->Category->name}}">
                        <div class="item-box">
                            <a class="cbox-gallary1" href="img/gallery/{{$g->name}}">
                                <img alt="morningstar-desk" src="img/gallery/{{$g->name}}" class="item-container">
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </section>
    <!-- End Work Detail Section -->

@endsection

