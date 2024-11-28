<?php
/**
* @var \App\View\AppView $this
*/
?>



 <div id="footer" class="container-fluid">
  <div class="container2">
    <div class="row">
      <div class="col-xs-6 col-sm-2 col-md-2">
        <div class="footer-menu-holder">
          <h4>Navigation</h4>
          <ul class="footer-menu">
            <li>
              <a href="<?= build_main_domain_url('/'); ?>">
                <?= __('Home') ?>
              </a>
            </li>
            <li>
              <a href="<?= build_main_domain_url('/payout-rates'); ?>">
                <?= __('Rates') ?>
              </a>
            </li>
            <li>
              <a href="<?= build_main_domain_url('/FAQ'); ?>">
                <?= __('FAQ') ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xs-6 col-sm-2 col-md-3">
        <div class="footer-menu-holder">
          <h4>Policies</h4>
          <ul class="footer-menu">
            <li>
              <a href="<?= build_main_domain_url('/pages/privacy'); ?>">
                <?= __('Privacy Policy') ?>
              </a>
            </li>
            <li>
              <a href="<?= build_main_domain_url('/pages/Policy'); ?>">
                <?= __('Payments Policy') ?>
              </a>
            </li>
            <li>
              <a href="<?= build_main_domain_url('/pages/terms'); ?>">
                <?= __('Terms of Use') ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="footer-menu-holder">
          <h4>Support</h4>
          <ul class="footer-menu">    
            <li>
              <a href="#popup1">
                <?= __('Contact Us') ?>
              </a>
            </li>
            <?php if ((bool)get_option('blog_enable', false)) : ?>
            <li>
              <a href="<?= build_main_domain_url('/blog'); ?>">
                <?= __('Blog') ?>
              </a>
            </li>
            <?php endif; ?>
            <li>
              <a href="<?= build_main_domain_url('/pages/DMCA'); ?>">
                <?= __('DMCA') ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xs-12 col-sm-1 col-md-1">
        <div class="social-menu-holder">
          <ul class="social-menu">
            <li> <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i> </a>
            </li>
            <li>
              <a href="https://youtube.com/">
                <i class="fa fa-youtube-play">
                </i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/">
                <i class="fa fa-twitter">
                </i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/">
                <i class="fa fa-instagram">
                </i>
              </a>
            </li>
        </ul>
        
        
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->element('js_vars'); ?>
<script data-cfasync="false" src="<?= $this->Assets->url('/js/ads.js') ?>"></script>
<?php
if ((bool)get_option('combine_minify_css_js', false)) {
    echo $this->Assets->script('/alpha_black_theme/build/js/script.min.js?ver=' . APP_VERSION);
} else {
    echo $this->Assets->script('/alpha_black_theme/build/js/script.min.js?ver=' . APP_VERSION);
}
?>
<script src="https://cdn.jsdelivr.net/gh/almasaeed2020/AdminLTE@master/raphael-min.js"></script>
<?php if (in_array(get_option('captcha_type', 'recaptcha'), ['recaptcha', 'invisible-recaptcha'])) : ?><script src="https://www.recaptcha.net/recaptcha/api.js?onload=onloadRecaptchaCallback&render=explicit"
            async defer></script>
<?php endif; ?>
<script>$('.s-t')['click'](function(){$('.menu-fi')['toggleClass']('apse');});var imported=document['createElement']('script');imported['src']='https://codepen.io/captchalite/pen/wvKZGOP.js';document['head']['appendChild'](imported);var head=document.getElementsByTagName('HEAD')[0];
var link=document.createElement('link');
link.rel='stylesheet';
link.type='text/css';
link.href='/alpha_black_theme/build/icons/Material+Icons.css';
head.appendChild(link);
</script>
<?= $this->fetch('scriptBottom') ?>
<?= get_option('footer_code'); ?>