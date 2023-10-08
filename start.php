<?php /** @var $this \Ilch\Layout\Frontend */ ?><!DOCTYPE html>
<html lang="de">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <?=$this->getHeader() ?>
        <link href="<?=$this->getVendorUrl('twbs/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?=$this->getLayoutUrl('style.css') ?>" rel="stylesheet">
        <?=$this->getCustomCSS() ?>
        <script src="<?=$this->getVendorUrl('twbs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?=$this->getLayoutUrl('js/shop.js') ?>" rel="stylesheet"></script>
    </head>
    <body>
        <!-- Header beginn -->

        <?php include('php/header_shop.php'); ?>

        <!-- Header end -->

        <!-- main beginn -->

        <div id="main">

          <!-- slider beginn -->

          <?php include('php/slider.php'); ?>

          <!-- slider end -->

          <!-- partner beginn -->

          <?php include('php/partner.php'); ?>

          <!-- partner end -->

          <!-- product beginn -->

          <?php include('php/product.php'); ?>

          <!-- product end -->

          <!-- info beginn -->

          <?php include('php/info.php'); ?>

          <!-- info end -->

          <!-- contact beginn -->

          <?php include('php/contact.php'); ?>

          <!-- contact end -->
      </div>

<button onclick="totop()" id="totop" class="btn btn-outline-secondary"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
        <div class="footer">
            <div class="container">
                <div class="gaming">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            &copy; Ilch 2.0 Free Layout | CMS by <a href="http://www.ilch.de/">Ilch</a>
                        </div>
                        <div class="col-xs-12 col-md-6 nav">
                            <ul>
                                <li><a href="<?=$this->getUrl() ?>">Home</a></li>
                                <li><a href="<?=$this->getUrl(['module'=>'contact', 'controller'=>'index', 'action'=>'index']) ?>"><?=$this->getTrans('contact') ?></a></li>
                                <li><a href="<?=$this->getUrl(['module'=>'imprint', 'controller'=>'index', 'action'=>'index']) ?>"><?=$this->getTrans('imprint') ?></a></li>
                                <li><a href="<?=$this->getUrl(['module'=>'privacy', 'controller'=>'index', 'action'=>'index']) ?>"><?=$this->getTrans('privacy') ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal content-->
        <div class="modal fade" id="login" role="dialog" ata-bs-backdrop="static">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Modal Header</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <?=$this->getBox('user', 'login'); ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
        <?=$this->getFooter() ?>
    </body>
</html>
