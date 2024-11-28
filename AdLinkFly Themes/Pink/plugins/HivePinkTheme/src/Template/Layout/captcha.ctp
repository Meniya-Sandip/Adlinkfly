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
<body class="captcha-page">
<?= get_option('after_body_tag_code'); ?>

<header class="bg-primary text-white">
<div id="particles-js">
</div>
	<nav class="navbar osahan-navbar navbar-expand-lg navbar-dark wow animated fadeInDown" id="mainNav" data-wow-delay="0.1s">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
         <?php
            $logo = get_logo();
            $class = '';
            if ($logo['type'] == 'image') {
                $class = 'logo-image';
            }
            ?>
            <a class="navbar-brand <?= $class ?>" href="<?= build_main_domain_url('/'); ?>"><?= $logo['content'] ?></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?=
            menu_display('menu_main', [
                'ul_class' => 'navbar-nav ml-auto',
                'li_class' => 'nav-item',
                'a_class' => 'nav-link js-scroll-trigger',
            ], true);
            ?>
        </div>
       
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
</header>

<section class="blog-block inner-section-padding blog-page">
	<div class="container">
		<div class="row">
			<div class="col-md-10 mx-auto">
            <?= $this->fetch('content') ?>
			</div>
		</div>
	</div>
</section>

<?= $this->element('front_footer'); ?>

</body>
</html>
