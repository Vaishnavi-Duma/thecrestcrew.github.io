<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Contact US | The Crestcrew International - Food export company | The Crestcrew International</title>
        <meta name="description" content="The Crestcrew International is one of the reputed food export company in India. Contact Us to export food from India.">
        <?php include './head.php'; ?>
    </head>
    <body>
        <?php include './header.php'; ?>

        <div class="page-title-area page-title-img-three">
            <div class="container">
                <div class="page-title-item">
                    <h2>Contact Us</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contact-location-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-item">
                            <img src="assets/img/home-one/service-shape.png" alt="Location">
                            <i class='bx bxs-time-five'></i>
                            <ul>
                                <li>9:00 AM to 8:00 PM</li>
                                <li>(Monday to Saturday)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-item active">
                            <img src="assets/img/home-one/service-shape.png" alt="Location">
                            <i class='bx bxs-location-plus'></i>
                            <ul>
                                <li><a href="https://maps.app.goo.gl/mwr8Mejw35Yss33E6" target="_blank">Dom no:-2 Vrukshal packaging, behind kumkum farm, dabholi gam, <br>Surat - 395004</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="location-item">
                            <img src="assets/img/home-one/service-shape.png" alt="Location">
                            <i class='bx bxs-phone-call'></i>
                            <ul>
                                <li>
                                    <a href="tel:+918238938615">+91 82389 38615</a>
                                </li>
                                <li>
                                    <a href="mailto:inquiry@thecrestcrew.com">
                                        <span class="__cf_email__" data-cfemail="a5cccbc3cae5d7c0d6d1c4cbd18bc6cac8">inquiry@thecrestcrew.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .contact-location-area {
                padding-bottom: 10px;
                padding-top: 35px;
            }
            .contform {
                margin-bottom: 20px;
            }
            .contform .form-control {
                height: 55px;
                border-radius: 30px;
                padding-left: 30px;
                border: 0;
                background-color: #fff;
                font-size: 15px;
            }
            .form-group textarea {
                height: auto !important;
            }
        </style>
        <script>
            function validateForm() {	
                document.getElementById('captchahide').value = 'reCAPTCHASuccess';
            }
        </script>
        <!--<div class="contact-form-area ptb-100 mb-5">-->
        <div class="contact-form-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="contact-item">
                            <form action="contact-query.php" method="post" onsubmit="return validateForm();" >
                                <input type="hidden" id="captchahide" name="captchahide" value="">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-12">
                                        <div class="contform form-group">
                                            <input type="text" name="cname" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-12">
                                        <div class="contform form-group">
                                            <input type="email" name="cemail" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-12">
                                        <div class="contform form-group">
                                            <input type="number" name="phoneno" id="mobile_number" pattern="[0-9]{10}" required data-error="Please enter 10 digit mobile number" class="form-control" placeholder="Mobile Number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="contform form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <input type="submit" value="Send Message" class="cmn-btn btn">
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                            <!--<div class="contact-social">
                                <span>Follow Us on</span>
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                    <!--<div class="col-lg-6">
                        <div class="contact-img">
                            <img src="assets/img/contact-man.png" alt="Contact">
                        </div>
                    </div>-->
                </div>
            </div>
        </div>

        <?php include './footer.php'; ?>
    </body>
</html>