<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="<?= locale_get_primary_language(null) ?>">
<head>
    <?= $this->element('front_head'); ?>
</head>
<body class="<?= ($this->request->getParam('_name') === 'home') ? 'home' : 'inner-page' ?>">
<?= get_option('after_body_tag_code'); ?>
<!-- Header -->

<header class="bg-primary text-white">
<div id="particles-js">
</div>
	<nav class="navbar osahan-navbar navbar-expand-lg navbar-dark wow fadeInDown" id="mainNav" >
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
				<?php
            $logo = get_logo();
            $class = '';
            if ($logo['type'] == 'image') {
                $class = 'js-scroll-trigger';
            }
            ?>
            <a class="navbar-brand <?= $class ?>" href="<?= build_main_domain_url('/'); ?>"><?= $logo['content'] ?></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
			            <?=
            menu_display('menu_main', [
                'ul_class' => 'navbar-nav ml-auto',
                'li_class' => 'nav-item ',
                'a_class' => 'nav-link js-scroll-trigger',
            ], true);
            ?>
				
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

<!-- Navigation -->

<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>

<?= $this->element('front_footer'); ?>

</body>

</html>
