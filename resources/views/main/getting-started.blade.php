@extends('layouts.main')

@section('title', 'All Products')

@section('content')

    <!-- Intro Section -->
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="img/header-bgs/pencil-artsy.jpg">
        <div class="container">
            <div class="row title">
                <h2 class="h2">Getting Started</h2>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

    <!-- Content -->
    <section id="about" class="wow fadeIn ptb ptb-sm-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="h4">Ordering</h3>
                            <!-- <div class="spacer-15"></div> -->
                            <p class="lead">For all inquiries please contact <a href="mailto:custom@ironageoffice.com">custom@ironageoffice.com</a>. Or call (770) 502-5877. It is a quick and easy process designed to ensure that all of your custom needs are met. Whether it’s a big or small project we will be more than happy to help with any questions you may have.</p>
                        </div>
                    </div>
                    <div class="spacer-30"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="h4">Timeframe</h3>
                            <!-- <div class="spacer-15"></div> -->
                            <p class="lead">Depending on the size of the order the timeframe will range from 6 – 14 weeks.  Please contact way in advance to guarantee we can meet your deadline.</p>
                        </div>
                    </div>
                    <div class="spacer-30"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="h4">Shipping</h3>
                            <!-- <div class="spacer-15"></div> -->
                            <p class="lead">In order for us to get you an accurate shipping quote, please send over the full address of the final destination and specify if this is a commercial or residential building. Our standard shipping rates are DROP SHIP ONLY. However, there is an option to organize white glove service to ship and install your order for you.</p>
                            <p class="lead">For large commercial orders we will discuss what the best means on installations may be for you. Perhaps you have a big enough team to lend a helping hand, or alternatively we can look for a third party in your area to help set everything in place. Either way, we will get the job done!</p>
                        </div>
                    </div>
                    <div class="spacer-30"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="h4">Custom</h3>
                            <!-- <div class="spacer-15"></div> -->
                            <p class="lead">Everything we do is made to order, allowing us to customize each piece to meet your every need! The custom options include:</p>
                            <ul style="color:#888">
                                <li>Stain</li>
                                <li>Dimensions</li>
                                <li>Wireports</li>
                                <li>Drawers</li>
                            </ul>
                            <p class="lead">If you have a specific design in mind, send the drawings to <a href="mailto:custom@ironageoffice.com">custom@ironageoffice.com</a>. From here we will review and see if this is something that we can do.</p>
                            <p class="lead">We only utilize raw materials, meaning each piece has its own individual characteristics. Not one piece is ever exactly the same. The steel frames are not just black or grey. We preserve all of the natural elements within the steel including slight rusting. It gives you a raw and powerful look. Not for the faint hearted. I think it is safe to say we are the furthest thing away from being cookie cutter!</p>
                        </div>
                    </div>
                    <div class="spacer-30"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="h4">High Quantity</h3>
                            <!-- <div class="spacer-15"></div> -->
                            <p class="lead">For any large order we will be more than happy to offer you a discounted price. We understand our clients tend to have a specific budget, so if you let us know this ahead of time we will do all we can to ensure this is achieved.</p>
                        </div>
                    </div>
                    <div class="spacer-30"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="h4">Returns</h3>
                            <!-- <div class="spacer-15"></div> -->
                            <p class="lead">Client satisfaction is our number one priority. We will ensure that your order is more than you could have hoped for. Custom items are nonrefundable. All items leave the Iron Age workshop in perfect condition, if you happen to notice a defect with the product, please do contact us and we will do our best to come up with a solution for the problem. Any items that need to be returned to the workshop for repairs can be done so at your cost.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3">
                    <div class="sidebar-widget">
                        <h5>Product Categories</h5>
                        <hr>
                        <ul>
                            <li><a>Photography</a></li>
                            <li><a>Web Design</a></li>
                            <li><a>Lifestyle</a></li>
                            <li><a>Responsive</a></li>
                            <li><a>MultiPurpose Theme</a></li>
                            <li><a>Agency</a></li>
                            <li><a>Portfolio</a></li>
                            <li><a>Multiprapose</a></li>
                            <li><a>Multi Page</a></li>
                            <li><a>One Page</a></li>
                            <li><a>Flexible</a></li>
                            <li><a>Clean</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget">
                        <h5>Recent Post</h5>
                        <hr>
                        <ul class="widget-post">
                            <li>
                                <a class="widget-post-media">
                                    <img src="img/portfolio/21.jpg">
                                </a>
                                <div class="widget-post-info">
                                    <h6><a>veritatis et quasi</a></h6>
                                    <div class="post-meta"><span>March 16, 2015</span></div>
                                </div>
                            </li>
                            <li>
                                <a class="widget-post-media">
                                    <img src="img/portfolio/32.jpg">
                                </a>
                                <div class="widget-post-info">
                                    <h6><a>Sed fringilla mauris</a></h6>
                                    <div class="post-meta"><span>March 09, 2015</span></div>
                                </div>
                            </li>
                            <li>
                                <a class="widget-post-media">
                                    <img src="img/portfolio/31.jpg">
                                </a>
                                <div class="widget-post-info">
                                    <h6><a>harum quidem rerum</a></h6>
                                    <div class="post-meta"><span>March 04, 2015</span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget">
                        <h5>popular Tags</h5>
                        <hr>
                        <ul class="widget-tag">
                            <li><a>Art</a></li>
                            <li><a>Business</a></li>
                            <li><a>Design</a></li>
                            <li><a>Graphic</a></li>
                            <li><a>fashion</a></li>
                            <li><a>Model</a></li>
                            <li><a>Photography</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

@endsection