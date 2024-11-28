<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->assign('title', __('Forgot Password'));
$this->assign('description', __('Enter your e-mail address below to reset your password.'));
?>

<!-- ! -->
<div class="login-signup">
<span> Yoy don't have an account?</span>
<a href="/auth/signup" class="login-link login-font-b">Create an account</a>
</div>
</div></div>


<div class="gride-m  gride  gride-r  gride-id">
<div class="login-body">
<div class="login-warp">
<div class="login__container">

<p class="login-box-msg"><?= __('Reset your password!') ?></p>
<?= $this->Flash->render() ?>
<!-- /! -->

<?php if (!isset($user->id)) { ?>

    <?= $this->Form->create($user, ['id' => 'forgotpassword-form']); ?>


    <?=
    $this->Form->control('email', [
        'label' => false,
        'placeholder' => __('Email'),
        'class' => 'form-control',
        'type' => 'email'
    ])
    ?>

    <?php if ((get_option('enable_captcha_forgot_password') == 'yes') && isset_captcha()) : ?>
        <div class="form-group captcha">
            <div id="captchaForgotpassword" style="display: inline-block;"></div>
        </div>
    <?php endif; ?>

    <?= $this->Form->button(__('Send request <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>'), [
        'class' => 'btn btn-primary btn-block btn-flat btn-captcha',
        'id' => 'invisibleCaptchaForgotpassword'
    ]); ?>
    <?= $this->Form->end() ?>

<?php } else { ?>

    <?= $this->Form->create($user); ?>

    <?= $this->Form->hidden('id', ['value' => $user->id]); ?>

    <?=
    $this->Form->control('password', [
        'label' => false,
        'placeholder' => __('New Password'),
        'class' => 'form-control',
        'type' => 'password'
    ])
    ?>

    <?=
    $this->Form->control('confirm_password', [
        'label' => __('Re-enter New Password'),
        'label' => false,
        'placeholder' => __('Re-enter New Password'),
        'class' => 'form-control',
        'type' => 'password'
    ])
    ?>

    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-block btn-flat']); ?>

    <?= $this->Form->end() ?>
<?php } ?>
