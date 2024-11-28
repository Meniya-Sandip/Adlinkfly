<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php
$this->assign('title', __('Sign In'));
$this->assign('description', __('Sign in to start your session'));
?>

<!-- ! -->
<div class="login-signup">
<span>You don't have an account?</span>
<a href="/auth/signup" class="login-link login-font-b">Create an account</a>
</div>
</div></div>


<div class="gride-m  gride  gride-r  gride-id">
<div class="login-body">
<div class="login-warp">
<div class="login__container">

<p class="login-box-msg"><?= __('Login') ?></p>

<?= $this->Flash->render() ?>
<!-- /! -->

<?= $this->Form->create($user, ['id' => 'signin-form']); ?>

<?=
$this->Form->control('username', [
    'label' => __('Username / Email Address'),
    'placeholder' => __('Username or email address'),
    'class' => 'form-control',
])
?>


<a href="/auth/forgot-password" style="float:right;font-size:0.9em;font-weight:bold;margin-top:12px;">Forgot Password</a><span class="help-block"></span>


<?=
$this->Form->control('password', [
    'label' => __('Password'),
    'placeholder' => __('Password'),
    'class' => 'form-control',
])
?>

<?= $this->Form->control('remember_me', [
    'type' => 'checkbox',
    'label' => __('Remember me'),
]) ?>


<?php if ((get_option('enable_captcha_signin', 'no') == 'yes') && isset_captcha()) : ?>
    <div class="form-group captcha">
        <div id="captchaSignin" style="display: inline-block;"></div>
    </div>
<?php endif; ?>

<?= $this->Form->button(__('Login <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>'), [
    'class' => 'btn btn-primary btn-block btn-flat btn-captcha',
    'id' => 'invisibleCaptchaSignin',
]); ?>

<?= $this->Form->end() ?>

<div class="social-auth-links text-center">
    <p>- <?= __("OR") ?> -</p>

    <?php if ((bool)get_option('social_login_facebook', false)) : ?>
        <?php
        echo $this->Form->postLink(
            '<i class="fa fa-facebook"></i> ' . __("Log in with Facebook"),
            [
                'prefix' => false,
                'plugin' => 'ADmad/SocialAuth',
                'controller' => 'Auth',
                'action' => 'login',
                'provider' => 'facebook',
                '?' => ['redirect' => $this->request->getQuery('redirect')],
            ],
            [
                'class' => 'btn btn-block btn-social btn-facebook',
                'style' => 'margin-bottom: 5px;',
                'escape' => false,
            ]
        );
        ?>
    <?php endif; ?>

    <?php if ((bool)get_option('social_login_twitter', false)) : ?>
        <?php
        echo $this->Form->postLink(
            '<i class="fa fa-twitter"></i> ' . __("Log in with Twitter"),
            [
                'prefix' => false,
                'plugin' => 'ADmad/SocialAuth',
                'controller' => 'Auth',
                'action' => 'login',
                'provider' => 'twitter',
                '?' => ['redirect' => $this->request->getQuery('redirect')],
            ],
            [
                'class' => 'btn btn-block btn-social btn-twitter',
                'style' => 'margin-bottom: 5px;',
                'escape' => false,
            ]
        );
        ?>
    <?php endif; ?>

    <?php if ((bool)get_option('social_login_google', false)) : ?>
        <?php
        echo $this->Form->postLink(
            '<i class="fa fa-google"></i> ' . __("Log in with Google"),
            [
                'prefix' => false,
                'plugin' => 'ADmad/SocialAuth',
                'controller' => 'Auth',
                'action' => 'login',
                'provider' => 'google',
                '?' => ['redirect' => $this->request->getQuery('redirect')],
            ],
            [
                'class' => 'btn btn-block btn-social btn-google',
                'style' => 'margin-bottom: 5px;',
                'escape' => false,
            ]
        );
        ?>
    <?php endif; ?>
</div>


<?php if ((bool)get_option('close_registration', false) === false) : ?>
   <div class="lop">You do not have an account?<a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'signup', 'prefix' => 'auth']); ?>"
       class="text-center">  Create an account</a></div>
<?php endif; ?>

<?php $this->start('scriptBottom'); ?>

<script>
  var url_href = window.location.href;
  if (url_href.substr(-1) === '#') {
    history.pushState('', document.title, url_href.substr(0, url_href.length - 1));
  }
</script>

<?php $this->end(); ?>
