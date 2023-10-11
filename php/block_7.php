<?php if ($this->getLayoutSetting('block_7Switch') == '1') : ?>
  <?php
  if ($this->getLayoutSetting('block_7block1cordonSwitch') == '1' &&  $this->getLayoutSetting('block_7block1cordonBg') == '1') {
    $cordonfirst = 'bg-info';
  } else if ($this->getLayoutSetting('block_7block1cordonSwitch') == '1' &&  $this->getLayoutSetting('block_7block1cordonBg') == '0') {
    $cordonfirst = 'bg-danger';
  };
  if ($this->getLayoutSetting('block_7block2cordonSwitch') == '1' &&  $this->getLayoutSetting('block_7block2cordonBg') == '1') {
    $cordonsecond = 'bg-info';
  } else if ($this->getLayoutSetting('block_7block2cordonSwitch') == '1' &&  $this->getLayoutSetting('block_7block2cordonBg') == '0') {
    $cordonsecond = 'bg-danger';
  };
  if ($this->getLayoutSetting('block_7block3cordonSwitch') == '1' &&  $this->getLayoutSetting('block_7block3cordonBg') == '1') {
    $cordonthird = 'bg-info';
  } else if ($this->getLayoutSetting('block_7block3cordonSwitch') == '1' &&  $this->getLayoutSetting('block_7block3cordonBg') == '0') {
    $cordonthird = 'bg-danger';
  };
  if ($this->getLayoutSetting('block_7block4cordonSwitch') == '1' &&  $this->getLayoutSetting('block_7block4cordonBg') == '1') {
    $cordonfourth = 'bg-info';
  } else if ($this->getLayoutSetting('block_7block4cordonSwitch') == '1' &&  $this->getLayoutSetting('block_7block4cordonBg') == '0') {
    $cordonfourth = 'bg-danger';
  };
  ?>
<!-- begin block_7 -->

<section class="block_7 pt-5 pb-5 bg-light">
  <div class="container">
    <div class="gaming">
      <div class="block_7-inner">
        <div class="row">
          <div class="col-md-3 op-0">
            <div class="card shadow border-0">
              <?php if ($this->getLayoutSetting('block_7block1cordonSwitch') == '1') : ?>
                <div class="cordon-wrapper"><div class="cordon <?=$cordonfirst ?>"><?=$this->getLayoutSetting('block_7block1Cordon')?></div></div>
              <?php endif; ?>
              <img class="card-img-top" src="<?=$this->getBaseUrl($this->getLayoutSetting('block_7block1img')) ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold text-uppercase"><?=$this->getLayoutSetting('block_7block1header')?></h5>
                <h4 class="card-text text-center mt-2 mb-2"><?=$this->getLayoutSetting('block_7block1price')?></h4>
                <div class="link text-center"><a href="<?=$this->getBaseUrl('/index.php/shop/index/index') ?>" class="btn btn-danger text-center">Zum Shop</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 op-0">
            <div class="card shadow border-0">
              <?php if ($this->getLayoutSetting('block_7block2cordonSwitch') == '1') : ?>
                <div class="cordon-wrapper"><div class="cordon <?=$cordonsecond ?>"><?=$this->getLayoutSetting('block_7block2Cordon')?></div></div>
              <?php endif; ?>
              <img class="card-img-top" src="<?=$this->getBaseUrl($this->getLayoutSetting('block_7block2img')) ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold text-uppercase"><?=$this->getLayoutSetting('block_7block2header')?></h5>
                <h4 class="card-text text-center mt-2 mb-2"><?=$this->getLayoutSetting('block_7block2price')?></h4>
                <div class="link text-center"><a href="<?=$this->getBaseUrl('/index.php/shop/index/index') ?>" class="btn btn-danger text-center">Zum Shop</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 op-0">
            <div class="card shadow border-0">
              <?php if ($this->getLayoutSetting('block_7block3cordonSwitch') == '1') : ?>
                <div class="cordon-wrapper"><div class="cordon <?=$cordonthird ?>"><?=$this->getLayoutSetting('block_7block3Cordon')?></div></div>
              <?php endif; ?>
              <img class="card-img-top" src="<?=$this->getBaseUrl($this->getLayoutSetting('block_7block3img')) ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold text-uppercase"><?=$this->getLayoutSetting('block_7block3header')?></h5>
                <h4 class="card-text text-center mt-2 mb-2"><?=$this->getLayoutSetting('block_7block3price')?></h4>
                <div class="link text-center"><a href="<?=$this->getBaseUrl('/index.php/shop/index/index') ?>" class="btn btn-danger text-center">Zum Shop</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 op-0">
            <div class="card shadow border-0">
              <?php if ($this->getLayoutSetting('block_7block4cordonSwitch') == '1') : ?>
                <div class="cordon-wrapper"><div class="cordon <?=$cordonfourth ?>"><?=$this->getLayoutSetting('block_7block4Cordon')?></div></div>
              <?php endif; ?>
              <img class="card-img-top" src="<?=$this->getBaseUrl($this->getLayoutSetting('block_7block4img')) ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold text-uppercase"><?=$this->getLayoutSetting('block_7block4header')?></h5>
                <h4 class="card-text text-center mt-2 mb-2"><?=$this->getLayoutSetting('block_7block4price')?></h4>
                <div class="link text-center"><a href="<?=$this->getBaseUrl('/index.php/shop/index/index') ?>" class="btn btn-danger text-center">Zum Shop</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end block_7
<?php endif; ?>
