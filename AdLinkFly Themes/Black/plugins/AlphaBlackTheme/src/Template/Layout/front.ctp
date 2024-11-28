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



<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="menu-h page-scroll">
            <button type="button" class="s-t" >
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
            <div class="fi-img" style="display:none"><img src="/img/bg_icon.svg" alt=""></div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>

<?= $this->element('front_footer'); ?>

</body>

</html>
