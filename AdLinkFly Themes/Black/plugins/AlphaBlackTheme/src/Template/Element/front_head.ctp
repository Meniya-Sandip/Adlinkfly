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
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<?php echo $this->Assets->css('/alpha_black_theme/build/css/alpha-theme.css') ?><?= $this->Assets->favicon() ?>


 
<style>.overlay{position:fixed;visibility:hidden;opacity:0}.overlay:target{visibility:visible;opacity:1}.navbar-nav li a {font-size:15px! important}</style>
<!--
    THEME Developer: RTG Network Team.
    Site- Alpha-Digital.store  
    Name- Alpha Black Theme
 -->  
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>

<?= get_option('head_code'); ?>
<?= $this->fetch('scriptTop') ?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
