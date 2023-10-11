<?php if ($this->getLayoutSetting('block_5Switch') == '1') : ?>
  <!-- begin block_5 -->
<section class="block_5">
  <div class="bg w-100 h-100"></div>
  <div class="gaming">
    <div class="container pb-5 pt-5">
      <div class="col-12">
        <div class="block_5-inner">
          <div class="inner-header text-center text-light">
            <h2><?=$this->getLayoutSetting('block_5Header')?> <span><?=$this->getLayoutSetting('block_5HeaderSpan')?></span></h2>
          </div>
          <div class="info-body text-center mt-5">
            <a href="<?=$this->getLayoutSetting('block_5link1Link')?>" target="_blank" class="rounded-circle me-3 ms-3 btn btn-light shadow" type="button"><i class="<?=$this->getLayoutSetting('block_5link1Icon')?> text-danger" aria-hidden="true"></i></a>
            <a href="<?=$this->getLayoutSetting('block_5link2Link')?>" target="_blank" class="rounded-circle me-3 ms-3 btn btn-light shadow"><i class="<?=$this->getLayoutSetting('block_5link2Icon')?> text-danger" aria-hidden="true"></i></a>
            <a href="<?=$this->getLayoutSetting('block_5link3Link')?>" target="_blank" class="rounded-circle me-3 ms-3 btn btn-light shadow"><i class="<?=$this->getLayoutSetting('block_5link3Icon')?> text-danger" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- block_5 end -->
<?php endif; ?>
