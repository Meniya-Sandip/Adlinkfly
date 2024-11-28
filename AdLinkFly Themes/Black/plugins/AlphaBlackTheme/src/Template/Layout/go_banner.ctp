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
<body class="banner-page"id="container" onmouseover = "verify()">
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
        <div class="menu-fi" >
             <?=
            menu_display('menu_main', [
                'ul_class' => 'nav navbar-nav navbar-right',
                'li_class' => '',
                'a_class' => '',
            ], true);
            ?>
            <div class="fi-img" style="display:none"><img src="/alpha_black_theme/img/bg_icon.svg" alt=""></div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<section class="r-bg"></section>
<section class="rates">
<div class="container">
    <div class="row">
            <?= $this->Flash->render() ?>
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
    echo $this->Assets->script('/alpha_black_theme/build/js/script.min.js?ver=' . APP_VERSION);
} else {
    echo $this->Assets->script('/alpha_black_theme/build/js/script.min.js?ver=' . APP_VERSION);
}
?>

<?php if (in_array(get_option('captcha_type', 'recaptcha'), ['recaptcha', 'invisible-recaptcha'])) : ?><script src="https://www.recaptcha.net/recaptcha/api.js?onload=onloadRecaptchaCallback&render=explicit"
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

</body>
</html>






