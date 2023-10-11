
  <?php include('php/head.php'); ?>

        <?php include('php/header.php'); ?>

        <!-- main beginn -->

        <div id="main" class="bg-light">

        <?php include('php/hmenu.php'); ?>

        <div class="shop_index container pt-5 pb-5">
            <div class="gaming">
                <div class="row">
                    <?=$this->getContent() ?>
                </div>
            </div>
        </div>

        <?php include('php/block_1.php'); ?>

      </div>

      <!-- main end -->

      <?php include('php/footer.php'); ?>
