<?php include('php/head.php'); ?>

  <?php include('php/header.php'); ?>

  <div id="main" class="bg-light">

    <?php include('php/hmenu.php'); ?>

    <div class="container index pt-5">
        <div class="gaming">
            <div class="row">
                <div class="d-none d-md-block col-md-3 col-lg-2">
                    <?php
                    echo $this->getMenu(
                        1,
                        '<div class="card card-gaming border-0">
                             <div class="card-header">%s</div>
                                <div class="card-body">
                                    %c
                                </div>
                         </div>'
                    );
                    ?>
                </div>
                <div class="col-xs-12 col-md-7 col-lg-8">
                    <div class="card card-default border-0">
                        <div class="card-body">
                            <?=$this->getContent() ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-2">
                    <?php
                    echo $this->getMenu(
                        2,
                        '<div class="card card-gaming border-0">
                             <div class="card-header">%s</div>
                                <div class="card-body">
                                    %c
                                </div>
                         </div>'
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>

  </div>

    <?php include('php/footer.php'); ?>
