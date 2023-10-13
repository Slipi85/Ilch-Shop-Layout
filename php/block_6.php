<section id="block_6" class="block_6 pb-5 pt-5">
  <div class="container">
    <div class="gaming">
      <div class="block_6-inner row align-items-center pe-3 ps-3">
        <div class="col-lg-6">
          <div class="info-wrap w-100">
            <div class="mb-4 mt-md-4 inner-header"><h2><?=$this->getLayoutSetting('block_6Header')?> <span><?=$this->getLayoutSetting('block_6HeaderSpan')?></h2></span></div>
              <div class="w-100 d-flex align-items-start">
                <div class="icon d-flex align-items-center shadow rounded-circle me-3">
                  <span class="<?=$this->getLayoutSetting('block_6list1Icon')?> text-danger"></span>
                </div>
                <div class="text pl-3">
                  <p><span><?=$this->getLayoutSetting('block_6list1Header')?></span> </br><?=$this->getLayoutSetting('block_6list1Text')?></p>
                </div>
              </div>
              <div class="w-100 d-flex align-items-start">
                <div class="icon d-flex align-items-center shadow rounded-circle me-3">
                  <span class="<?=$this->getLayoutSetting('block_6list2Icon')?> text-danger"></span>
                </div>
                <div class="text pl-3">
                  <p><span><?=$this->getLayoutSetting('block_6list2Header')?></span> </br><a href="tel://<?=$this->getLayoutSetting('block_6list2Text')?>"><?=$this->getLayoutSetting('block_6list2Text')?></a></p>
                </div>
              </div>
              <div class="w-100 d-flex align-items-start">
                <div class="icon d-flex align-items-center shadow rounded-circle me-3">
                  <span class="<?=$this->getLayoutSetting('block_6list3Icon')?> text-danger"></span>
                </div>
                <div class="text pl-3">
                  <p><span><?=$this->getLayoutSetting('block_6list3Header')?></span> </br><a href="<?=$this->getLayoutSetting('block_6list3Text')?>"><?=$this->getLayoutSetting('block_6list3Text')?></a></p>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-6">
          <?=$this->getContent() ?>
        </div>
      </div>
    </div>
  </div>
  <style>
  .block_6 {background:<?=$this->getLayoutSetting('block_6Bg')?>);color:<?=$this->getLayoutSetting('block_6TextColor')?>;}
  .block_6 i {color:<?=$this->getLayoutSetting('block_6IconColor')?>;}
  </style>
</section>
