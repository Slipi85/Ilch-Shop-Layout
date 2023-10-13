<?php if ($this->getLayoutSetting('block_3Switch') == '1') : ?>
<!-- block_3 begin -->
<section class="block_3">
  <div class="gaming">
    <div class="container pb-5 pt-5 pe-3 ps-3">
      <div class="block_3-inner">
        <div class="row">
          <div class="inner-header mb-3 mt-md-3 pe-3 ps-3">
            <h2><?=$this->getLayoutSetting('block_3Header')?> <span><?=$this->getLayoutSetting('block_3HeaderSpan')?></span></h2>
          </div>
          <div class="col-lg-6">
            <ul class="list-group accordion">
              <li class="list-group-item mb-3 pt-3 pb-3 op-0 shadow rounded border-0 accordion-item">
                <div class="header fw-bold pb-1 pt-1 collapsed accordion-button" data-bs-toggle="collapse" href="#list_1"><span class="<?=$this->getLayoutSetting('block_3List1icon')?> me-3 text-danger"></span><?=$this->getLayoutSetting('block_3List1Header')?></div>
                <div id="list_1" class="collapse accordion-collapse">
                  <div class="accordion-body">
                    <?=$this->getLayoutSetting('block_3List1Text')?>
                  </div>
                </div>
              </li>
              <li class="list-group-item mb-3 pt-3 pb-3 op-0 shadow rounded border-0 accordion-item">
                <div class="header fw-bold pb-1 pt-1 collapsed accordion-button" data-bs-toggle="collapse" href="#list_2"><span class="<?=$this->getLayoutSetting('block_3List2icon')?> me-3 text-danger"></span><?=$this->getLayoutSetting('block_3List2Header')?></div>
                <div id="list_2" class="collapse accordion-collapse">
                  <div class="accordion-body">
                    <?=$this->getLayoutSetting('block_3List2Text')?>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-group accordion">
              <li class="list-group-item mb-3 pt-3 pb-3 op-0 shadow rounded border-0 accordion-item">
                <div class="header fw-bold pb-1 pt-1 collapsed accordion-button" data-bs-toggle="collapse" href="#list_3"><span class="<?=$this->getLayoutSetting('block_3List3icon')?> me-3 text-danger"></span><?=$this->getLayoutSetting('block_3List3Header')?></div>
                <div id="list_3" class="collapse accordion-collapse">
                  <div class="accordion-body">
                    <?=$this->getLayoutSetting('block_3List3Text')?>
                  </div>
                </div>
              </li>
              <li class="list-group-item mb-3 pt-3 pb-3 op-0 shadow rounded border-0 accordion-item">
                <div class="header fw-bold pb-1 pt-1 collapsed accordion-button" data-bs-toggle="collapse" href="#list_4"><span class="<?=$this->getLayoutSetting('block_3List4icon')?> me-3 text-danger"></span><?=$this->getLayoutSetting('block_3List4Header')?></div>
                <div id="list_4" class="collapse accordion-collapse">
                  <div class="accordion-body">
                  <?=$this->getLayoutSetting('block_3List4Text')?>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  .block_3 {background:<?=$this->getLayoutSetting('block_3Bg')?>}
  .block_3 li {color:<?=$this->getLayoutSetting('block_3ListColor')?>;background:<?=$this->getLayoutSetting('block_3ListBg')?>}
</style>
<!-- block_3 end -->
<?php endif; ?>
