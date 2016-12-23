@extends('layouts.main')

@section('title', 'All Products')

@section('content')

    <!-- Intro Section -->
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="img/smoothing-wood.jpg">
        <div class="container">
            <div class="row title">
                <h2 class="h2">Our Story</h2>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->

    <!-- About Section -->
    <section id="about" class="wow fadeIn ptb ptb-sm-80" style="padding-top:">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="h3">British Design Meets U.S. Fabricator</h3>
                    <div class="spacer-60"></div>
                    <p class="lead">Iron Age Office is a joint collaboration between Sean Dineen and Michael Stephens. With Mr. Stephen’s extensive experience as a 2nd generation steel fabricator and Mr Dineen’s influential upbringing in the “steel city” (Sheffield, England), the two share a passion for fabricating raw materials into beautiful, bold structures.</p>
                    <p class="lead">After being introduced by a mutual acquaintance, the two got together and mapped out a plan to combine Mr. Dineen’s keen design eye with Mr. Stephen’s core manufacturing process. Thus, Iron Age Office was born.</p>
                    <p class="lead">Sean thrives off customer relations and implementing the feedback he gets into the way he runs the company. Being open to continuously learn more about the design industry, Sean has taken IAO from its humble beginning as “desk builders” to furnish entire workspaces across America.</p>
                    <p class="lead">Since that initial chance meeting, Mr. Dineen and Mr. Stephens have quickly distinguished Iron Age Office as a major competitor in the industrial office design space, and is growing its product line to meet customer demand.</p>
                </div>
            </div>
            <div class="mb-80"></div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="h4">Why Iron Age Office?</h3>
                    <div class="spacer-60"></div>
                    <p class="lead">Iron Age Office (“I.A.O.”) is dedicated to crafting office environments that are as unique as you are. Our products take simple work environments and transforms them into beautiful spaces that you and your employees are proud to work in and show off to clients.</p>
                    <p class="lead">We understand that a workspace is not just a place where work gets done, but a place where creativity and inspiration are cultivated, and where partnerships are formed and success is forged. Having an Iron Age Office product in your office will give you the confidence to close that deal you've been working on for so long and the inspiration to never settle for less than you deserve.</p>
                    <p class="lead">At competitors, you can expect to pay 3-4 times more for similar office furnishings than you will pay at Iron Age Office. That doesn't mean the quality of our products is any lesser than that of our competitors; in fact, the quality of our workmanship is the reason we've had so many repeat customers. They're not only satisfied with the quality craftsmanship of the furniture, but they and their colleagues are amazed at how exceptional it looks in their workspace.</p>
                </div>
            </div>
        </div>
    </section>

    <hr />
    <!-- meet the team -->
    <?php /*
        <section class="ptb ptb-sm-80">
            <div class="container text-center">
                <h3>Meet The Team</h3>
                <div class="spacer-60"></div>
                <!--Team Carousel -->
                <div class="row">
                    <div class="owl-carousel team-carousel nf-carousel-theme">

                        <div class="item">
                            <div class="team-item nf-col-padding">
                                <div class="team-item-img">
                                    <img src="img/our-story-josh.jpg" height="400px" alt="" />
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>Mitchell KAPPOS</h5>
                                            <p>Similique sunt culpa qui officia deserunt mollitia animi dolorum fuga.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h5>Mitchell KAPPOS</h5>
                                    <p class="">Designer</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-item nf-col-padding">
                                <div class="team-item-img">
                                    <img src="img/team/people-2.jpg" alt="" />
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>Leonardo da Vinci</h5>
                                            <p>Similique sunt culpa qui officia deserunt mollitia animi dolorum fuga.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h5>Leonardo da Vinci</h5>
                                    <p class="">Artist</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-item nf-col-padding">
                                <div class="team-item-img">
                                    <img src="img/team/people-3.jpg" alt="" />
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>John Doe</h5>
                                            <p>Similique sunt culpa qui officia deserunt mollitia animi dolorum fuga.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h5>John Doe</h5>
                                    <p class="">Project Manager</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-item nf-col-padding">
                                <div class="team-item-img">
                                    <img src="img/team/people-4.jpg" alt="" />
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>Michael Lee</h5>
                                            <p>Similique sunt culpa qui officia deserunt mollitia animi dolorum fuga.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h5>Michael Lee</h5>
                                    <p class="">Photographer</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> */ ?>

@endsection