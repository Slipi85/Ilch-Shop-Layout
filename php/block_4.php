<?php if ($this->getLayoutSetting('block_4Switch') == '1') : ?>
  <!-- begin block_4 -->
<section class="block_4 pt-5 pb-5 bg-light">
  <div class="container">
    <div class="gaming">
      <div class="block_4-inner">
        <div class="row">
          <div class="inner-header mb-3 mt-md-3">
            <h2><?=$this->getLayoutSetting('block_4Header')?> <span><?=$this->getLayoutSetting('block_4HeaderSpan')?></span></h2>
          </div>
          <div class="col-md-6 op-0">
            <div class="card shadow border-0">
              <div class="row">
                <div class="col-lg-6">
                  <div class="card-img-top pic1" alt="Card image cap"></div>
                </div>
                <div class="col-lg-6">
                  <div class="card-body">
                    <div class="card-title fw-bold">
                      <?=$this->getLayoutSetting('block_4block1Header')?>
                    </div>
                    <?=$this->getLayoutSetting('block_4block1Text')?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 op-0">
            <div class="card shadow border-0">
              <div class="row">
                <div class="col-lg-6">
                <div class="card-img-top pic2" alt="Card image cap"></div>
                </div>
                <div class="col-lg-6">
                  <div class="card-body">
                    <div class="card-title fw-bold">
                      <?=$this->getLayoutSetting('block_4block2Header')?>
                    </div>
                    <?=$this->getLayoutSetting('block_4block2Text')?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 op-0">
            <div class="card shadow border-0">
              <div class="row">
                <div class="col-lg-6">
                  <div class="card-img-top pic3" alt="Card image cap"></div>
                </div>
                <div class="col-lg-6">
                  <div class="card-body">
                    <div class="card-title fw-bold">
                      <?=$this->getLayoutSetting('block_4block3Header')?>
                    </div>
                    <?=$this->getLayoutSetting('block_4block3Text')?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 op-0">
            <div class="card shadow border-0">
              <div class="row">
                <div class="col-lg-6">
                <div class="card-img-top pic4" alt="Card image cap"></div>
                </div>
                <div class="col-lg-6">
                  <div class="card-body">
                    <div class="card-title fw-bold">
                      <?=$this->getLayoutSetting('block_4block4Header')?>
                    </div>
                    <?=$this->getLayoutSetting('block_4block4Text')?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
  .block_4 .pic1 {
      background-image:url(<?=$this->getBaseUrl($this->getLayoutSetting('block_4block1img')) ?>);
  }
  .block_4 .pic2 {
      background-image:url(<?=$this->getBaseUrl($this->getLayoutSetting('block_4block2img')) ?>);
  }
  .block_4 .pic3 {
      background-image:url(<?=$this->getBaseUrl($this->getLayoutSetting('block_4block3img')) ?>);
  }
  .block_4 .pic4 {
      background-image:url(<?=$this->getBaseUrl($this->getLayoutSetting('block_4block4img')) ?>);
  }
  </style>
</section>
<!-- block_4 end -->
<?php endif; ?>