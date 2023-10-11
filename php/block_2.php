<?php if ($this->getLayoutSetting('block_2Switch') == '1') : ?>
  <!-- block_2 beginn -->
<section id="block_2" class="product pb-5 pt-5 bg-light">
  <div class="container">
    <div class="gaming">
      <div class="block_2-inner">
        <div class="row align-items-center">
          <div class="col-12 col-md-5">
            <div class="inner-header mb-3 mt-md-3 pe-3 ps-3">
              <h2><?=$this->getLayoutSetting('block_2Header')?> <span><?=$this->getLayoutSetting('block_2HeaderSpan')?></span></h2>
            </div>
            <ul class="list-group pe-3 ps-3">
              <li class="list-group-item card mb-3 pt-3 pb-3 op-0 shadow rounded border-0"><i class="<?=$this->getLayoutSetting('block_2List1icon')?> me-3 text-danger" aria-hidden="true"></i><?=$this->getLayoutSetting('block_2List1Text')?></li>
              <li class="list-group-item card mb-3 pt-3 pb-3 op-0 shadow rounded border-0"><i class="<?=$this->getLayoutSetting('block_2List2icon')?> me-3 text-danger" aria-hidden="true"></i><?=$this->getLayoutSetting('block_2List2Text')?></li>
              <li class="list-group-item card mb-3 pt-3 pb-3 op-0 shadow rounded border-0"><i class="<?=$this->getLayoutSetting('block_2List3icon')?> me-3 text-danger" aria-hidden="true"></i><?=$this->getLayoutSetting('block_2List3Text')?></li>
              <?php if ($this->getLayoutSetting('block_2List4Switch') == '1') : ?>
                <li class="list-group-item card mb-3 pt-3 pb-3 op-0 shadow rounded border-0"><i class="<?=$this->getLayoutSetting('block_2List4icon')?> me-3 text-danger" aria-hidden="true"></i><?=$this->getLayoutSetting('block_2List4Text')?></li>
              <?php endif; ?>
              <?php if ($this->getLayoutSetting('block_2List5Switch') == '1') : ?>
                <li class="list-group-item card mb-3 pt-3 pb-3 op-0 shadow rounded border-0"><i class="<?=$this->getLayoutSetting('block_2List5icon')?> me-3 text-danger" aria-hidden="true"></i><?=$this->getLayoutSetting('block_2List5Text')?></li>
              <?php endif; ?>
            </ul>
            <div class="pe-3 ps-3"><a href="#" class="op-0 btn btn-outline-dark" type="button">Zum Shop</a></div>
          </div>
          <div class="col-12 col-md-7 zoom">
            <img src="<?=$this->getBaseUrl($this->getLayoutSetting('block_2img')) ?>" alt="logo">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- block_2 end -->
<?php endif; ?>
