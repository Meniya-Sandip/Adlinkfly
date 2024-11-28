<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php
$this->assign('title', __('Create an Account'));
$this->assign('description', __('Register a new membership'));
?>
<!-- ! -->
<div class="login-signup">
<span> Already have an account?</span>
<a href="/auth/signin" class="login-link login-font-b">Log In</a>
</div>
</div></div>


<div class="gride-m  gride  gride-r  gride-id">
<div class="login-body">
<div class="login-warp">
<div class="login__container">
    
<p class="login-box-msg"><?= __('Register') ?></p>

<?= $this->Flash->render() ?>
<!-- /! -->

<?= $this->Form->create($user, ['id' => 'signup-form']); ?>

<?=
$this->Form->control('username', [
    'label' => false,
    'placeholder' => __('Username'),
    'class' => 'form-control'
])
?>

<?=
$this->Form->control('email', [
    'label' => false,
    'placeholder' => __('Email'),
    'class' => 'form-control'
])
?>

<?=
$this->Form->control('password', [
    'label' => false,
    'placeholder' => __('Password'),
    'class' => 'form-control'
])
?>

<?=
$this->Form->control('password_compare', [
    'type' => 'password',
    'label' => false,
    'placeholder' => __('Re-enter Password'),
    'class' => 'form-control'
])
?>

<?php if ((get_option('enable_captcha_signup') == 'yes') && isset_captcha()) : ?>
    <div class="form-group captcha">
        <div id="captchaSignup" style="display: inline-block;"></div>
    </div>
<?php endif; ?>

<div class="form-group">
    <?= $this->Form->control('accept', [
        'type' => 'checkbox',
        'label' => "<b>" . __(
                "I agree to the {0} and {1}.",
                "<a href='" . $this->Url->build('/') . 'pages/terms' . "' target='_blank'>" .
                __('Terms of Use') . "</a>",
                "<a href='" . $this->Url->build('/') . 'pages/privacy' . "' target='_blank'>" .
                __('Privacy Policy') . "</a>"
            ) . "</b>",
        'escape' => false
    ]) ?>
</div>

<?= $this->Form->button(__('Register <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'), [
    'class' => 'btn btn-primary btn-block btn-flat btn-captcha',
    'id' => 'invisibleCaptchaSignup'
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
                '?' => ['redirect' => $this->request->getQuery('redirect')]
            ],
            [
                'class' => 'btn btn-block btn-social btn-facebook',
                'style' => 'margin-bottom: 5px;',
                'escape' => false
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
                '?' => ['redirect' => $this->request->getQuery('redirect')]
            ],
            [
                'class' => 'btn btn-block btn-social btn-twitter',
                'style' => 'margin-bottom: 5px;',
                'escape' => false
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
                '?' => ['redirect' => $this->request->getQuery('redirect')]
            ],
            [
                'class' => 'btn btn-block btn-social btn-google',
                'style' => 'margin-bottom: 5px;',
                'escape' => false
            ]
        );
        ?>
    <?php endif; ?>
</div>

<div class="lop">Already have an account?<a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'signin', 'prefix' => 'auth']); ?>"
   class="text-center"> <?= __('Login here') ?></a>
