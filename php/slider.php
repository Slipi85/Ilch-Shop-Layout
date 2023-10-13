<!-- slider begin -->
<section class="slider">
  <div class="slider-content pt-lg pb-lg pe-3 ps-3">
    <div class="slider-inner container">
      <div class="gaming">
        <div id="slider_content-1">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 col-lg-6">
              <h1><?=$this->getLayoutSetting('sliderHeader')?> <span><?=$this->getLayoutSetting('sliderHeaderSpan')?></span></h1>
              <div class="slide-fade-in">
                <h4><?=$this->getLayoutSetting('slider1text')?></h4>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <img src="<?=$this->getBaseUrl($this->getLayoutSetting('slider1Img')) ?>" class="slide-left">
            </div>
          </div>
        </div>
        <div id="slider_content-2" style="display:none;">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 col-lg-6">
              <h1><?=$this->getLayoutSetting('sliderHeader')?> <span><?=$this->getLayoutSetting('sliderHeaderSpan')?></span></h1>
              <div class="slide-fade-in">
                <h4><?=$this->getLayoutSetting('slider1text')?></h4>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <img src="<?=$this->getBaseUrl($this->getLayoutSetting('slider2Img')) ?>" class="slide-left">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <ul class="slider-nav list-unstyled d-none d-md-block" id="nav-slider">
    <li><button id="1"class="btn btn-outline-warning mb-3 active" onclick="hide()"></button></li>
    <li><button id="2"class="btn btn-outline-info mb-3" onclick="show()"></button></li>
  </ul>
  <style>
  .slider {background:url(<?=$this->getBaseUrl($this->getLayoutSetting('sliderBg')) ?>)}
  </style>
</section>
<!-- slider end -->
