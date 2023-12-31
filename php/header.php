<!-- header_shop begin -->
<header>
  <?php
  function dateDiffInDays($date1, $date2) {
      $diff = strtotime($date2) - strtotime($date1);
      return abs(round($diff / 86400));
  }
  $date1 = date("d.m.Y");
  $date2 = $this->getLayoutSetting('totopNavDatum');
  $off = '00';
  if($date1 > $date2) {
    $date = $off;
  } elseif(dateDiffInDays($date1, $date2) < 10) {
    $date = '0' . dateDiffInDays($date1, $date2);
  } else {
    $date = dateDiffInDays($date1, $date2);
  }
  if(dateDiffInDays($date1, $date2) < 2) {
    $day = $this->getTrans('day');
  } else {
    $day = $this->getTrans('days');
  };
  ?>
  <div class="top-nav">
    <div class="container pe-3 ps-3">
      <div class="gaming">
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="top-nav-first-content d-flex align-items-center">
              <?php if ($this->getLayoutSetting('totopNavAction') == '1') : ?>
              <?=$this->getLayoutSetting('totopNavText')?> <span id="days"><?php printf($date);?></span> <?=$day ?>
            <?php else: ?>
              <?=$this->getLayoutSetting('totopNavActionOff')?><span id="days">!</span>
            <?php endif; ?>
            </div>
          </div>
          <div class="top-nav-second-content col-sm-6 text-end d-flex align-items-center justify-content-end">
            <i class="far fa-envelope"></i> <?=$this->getLayoutSetting('totopNavMail')?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav id="navbar_top" class="navbar navbar-expand-md navbar-light bg-light pb-2 pt-2">
    <div class="container pe-3 ps-3">
      <a class="navbar-brand col-4 col-md-2" href="#"><img src="<?=$this->getBaseUrl($this->getLayoutSetting('logo')) ?>" alt="logo" class="w-50"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse col-md-10" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php
          echo $this->getMenu(1,
          '<li class="nav-item dropdown"><a href="#" title="%s" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">%s</a>%c</li>',
          [
            'menus' => [
              'ul-class-root' => 'dropdown-menu',
              'ul-class-aria-labelledby' => 'navbarDropdown',
              'ul-class-child' => '',
              'a-class-root' => 'dropdown-item',
              'allow-nesting' => false
            ],
            'boxes' => [
              'render' => false
            ],
          ]);
        ?>
        </ul>
        <ul class="navbar-right nav navbar-nav">
          <?php if ($this->getUser() !== null): ?>
            <li class="nav-item">
              <a href="<?=$this->getUrl(['module' => 'user', 'controller' => 'panel', 'action' => 'index']) ?>" class="nav-link"><?=$this->getTrans('hello') ?>&nbsp;<?=$this->escape($this->getUser()->getName()) ?></a>
            </li>
            <li class="nav-item">
              <div class="ilch--new-message-icon ilch--new-message pull-right"></div>
            </li>
            <?php $cart_badge = '';
            if(!empty($_SESSION['shopping_cart'])) {
                $cart_count = count(array_keys($_SESSION['shopping_cart']));
                $cart_badge = ($cart_count>0)?'<a class="activecart nav-link" href="'.$this->getUrl('shop/index/cart').'#shopAnker"><i class="fa-solid fa-shopping-cart text-success"><span class="badge badge rounded-pill badge-notification bg-danger">'.$cart_count.'</span></i></a>':'';
            }
            ?>
            <li class="nav-item"><?=$cart_badge ?></li>

          <?php else: ?>
              <li class="nav-item"><a href="<?=$this->getUrl(['module'=>'user', 'controller'=>'regist', 'action'=>'index']) ?>" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i><?=$this->getTrans('signup') ?></a></li>
              <li class="nav-item"><a href="#" data-bs-toggle="modal" data-bs-target="#login" class="nav-link"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
          <?php endif; ?>
       </ul>
      </div>
    </div>
  </nav>
  <style>
  .top-nav {background:<?=$this->getLayoutSetting('totopNavBg')?>;color:<?=$this->getLayoutSetting('totopNavColor')?>;}
  .top-nav-first-content span:after {background:<?=$this->getLayoutSetting('totopNavActionText')?>;}
  </style>
</header>
<!-- header_shop end -->
