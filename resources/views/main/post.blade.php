@extends('layouts.main')

@section('title', 'Blog Post')

@section('content')


    <!-- Intro Section -->
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="{{ asset('img/header-bgs/pencil-artsy.jpg') }}">
        <div class="container">
            <div class="row title">
                <h2 class="h2">Blog Post</h2>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->

    <!-- Blog Post Section -->
    <section class="ptb ptb-sm-80">
        <div class="container">
            <div class="row">
                <!-- Post Bar -->
                <div class="col-lg-9 col-md-9 blog-post-hr">

                    <div class="blog-post mb-30">

                        <div class="post-meta"><span>by <a href="/blog">Iron Age Office</a>,</span><span>{{ date('m/d/Y', strtotime($post->date)) }}</span></div>

                        <div class="post-header">
                            <h2>{{ $post->title }}</h2>
                        </div>

                        <div class="post-media" style="margin-bottom:30px;">
                            <img src="{{ Storage::url('post_img/' . $post->image) }}" alt="" class="img-responsive">
                        </div>

                        <div class="post-entry">
                            {!! $post->content !!}
                        </div>

                    </div>

                    <h4><a href="/blog">View All Posts</a></h4>
                    <div class="clearfix"></div>

                </div>
                <!-- End Post Bar -->

                <!-- Sidebar -->
                <div class="col-lg-3 col-md-3 mt-sm-30">

                    <div class="sidebar-widget">
                        <h5>Recent Posts</h5>
                        <hr>
                        <ul class="widget-post-media">
                            @foreach($posts as $recent_post)

                                <li style="margin-bottom:20px;">
                                    <div class="widget-post-info">
                                        <h6 style="font-size:14px; margin-bottom:0px;">
                                            <a href="{{route('post', $recent_post->id)}}">
                                                {{ $recent_post->title }}
                                            </a>
                                        </h6>
                                    </div>
                                    <a href="{{route('post', $recent_post->id)}}" class="widget-post-media" style="padding: 1px;">
                                        <img src="{{ Storage::url('post_img/' . $recent_post->image) }}" alt="" style="margin-bottom:0px;">
                                    </a>
                                    <div class="post-meta">
                                        {{ date('m/d/Y', strtotime($recent_post->date)) }}
                                    </div>
                                </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </section>
    <!-- End Blog Post Section -->

@endsection
