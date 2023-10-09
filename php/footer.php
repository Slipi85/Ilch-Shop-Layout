<button onclick="totop()" id="totop" class="btn btn-dark"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
        <div class="footer pt-5 pb-5 bg-dark text-white">
            <div class="container">
                <div class="gaming">
                    <div class="row">
                        <div class="col-12 text-center mb-3">
                            <ul>
                                <li><a href="<?=$this->getUrl() ?>" class="text-light">Home</a></li>
                                <li><a href="<?=$this->getUrl(['module'=>'contact', 'controller'=>'index', 'action'=>'index']) ?>" class="text-light"><?=$this->getTrans('contact') ?></a></li>
                                <li><a href="<?=$this->getUrl(['module'=>'imprint', 'controller'=>'index', 'action'=>'index']) ?>" class="text-light"><?=$this->getTrans('imprint') ?></a></li>
                                <li><a href="<?=$this->getUrl(['module'=>'privacy', 'controller'=>'index', 'action'=>'index']) ?>" class="text-light"><?=$this->getTrans('privacy') ?></a></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="col-12 text-center">
                            &copy; Ilch 2.0 Free Layout | CMS by <a href="http://www.ilch.de/">Ilch</a>
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
