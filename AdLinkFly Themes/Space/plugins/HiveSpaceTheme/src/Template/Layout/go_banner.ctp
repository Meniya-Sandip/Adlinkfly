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
<body class="banner-page">
<?= get_option('after_body_tag_code'); ?>

<header class="bg-primary text-white">

	<nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <?php
            $logo = get_logo();
            $class = '';
            if ($logo['type'] == 'image') {
                $class = 'js-scroll-trigger';
            }
            ?>
            <a class="navbar-brand <?= $class ?>" href="<?= build_main_domain_url('/'); ?>"><?= $logo['content'] ?></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse sub-menu-bar" id="navbarContent">
                    <?=
            menu_display('menu_main', [
                'ul_class' => 'navbar-nav ml-auto',
                'li_class' => 'nav-item ',
                'a_class' => 'nav-link js-scroll-trigger',
            ], true);
            ?>
                    
                </div>
            </div>
        </nav>
</header>

<section class="blog-block inner-section-padding blog-page">
	<div class="container">
		<div class="row">
			<div class="col-md-10 mx-auto">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
			</div>
		</div>
	</div>
</section>

<?= $this->element('front_footer'); ?>

</body>
</html>
