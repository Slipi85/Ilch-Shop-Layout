<?php if ($this->getLayoutSetting('block_8Switch') == '1') : ?>
<!-- begin block_8 -->
<section class="block_8 pt-5 pb-5">
  <div class="container">
    <div class="gaming">
      <div class="block_8-inner pe-3 ps-3">
        <div class="row d-flex align-items-center">
          <div class="col-md-6">
            <h2><?=$this->getLayoutSetting('block_8text')?></h2>
          </div>
          <div class="col-md-6 newsletter_box">
            <?=$this->getBox('newsletter', 'newsletter'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
  .block_8 {background:<?=$this->getLayoutSetting('block_8Bg')?>;color:<?=$this->getLayoutSetting('block_8TextColor')?>;}
  </style>
</section>
<!-- end block_8 -->
<?php endif; ?>
