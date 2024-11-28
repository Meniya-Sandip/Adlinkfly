<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?=
$this->Form->create(null, [
    'url' => ['controller' => 'Links', 'action' => 'shorten', 'prefix' => false],
    'id' => 'shorten',
    'class' => 'sign-up-form mb-5'
]);
?>

<?php
$this->Form->setTemplates([
    'inputContainer' => '{{content}}',
    'error' => '{{content}}',
    'inputContainerError' => '{{content}}'
]);
?>

<div class="input-group">
    <?=
    $this->Form->control('url', [
        'label' => false,
        'type' => 'text',
        'placeholder' => __('Your URL Here'),
        'required' => 'required',
        'class' => 'form-control input-lg'
    ]);
    ?>

    <?php
    $ad_type = get_option('anonymous_default_advert', 1);

    if (null !== $this->request->getSession()->read('Auth.User.id')) {
        $ad_type = get_option('member_default_advert', 1);
    }
    ?>

    <?= $this->Form->hidden('ad_type', ['value' => $ad_type]); ?>
<div class="input-group-prepend">
    <?= $this->Form->button($this->Html->tag('span>Shorten </span><i class="fas fa-arrow-right" aria-hidden="true"></i'), [
            'class' => 'btn-captcha btn btn-primary',
            'id' => 'invisibleCaptchaShort'
    ]); ?>
    </div>
</div>

<?php if (!$this->request->getSession()->read('Auth.User.id') &&
    (bool)get_option('enable_captcha_shortlink_anonymous', false) && isset_captcha()
) : ?>
    <div class="form-group captcha" style="display: none">
        <div id="captchaShort" style="display: inline-block;"></div>
    </div>
    <?php
    $this->Form->unlockField('g-recaptcha-response');
    $this->Form->unlockField('adcopy_challenge');
    $this->Form->unlockField('adcopy_response');
    $this->Form->unlockField('captcha_namespace');
    $this->Form->unlockField('captcha_code');
    ?>
<?php endif; ?>

<?= $this->Form->end(); ?>

<div class="shorten add-link-result"></div>
