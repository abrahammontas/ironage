@extends('layouts.main')

@section('title', 'Blog')

@section('content')

    <!-- Intro Section -->
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="img/IAO/products-bg.jpg">
        <div class="container">
            <div class="row title">
                <h2 class="h2">Blog</h2>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->


    <!-- Blog Post Section -->
    <section class="ptb ptb-sm-80">
        <div class="container">
            <!-- Post Item -->

            <?php $count = 0; ?>

            <!--  -->
            @while(count($posts) > $count)

                @if(count($posts) - $count == 1)

                    <?php $post_one = $posts[$count]; ?>

                    <div class="row">

                        <div class="col-md-6 nf-item spacing-grid pull-left">
                            <div class="blog-post">
                                <div class="post-media">
                                    <a href="{{ route('post', $post_one->id) }}"><img class="item-container" src="{{Storage::url('post_img/' . $post_one->image)}}" /></a>
                                </div>
                                <div class="post-meta">
                                    <span>{{ date('m/d/Y', strtotime($post_one->date)) }}</span>
                                </div>
                                <div class="post-header">
                                    <h5><a href="{{ route('post', $post_one->id) }}">{{ $post_one->title }}</a></h5>
                                </div>
                                <div class="post-entry">
                                    {{ substr(strip_tags($post_one->content), 0, strpos(strip_tags($post_one->content), ' ', 250)) . '...' }}
                                </div>
                                <div class="post-more-link pull-left">
                                    <a href="{{ route('post', $post_one->id) }}">Read More<i class="fa fa-long-arrow-right right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                @else

                    <?php $post_one = $posts[$count]; ?>
                    <?php $count++; ?>
                    <?php $post_two = $posts[$count]; ?>

                    <div class="row">

                        <div class="col-md-6 nf-item spacing-grid pull-left">
                            <div class="blog-post">
                                <div class="post-media">
                                    <a href="{{ route('post', $post_one->id) }}"><img class="item-container" src="{{Storage::url('post_img/' . $post_one->image)}}" /></a>
                                </div>
                                <div class="post-meta"><span>{{ date('m/d/Y', strtotime($post_one->date)) }}</span></div>
                                <div class="post-header">
                                    <h5><a href="{{ route('post', $post_one->id) }}">{{ $post_one->title }}</a></h5>
                                </div>
                                <div class="post-entry">
                                    {{ substr(strip_tags($post_one->content), 0, strpos(strip_tags($post_one->content), ' ', 250)) . '...' }}
                                </div>
                                <div class="post-more-link pull-left">
                                    <a href="{{ route('post', $post_one->id) }}">Read More<i class="fa fa-long-arrow-right right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 nf-item spacing-grid pull-left">
                            <div class="blog-post">
                                <div class="post-media">
                                    <a href="{{ route('post', $post_two->id) }}"><img class="item-container" src="{{Storage::url('post_img/' . $post_two->image)}}" /></a>
                                </div>
                                <div class="post-meta"><span>{{ date('m/d/Y', strtotime($post_two->date)) }}</span></div>
                                <div class="post-header">
                                    <h5><a href="{{ route('post', $post_two->id) }}">{{ $post_two->title }}</a></h5>
                                </div>
                                <div class="post-entry">
                                    {{ substr(strip_tags($post_two->content), 0, strpos(strip_tags($post_two->content), ' ', 250)) . '...' }}
                                </div>
                                <div class="post-more-link pull-left">
                                    <a href="{{ route('post', $post_two->id) }}">Read More<i class="fa fa-long-arrow-right right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                @endif

                <?php $count++; ?>

            @endwhile

        <!-- Pagination Nav -->
            <!-- <div class="pagination-nav mt-60 mt-xs-30">
                <ul>
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div> -->
            <!-- End Pagination Nav -->

        </div>
    </section>
    <!-- End Blog Post Section -->


@endsection
