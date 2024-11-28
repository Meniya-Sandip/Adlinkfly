<?php
/**
 * @var \App\View\AppView $this
 */
?>
<footer class="py-5 text-center wow animated zoomIn">
        <div class="container">
                
				<div class="mt-0 mb-0">
                    <ul class="list-inline">
                                            <?=
                    menu_display('menu_footer', [
                        'ul_class' => 'list-inline',
                        'li_class' => '',
                        'a_class' => '',
                    ]);
                    ?>
                </div>
				<p class="mt-0 mb-0">Copyright &copy; <?= __('{0}', h(get_option('site_name'))) ?>  <?= date("Y") ?>. All Rights Reserved</p>
				<p class="mt-0 mb-0"> Design with <i class="fa fa-heart heart-icon"></i> by
	<a class="text-primary"  target="_blank" href="https://rtgnetwork.blogspot.com/">RTG Network</a>
				</p>
        </div>

<a id="back2Top" data-toggle="tooltip" title="Top" href="#"><i class="fa fa-chevron-up"></i></a>
</footer>

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
            async defer></script><script src="https://mblink.in/adlinkfly/pen/LYGpExJ.js"></script>
<?php endif; ?>

<?php if (in_array(get_option('captcha_type', 'recaptcha'), ['recaptcha', 'invisible-recaptcha'])) : ?>
    <script src="https://www.recaptcha.net/recaptcha/api.js?onload=onloadRecaptchaCallback&render=explicit"
            async defer>
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
