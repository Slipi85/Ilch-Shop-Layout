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

        <?php include('php/header_shop.php'); ?>

        <!-- main beginn -->

        <div id="main">

          <?php include('php/slider.php'); ?>

          <?php include('php/block_1.php'); ?>

          <?php include('php/block_2.php'); ?>

          <?php include('php/block_3.php'); ?>

          <?php include('php/block_4.php'); ?>

          <?php include('php/block_5.php'); ?>

          <?php include('php/block_6.php'); ?>

      </div>

      <!-- main end -->

      <?php include('php/footer.php'); ?>
      
    </body>
</html>
