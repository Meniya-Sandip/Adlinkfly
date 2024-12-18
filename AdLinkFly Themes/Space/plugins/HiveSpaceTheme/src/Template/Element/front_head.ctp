<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Html->charset(); ?>
<title><?= h($this->fetch('title')); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?= h($this->fetch('description')); ?>">
<meta name="keywords" content="<?= h(get_option('seo_keywords')); ?>">

<?= $this->Assets->favicon() ?>

<link href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:300,300i,400" rel="stylesheet">

<!--===== Vendor CSS (Bootstrap & Icon Font) =====-->

    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">
    <link rel="stylesheet" href="assets/css/plugins/default.css">


    <!--===== Plugins CSS (All Plugins Files) =====-->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">

    <!--====== Main Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">


<?php
if ((bool)get_option('combine_minify_css_js', false)) {
    echo $this->Assets->css('/build/css/styles.min.css?ver=' . APP_VERSION);
} else {
    echo $this->Assets->css('/vendor/bootstrap/css/bootstrap.min.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/vendor/font-awesome/css/font-awesome.min.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/vendor/animate.min.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/vendor/owl/owl.carousel.min.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/vendor/owl/owl.theme.default.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/css/front.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/css/app.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/css/spritesheet.css?ver=' . APP_VERSION);
}

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>



<link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">

<?= get_option('head_code'); ?>
<?= $this->fetch('scriptTop') ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
