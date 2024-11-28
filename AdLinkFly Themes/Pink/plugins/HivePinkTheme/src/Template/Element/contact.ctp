<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="row">
       <div class="col-md-8 mx-auto">
        <?=
        $this->Form->create(null, [
            'url' => ['controller' => 'Forms', 'action' => 'contact', 'prefix' => false],
            'id' => 'contact-form'
        ]);
        ?>

        <?php
        $this->Form->setTemplates([
            'inputContainer' => '{{content}}',
            'error' => '{{content}}',
            'inputContainerError' => '{{content}}'
        ]);
        ?>

        <div class="form-group">
            <?=
            $this->Form->control('name', [
                'label' => __('Your Name *'),
                'type' => 'text',
                'required' => 'required',
                'class' => 'form-control'
            ]);
            ?>
            <p class="help-block text-danger"></p>
        </div>
        <div class="row">
			<div class="control-group form-group col-md-6">
				<div class="controls">
            <?=
            $this->Form->control('email', [
                'label' => __('Your Email *'),
                'type' => 'text',
                'required' => 'required',
                'class' => 'form-control'
            ]);
            ?>
            <p class="help-block text-danger"></p>
				</div>
			</div>
			
            <div class="control-group form-group col-md-6">
				<div class="controls">
            <?=
            $this->Form->control('subject', [
                'label' => __('Your Subject *'),
                'type' => 'text',
                'required' => 'required',
                'class' => 'form-control'
            ]);
            ?>
            <p class="help-block text-danger"></p>
				</div>
			</div>
        </div>
        <div class="control-group form-group">
			<div class="controls">
            <?=
            $this->Form->control('message', [
                'label' => __('Your Message *'),
                'type' => 'textarea',
                'required' => 'required',
                'class' => 'form-control'
            ]);
            ?>
            <p class="help-block text-danger"></p>
			</div>
        </div>

        <div class="">
            <div id="success"></div>
            <?= $this->Form->button(__('Send Message'), [
                'class' => 'btn-captcha btn btn-primary btn-lg btn-block',
                'id' => 'invisibleCaptchaContact'
            ]); ?>
        </div>

        <div class="">
            <div class="mt-3 text-center mb-0">
                <?= $this->Form->control('accept', [
                    'type' => 'checkbox',
                    'label' => "<b>" . __(
                            "I consent to having this website store my submitted information so they can respond to my inquiry."
                        ) . "</b>",
                    'escape' => false,
                    'required' => true
                ]) ?>
            </div>
         </div>

            <?php if ((get_option('enable_captcha_contact') == 'yes') && isset_captcha()) : ?>
                <div class="form-group captcha">
                    <div id="captchaContact" style="display: inline-block;"></div>
                </div>
                <?php
                $this->Form->unlockField('g-recaptcha-response');
                $this->Form->unlockField('adcopy_challenge');
                $this->Form->unlockField('adcopy_response');
                $this->Form->unlockField('captcha_namespace');
                $this->Form->unlockField('captcha_code');
                ?>
            <?php endif; ?>
        </div>



        <?= $this->Form->end(); ?>

        <div class="contact-result"></div>

    </div>
    <div class="hidden-xs col-sm-6 text-center">
        <?= $this->Assets->image('Connection-Image.png'); ?>
    </div>

</div>
