@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <section id="intro" class="intro">
        <!-- Static Intro -->
        <div class="bg-intro overlay-dark dark-bg">
            <div class="js-fullscreen-height container">
                <div class="intro-content">
                    <div class="intro-content-inner">
                        <h5>Made In America</h5>
                        <h2 class="h2" style="letter-spacing:15px;">Reimagine Your Workspace</h2>
                        <div class="row">
                            <p class="lead col-md-6 col-md-offset-3" style="padding: 0 25px">Combining carbon steel and butcher block wood to create a unique, industrial style for commercial and residential workspaces.</p>
                        </div>
                        <br>
                        <div><a class="btn btn-md btn-white-line" href="{{ url('/products') }}">Products</a><span class="btn-space-10" style="padding-left:20px;"></span><a href="{{ url('contact') }}" class="btn btn-md btn-white">Custom</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Static Intro -->
    </section>

    <section id="about" class="wow fadeIn ptb ptb-sm-80" style="padding-top:70px; padding-bottom:70px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3 class="h4">Take Pride In Your Workspace</h3>
                    <div class="spacer-15"></div>
                    <p class="lead">Iron Age Office is home to the <b style="color:black;">Carruca Office Desk</b>, a unique and powerful design that looks great in a both modern and industrial environments.</p>
                    <div class="spacer-15"></div>
                    <a class="btn btn-md btn-hover" style="background-color:#323232; color:white;" href="{{ url('product/l-shape-carruca') }}">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- <a class="tipped" data-title="Hey there :)" data-tipper-options='{"direction":"top"}'> -->

    <section id="work" class="wow fadeInUp pt pt-sm-80 text-center" style="padding-top:70px;">
        <div class="container">
            <h3>Popular Products</h3>
            <div class="spacer-30"></div>
            <!-- work Filter -->
            <div class="row">
                <ul class="container-filter categories-filter">
                    <li><a class="categories active" data-filter="*">All</a></li>
                    <li><a class="categories" data-filter=".desks">Desks</a></li>
                    <li><a class="categories" data-filter=".tables">Tables</a></li>
                    <li><a class="categories" data-filter=".storage">Storage</a></li>
                    <li><a class="categories" data-filter=".commercial">Commercial</a></li>
                </ul>
            </div>
            <!-- End work Filter -->
        </div>
        <!-- Work Gallary -->
        <div class="container-fluid ">
            <div class="row">
                <div class="container-grid nf-col-4">

                    <div class="nf-item tables">
                        <div class="item-box">
                            <a href="product/harding-conference-table">
                                <img class="item-container" src="img/home-products/wakefly-conference-table.jpg" alt="Harding-Conference-Table" />
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Harding Conference Table</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item tables">
                        <div class="item-box">
                            <a href="product/harrod-carruca-workstation">
                                <img class="item-container" src="img/home-products/Carruca-Dogbone.jpg" alt="Dogbone-Workstation" />
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Dogbone Workstation</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item desks">
                        <div class="item-box">
                            <a href="product/l-shape-carruca">
                                <img class="item-container" src="img/home-products/l-carruca-desk.jpg" alt="L-Shape-Carruca-Desk" />
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">L-Shape Carruca Desk</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item storage">
                        <div class="item-box">
                            <a href="product/helvetica-shelving">
                                <img class="item-container" src="img/home-products/helvetica-shelving-unit.jpg" alt="Helvetica-Shelving-Unit" />
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Helvetica Shelving Unit</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item storage">
                        <div class="item-box">
                            <a href="product/credenza">
                                <img class="item-container" src="img/home-products/credenza.jpg" alt="Edwin-Credenza" />
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Credenza</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item commercial">
                        <div class="item-box">
                            <a href="product/bastille-workstation">
                                <img class="item-container" src="img/home-products/workstation-v1.jpg" alt="Bastille-Workstation" />
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Bastille Workstation</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item tables">
                        <div class="item-box">
                            <a href="product/glenn-table">
                                <img class="item-container" src="img/home-products/glenn-conference-table.jpg" alt="Glenn-Conference-Table" />
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Glenn Conference/Worktop Table</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item desks">
                        <div class="item-box">
                            <a href="product/l-shape-brooklyn">
                                <img class="item-container" src="img/home-products/l-brooklyn-desk.jpg" alt="L-Shape-Brooklyn-Desk" />
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">L-Shape Brooklyn Desk</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Work Gallary -->
    </section>

    <section id="action-box" class="ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h4 class="">See a product you like?</h4>
                    <p class="mb-0">Contact one of our design consultants to get started on your custom project.</p>
                </div>
                <div class="col-md-4 col-sm-4">

                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-md btn-black float-right float-none-xs" style="margin-top:10px" data-toggle="modal" data-target="#contact"> </button>-->
                    <a class="btn btn-md float-right float-none-xs" style="background-color:black; color:white;" href="mailto:sd@ironageoffice.com">Contact Your Design Consultant</a>

                    <!-- Modal -->
                <!-- <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="form-title">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" style="color:black;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="form-title" style="color:#323232;">Fill Out Form Below</h4>
                          </div>
                          <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
            </div>
        </div>
    </section>

    <section class="ptb ptb-sm-80" style="padding-top:80px;padding-bottom:80px;">
        <div class="container">
            <div class="row text-center">
                <h3>Getting Started</h3>
            </div>
            <div class="spacer-60"></div>
            <div class="row">
                <!-- Tab Style1 -->
                <div class="col-md-10 col-md-offset-1">
                    <div class="tabs">
                        <ul>
                            <li><a href="#ordering"><i class="ion ion-ios-cart left"></i>Ordering</a></li>
                            <li><a href="#timeframe"><i class="ion ion-ios-clock left"></i>Timeframe</a></li>
                            <li><a href="#shipping"><i class="ion ion-log-in left"></i>Shipping</a></li>
                            <li><a href="#custom"><i class="ion ion-ios-paper left"></i>Custom</a></li>
                            <li><a href="#high-quantity"><i class="ion ion-ios-plus left"></i>High Quantity Orders</a></li>
                            <li><a href="#returns"><i class="ion ion-android-arrow-back left"></i>Returns</a></li>
                        </ul>
                        <div class="ui-tab-content">
                            <div id="ordering">
                                <p>For all inquiries please contact <a href="mailto:custom@ironageoffice.com">custom@ironageoffice.com</a>. Or call (770) 502-5877. It is a quick and easy process designed to ensure that all of your custom needs are met. Whether it’s a big or small project we will be more than happy to help with any questions you may have.</p>
                            </div>
                            <div id="timeframe">
                                <p>Depending on the size of the order the timeframe will range from 6 – 14 weeks.  Please contact way in advance to guarantee we can meet your deadline.</p>
                            </div>
                            <div id="shipping">
                                <p>In order for us to get you an accurate shipping quote, please send over the full address of the final destination and specify if this is a commercial or residential building. Our standard shipping rates are DROP SHIP ONLY. However, there is an option to organize white glove service to ship and install your order for you.</p>
                                <p>For large commercial orders we will discuss what the best means on installations may be for you. Perhaps you have a big enough team to lend a helping hand, or alternatively we can look for a third party in your area to help set everything in place. Either way, we will get the job done!</p>
                            </div>
                            <div id="custom">
                                <p>Everything we do is made to order, allowing us to customize each piece to meet your every need! The custom options include:</p>
                                <ul style="color:#888">
                                    <li>Stain</li>
                                    <li>Dimensions</li>
                                    <li>Wireports</li>
                                    <li>Drawers</li>
                                </ul>
                                <p>If you have a specific design in mind, send the drawings to <a href="mailto:custom@ironageoffice.com">custom@ironageoffice.com</a>. From here we will review and see if this is something that we can do.</p>
                                <p>We only utilize raw materials, meaning each piece has its own individual characteristics. Not one piece is ever exactly the same. The steel frames are not just black or grey. We preserve all of the natural elements within the steel including slight rusting. It gives you a raw and powerful look. Not for the faint hearted. I think it is safe to say we are the furthest thing away from being cookie cutter!</p>
                            </div>
                            <div id="high-quantity">
                                <p>For any large order we will be more than happy to offer you a discounted price. We understand our clients tend to have a specific budget, so if you let us know this ahead of time we will do all we can to ensure this is achieved.</p>
                            </div>
                            <div id="returns">
                                <p>Client satisfaction is our number one priority. We will ensure that your order is more than you could have hoped for. Custom items are nonrefundable. All items leave the Iron Age workshop in perfect condition, if you happen to notice a defect with the product, please do contact us and we will do our best to come up with a solution for the problem. Any items that need to be returned to the workshop for repairs can be done so at your cost.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="spacer-60"></div>

    <section id="statement" class="ptb ptb-sm-80 bg-show overlay-dark dark-bg" style="padding-top:80px; padding-bottom:80px;" data-stellar-background-ratio="0.5">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 mt-80 mb-110">
                    <a class="cbox-iframe" href="https://player.vimeo.com/video/164310790?title=0&amp;byline=0&amp;portrait=0&amp;wmode=transparent">
                        <div class="page-icon-top" style="color:black;"><i class="ion ion-ios-film-outline"></i></div>
                    </a>
                    <h6 style="font-weight:500; color:white;">Take a closer look at your future office.</h6>
                    <div class="spacer-15"></div>
                    <a class="cbox-iframe btn btn-md iao-video" href="https://player.vimeo.com/video/164310790?title=0&amp;byline=0&amp;portrait=0&amp;wmode=transparent">Watch The Video</a>
                </div>
            </div>
        </div>
    </section>

@endsection