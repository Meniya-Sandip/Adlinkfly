<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="<?= locale_get_primary_language(null) ?>">
<head>
    <?= $this->Html->charset(); ?>
    <title><?= h($this->fetch('title')); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= h($this->fetch('description')); ?>">
    <meta name="keywords" content="<?= h(get_option('seo_keywords')); ?>">
<?= $this->Assets->css('/build/css/tp98-themes.css?ver=' . APP_VERSION); ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" media="all"><?= $this->Assets->favicon() ?><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <?php
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>

    <?= get_option('auth_head_code'); ?>

    <?= $this->fetch('scriptTop') ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body class="hold-transition login-page"style="font-family:Poppins;"><div class="bg-animation"></div>
<div class="gride gride-r gride-t">
<div class="gride-m   gride-id gride  gride gride-h login" id="kt_login_v2">


<div class="gride-m  gride-h">  

<div class="login-head">

<div class="login-image">
<a href="<?php echo $this->Url->build('/'); ?>"><?= get_logo_alt()['content'] ?></a>
</div>

  <!-- login-box-body sm-->
        

        <?= $this->fetch('content') ?>

  </div></div>
<!--<div class="login-image">-->
<!--<img src="/img/bg_icon.svg" alt="">-->
<!--</div>-->
</div></div>

<!--
<div class="gride-m">
<div class="login-footer">
<div class="login-link">
<a href="#" class="login-link login-font-b"></a>
<a href="/pages/privacy" class="login-link login-font-b">Privacy</a>
<a href="/pages/terms" class="login-link login-font-b">Terms</a>
</div>
<div class="login-info">
<a href="#" class="login-link"><?= __('&copy;') ?> <?= date("Y") ?> <?= h(get_option('site_name')) ?> </a>
</div></div></div>-->

<?= $this->element('js_vars'); ?>

<script data-cfasync="false" src="<?= $this->Assets->url('/js/ads.js') ?>"></script>

<?php
if ((bool)get_option('combine_minify_css_js', false)) {
    echo $this->Assets->script('/build/js/dashboard.min.js?ver=' . APP_VERSION);
} else {
    echo $this->Assets->script('/vendor/jquery.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/bootstrap/js/bootstrap.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/clipboard.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/js/app.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/dashboard/js/app.min.js?ver=' . APP_VERSION);
}
?>

<?php if (in_array(get_option('captcha_type', 'recaptcha'), ['recaptcha', 'invisible-recaptcha'])) : ?>
    <script src="https://www.recaptcha.net/recaptcha/api.js?onload=onloadRecaptchaCallback&render=explicit"
            async defer></script><?php endif; ?>
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
</body>
</html>
