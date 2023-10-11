<?php if ($this->getLayoutSetting('block_1Switch') == '1') : ?>
  <!-- block_1 begin -->
  <section class="block_1 pb-5 pt-5 pe-3 ps-3">
    <div class="gaming">
      <div class="block_1-content fade-in">
        <div class="row">
          <div class="col-6 col-sm-3 col-lg-3 text-center">
            <img src="<?=$this->getBaseUrl($this->getLayoutSetting('block_1img1')) ?>" alt="logo">
          </div>
          <div class="col-6 col-sm-3 col-lg-3 text-center">
            <img src="<?=$this->getBaseUrl($this->getLayoutSetting('block_1img2')) ?>" alt="logo">
          </div>
          <div class="col-6 col-sm-3 col-lg-3 text-center">
            <img src="<?=$this->getBaseUrl($this->getLayoutSetting('block_1img3')) ?>" alt="logo">
          </div>
          <div class="col-6 col-sm-3 col-lg-3 text-center">
            <img src="<?=$this->getBaseUrl($this->getLayoutSetting('block_1img4')) ?>" alt="logo">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- block_1 end -->
<?php endif; ?>
