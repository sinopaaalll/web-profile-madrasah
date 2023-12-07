<!-- Footer -->

<footer class="footer">
    <div class="footer_content">
        <div class="container">
            <div class="row">

                <!-- Footer About -->
                <div class="col-lg-3 footer_col">
                    <div class="footer_about">
                        <div class="footer_logo">
                            <a href="#">
                                <div>Dr<span>PRO</span></div>
                                <div>Plastic Surgery</div>
                            </a>
                        </div>
                        <div class="footer_about_text">
                            <p>Nulla facilisi. Nulla egestas vel lacus sed interdum. Sed mollis, orci eleme ntum eleifend tempor, nunc libero porttitor tellus.</p>
                        </div>
                    </div>
                </div>

                <!-- Footer Contact Info -->
                <div class="col-lg-3 footer_col">
                    <div class="footer_contact">
                        <div class="footer_title">Contact Info</div>
                        <ul class="contact_list">
                            <li>+53 345 7953 32453</li>
                            <li>yourmail@gmail.com</li>
                            <li>contact@gmail.com</li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Locations -->
                <div class="col-lg-3 footer_col">
                    <div class="footer_location">
                        <div class="footer_title">Our Locations</div>
                        <ul class="locations_list">
                            <li>
                                <div class="location_title">Miami</div>
                                <div class="location_text">45 Creekside Av FL 931</div>
                            </li>
                            <li>
                                <div class="location_title">Los Angeles</div>
                                <div class="location_text">1481 Creekside Lane Avila Beach, CA 931</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Opening Hours -->
                <div class="col-lg-3 footer_col">
                    <div class="opening_hours">
                        <div class="footer_title">Opening Hours</div>
                        <ul class="opening_hours_list">
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>Monday:</div>
                                <div class="ml-auto">8:00am - 9:00pm</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>Thuesday:</div>
                                <div class="ml-auto">8:00am - 9:00pm</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>Wednesday:</div>
                                <div class="ml-auto">8:00am - 9:00pm</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>Thursday:</div>
                                <div class="ml-auto">8:00am - 9:00pm</div>
                            </li>
                            <li class="d-flex flex-row align-items-start justify-content-start">
                                <div>Friday:</div>
                                <div class="ml-auto">8:00am - 7:00pm</div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
                        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <nav class="footer_nav ml-md-auto">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="blog.html">News</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="<?= base_url('assets/user/') ?>js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/user/') ?>styles/bootstrap-4.1.2/popper.js"></script>
<script src="<?= base_url('assets/user/') ?>styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/easing/easing.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="<?= base_url('assets/user/') ?>js/custom.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });

    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>

</html>