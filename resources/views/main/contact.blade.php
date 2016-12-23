@extends('layouts.main')

@section('title', 'All Products')

@section('content')

    <!-- Intro Section -->
    <section class="inner-intro dark-bg bg-image overlay-dark parallax parallax-background1" data-background-img="img/IAO/perforated-screen.jpg">
        <div class="container">
            <div class="row title">
                <h2 class="h2">Contact Us</h2>
            </div>
        </div>
    </section>
    <!-- End Intro Section -->

    <!-- Contact Section -->
    <section class="ptb ptb-sm-80" style="padding-top:80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h3>Get In Touch</h3>
                    <p class="lead">When reaching out, please provide as much information as possible about your custom requirements. Please contact <a href="mailto:sd@ironageoffice.com">sd@ironageoffice.com</a> for all questions/inquiries.</p>
                </div>
            </div>
            <div class="spacer-75"></div>
            <div class="row text-center">
                <div class="col-md-8 contact col-md-offset-2">
                    <div class="contact-box-center mb-45">
                        <h6>Contact Info</h6>
                        <p>
                            Office:<br />
                            1701 Barrett Lakes Blvd, Suite 160<br />
                            Kennesaw, GA 30144<br/>
                            <br />
                            Workshop:<br />
                            18 Commerce Dr<br />
                            Cartersville, GA 30120
                        </p>
                        <a href="mailto:sd@ironageoffice.com"><i class="fa fa-envelope-o left"></i>sd@ironageoffice.com</a><br />
                        <a><i class="fa fa-phone left"></i>(770) 502-5877</a>
                    </div>
                    <div class="contact-box-center mb-45">
                        <div class="contact-icon-left"></div>
                        <h6>Business Hours</h6>
                        <p>
                            <span>Monday - Friday: 9am to 5pm</span><br />
                            <span>Saturday & Sunday: Closed</span>
                        </p>
                    </div>
                    <div class="contact-box-center mb-45">

                        <h6>Follow Us</h6>
                        <ul class="list-none social">
                            <li><a href="https://instagram.com/ironageoffice" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/ironageoffice" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/seandineen90" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <?php /* <div class="col-md-6 col-md-offset-1">
                        <?php if(isset($_POST['form_submit'])) { echo $message; } ?>
                        <div style="margin-bottom:20px;"></div>
                        <!-- Contact FORM -->
                        <form class="contact-form" id="contact" method="post" action="" role="form">

                            <div class="form-field-wrapper">
                                <input class="input-sm form-full" id="form-name" type="text" name="form_name" placeholder="Full Name" required>
                            </div>

                            <div class="form-field-wrapper">
                                <input class="input-sm form-full" id="form-email" type="email" name="form_email" placeholder="Email" required>
                            </div>

                            <div class="form-field-wrapper">
                                <input class="input-sm form-full" id="form-subject" type="text" name="form_product" placeholder="Product(s)" required>
                            </div>

                            <div class="form-field-wrapper">
                                <textarea class="form-full" id="form-message" rows="7" name="form_message" placeholder="Your Message" required></textarea>
                            </div>

                            <button class="btn btn-md btn-black form-full" type="submit" id="form-submit" name="form_submit">Submit</button>
                        </form>
                        <!-- END Contact FORM -->
                    </div> */ ?>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

@endsection

