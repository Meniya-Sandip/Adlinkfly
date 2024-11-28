<?php
/**
 * @var \App\View\AppView $this
 */
?>
<footer id="footer" class="footer-area bg_cover" style="background-image: url(assets/images/footer-bg.jpg);">
        <div class="footer-shape shape-1"></div>

        <div class="container">
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="footer-widget-wrapper">
                            <div class="footer-about mt-45">
                                <h3 class="footer-title"><?= __('{0}', h(get_option('site_name'))) ?></h3>
                                <p><?= __('{0}', h(get_option('site_name'))) ?> is a completely free tool where you can create short links, which apart from being free, you get paid! So, now you can make money from home, when managing and protecting your links.</p>
                                <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>

                            <div class="footer-link mt-45">
                                <h4 class="footer-title">Explore</h4>

                                <ul class="link">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Services</a></li>
                                </ul>
                            </div>

                            <div class="footer-contact mt-45">
                                <h4 class="footer-title">Contact</h4>

                                <ul class="contact-info">
                                    <li>
                                        <div class="single-contact">
                                            <i class="fas fa-phone-square"></i>
                                            <div class="contact-text">
                                                <p><a href="tell:6668880000">666 888 0000</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact">
                                            <i class="fas fa-envelope"></i>
                                            <div class="contact-text">
                                                <p><a href="mailto:needhelp@ruxin.com">needhelp@site.com</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div class="contact-text">
                                                <p>855 road, broklyn street new york 600</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-newsletter mt-45">
                            <h4 class="footer-title">Newsletter</h4>

                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="text" placeholder="Email address">
                                    <button><i class="fas fa-envelope"></i></button>
                                </form>
                            </div>
                            <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
                        </div>
                    </div>
                </div>
            </div>
<center>
            <p class="mt-0 mb-0">Copyright &copy; <?= __('{0}', h(get_option('site_name'))) ?>  <?= date("Y") ?>. All Rights Reserved</p>
				<p class="mt-0 mb-0"> Design with <i class="fa fa-heart heart-icon"></i> by
	<a class="text-primary"  target="_blank" href="https://hive-store.com/">Hive-Store</a>
				</p></center>
        </div>
    </footer>

    <!--====== Footer Ends ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== All Plugins js ======-->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.easing.min.js"></script>
    <script src="assets/js/plugins/scrolling-nav.js"></script>
    <script src="assets/js/plugins/wow.min.js"></script>
    
    
    <!--====== Main Activation  js ======-->
    <script src="assets/js/main.js"></script>

<?= $this->element('js_vars'); ?>

<script data-cfasync="false" src="<?= $this->Assets->url('/js/ads.js') ?>"></script>


<?php
if ((bool)get_option('combine_minify_css_js', false)) {
    echo $this->Assets->script('/build/js/script.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/build/js/script.all.min.js?ver=' . APP_VERSION);
} else {
    echo $this->Assets->script('/vendor/jquery.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/bootstrap/js/bootstrap.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/owl/owl.carousel.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/wow.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/clipboard.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/js/front.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/js/app.js?ver=' . APP_VERSION);
}
?>
<?php if (in_array(get_option('captcha_type', 'recaptcha'), ['recaptcha', 'invisible-recaptcha'])) : ?>
    <script src="https://www.recaptcha.net/recaptcha/api.js?onload=onloadRecaptchaCallback&render=explicit"
            async defer></script>
<?php endif; ?>

<?php if (get_option('captcha_type') == 'solvemedia') : ?>
    <script language="javascript" type="text/javascript">
      var script = document.createElement('script');
      script.type = 'text/javascript';

      if (location.protocol === 'https:') {
        script.src = 'https://api-secure.solvemedia.com/papi/challenge.ajax';
      } else {
        script.src = 'http://api.solvemedia.com/papi/challenge.ajax';
      }
      document.body.appendChild(script);
    </script>
<?php endif; ?>

<?= $this->fetch('scriptBottom') ?>
<?= get_option('footer_code'); ?>
