<section class="slider">
  <div class="slider-content pt-lg pb-lg">
    <div class="slider-inner container">
        <div id="slider_content-1">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 col-lg-6">
              <h1>Ilch-Shop <span>Layout</span></h1>
              <div class="slide-fade-in">
                <h4>Bei uns finden sie was das herz begehrt,
                zum Beispiel Shirts oder...</h4>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <img src="<?=$this->getLayoutUrl('img/pic/pic1.png') ?>" class="slide-left">
            </div>
          </div>
        </div>
        <div id="slider_content-2" style="display:none;">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 col-lg-6">
              <h1>Ilch-Shop Layout</h1>
              <div class="slide-fade-in">
                <h4>Tassen uvm. stöbern sie unseren shop und bei fragen kontaktieren sie uns.</h4>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <img src="<?=$this->getLayoutUrl('img/pic/pic2.png') ?>" class="slide-left">
            </div>
          </div>
        </div>
        </div>
      </div>
      <ul class="slider-nav list-unstyled d-none d-md-block" id="nav-slider">
        <li><button id="1"class="btn btn-outline-warning mb-3 active" onclick="hide()"></button></li>
        <li><button id="2"class="btn btn-outline-info mb-3" onclick="show()"></button></li>
      </ul>
    </div>
  </div>
</section>
