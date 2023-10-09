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

          <!-- service beginn -->

          <?php include('php/service.php'); ?>

          <!-- service end -->

          <!-- team beginn -->

          <?php include('php/team.php'); ?>

          <!-- team end -->

          <!-- info beginn -->

          <?php include('php/info.php'); ?>

          <!-- info end -->

          <!-- contact beginn -->

          <?php include('php/contact.php'); ?>

          <!-- contact end -->
      </div>

      <!-- footer beginn -->

      <?php include('php/footer.php'); ?>

      <!-- footer end -->
    </body>
</html>
