
<?php if (!empty($this->get('welcomeMessage'))) : ?>
<div class="card panel-default">
    <div class="card-body welcomeMessage"><?=$this->alwaysPurify($this->get('welcomeMessage')) ?></div>
</div>
<?php endif; ?>
<?php if ($this->get('receivers') != ''): ?>
    <form id="contactForm" name="contactForm" method="POST" class="form-horizontal">
        <?=$this->getTokenField() ?>
        <div class="col-xs-12 col-flex">
          <div class="row">
            <div class="col-xs-12 col-md-6 d-none">
                <label class="col-lg-2 control-label">
                    <?=$this->getTrans('bot') ?>*
                </label>
                    <input type="text"
                           class="form-control shadow rounded op-0"
                           name="bot"
                           placeholder="Bot" />
            </div>
            <div class="col-xs-12 col-md-6 <?=$this->validation()->hasError('receiver') ? 'has-error' : '' ?>">
                <label for="receiver" class="col-lg-2 control-label">
                    <?=$this->getTrans('receiver') ?>
                </label>
                    <select class="form-control shadow rounded" id="receiver" name="receiver">
                        <?php foreach ($this->get('receivers') as $receiver): ?>
                            <option value="<?=$receiver->getId() ?>"><?=$this->escape($receiver->getName()) ?></option>
                        <?php endforeach; ?>
                    </select>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-flex">
          <div class="row">
            <div class="col-xs-12 col-md-6<?=$this->validation()->hasError('senderName') ? 'has-error' : '' ?>">
                <label for="name" class="col-lg-2 control-label">
                </label>
                    <input type="text"
                           class="form-control shadow rounded op-0"
                           id="name"
                           name="senderName"
                           value="<?=$this->escape($this->originalInput('senderName')) ?>"
                           placeholder="<?=$this->getTrans('name') ?>"/>
            </div>
            <div class="col-xs-12 col-md-6 <?=$this->validation()->hasError('senderEmail') ? 'has-error' : '' ?>">
                <label for="email" class="col-lg-2 control-label">
                </label>
                    <input type="email"
                           class="form-control shadow rounded op-0"
                           id="email"
                           name="senderEmail"
                           value="<?=$this->originalInput('senderEmail') ?>"
                           placeholder="<?=$this->getTrans('email') ?>" />
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="col-lg-12 <?=$this->validation()->hasError('message') ? 'has-error' : '' ?>">
              <label for="message" class="col-lg-2 control-label">
              </label>
                  <textarea class="form-control shadow rounded op-0"
                            id="message"
                            name="message"
                            rows="5"
                            placeholder="<?=$this->getTrans('message') ?>"><?=$this->escape($this->originalInput('message')) ?></textarea>
          </div>
        </div>
        <div class="row mb-3 <?=$this->validation()->hasError('privacy') ? 'has-error' : '' ?>">
            <div class="col-lg-12">
                <div class="checkbox inline op-0 <?=$this->validation()->hasError('privacy') ? 'has-error' : '' ?>">
                    <input type="checkbox" style="margin-left: 0;" id="privacy" name="privacy" value="1"<?=($this->originalInput('privacy')) ? ' checked' : '' ?>> <label for="privacy"><?=$this->getTrans('acceptPrivacy') ?></label>
                </div>
            </div>
        </div>
        <?php if ($this->get('captchaNeeded') && $this->get('defaultcaptcha')) : ?>
            <?=$this->get('defaultcaptcha')->getCaptcha($this) ?>
        <?php endif; ?>
        <div class="col-lg-12 text-center op-0" align="right">
            <?php
                if ($this->get('captchaNeeded')) {
                    if ($this->get('googlecaptcha')) {
                        echo $this->get('googlecaptcha')->setForm('contactForm')->getCaptcha($this, 'addButton', 'Contact');
                    } else {
                        echo $this->getSaveBar('addButton', 'Contact');
                    }
                } else {
                    echo $this->getSaveBar('addButton', 'Contact');
                }
            ?>
        </div>
    </form>
<?php endif; ?>
