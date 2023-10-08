<?php

/** @var \Ilch\View $this */

$date = new \Ilch\Date();
?>
<!--<a href="<?=$this->getUrl('statistic/index/online') ?>"><?=$this->getTrans('statOnline') ?>: <?=$this->get('visitsOnline') ?></a><br />-->
  <div class="col-xs-12 col-md-6 col-lg-3">
    <div class="stats-content">
      <div class="stats-header">
        <?=$this->getTrans('statToday') ?>
      </div>
      <br /> <span class="count" data-target="<?=$this->get('visitsToday') ?>">0</span>
    </div>
  </div>
  <!--<?=$this->getTrans('statYesterday') ?>: <?=$this->get('visitsYesterday') ?><br />-->
  <div class="col-xs-12 col-md-6 col-lg-3">
    <div class="stats-content">
      <div class="stats-header">
        <?=$this->getTrans('statMonth') ?>
      </div>
      <br /> <a href="<?=$this->getUrl('statistic/index/show/year/' . $date->format('Y', true) . '/month/' . $date->format('m', true)) ?>"><span class="count" data-target="<?=$this->get('visitsMonth') ?>">0</span></a>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-3">
    <div class="stats-content">
      <div class="stats-header">
        <?=$this->getTrans('statYear') ?>
        </div>
        <br /> <a href="<?=$this->getUrl('statistic/index/show/year/' . $date->format('Y', true)) ?>"><span class="count" data-target="<?=$this->get('visitsYear') ?>">0</span></a>
    </div>
  </div>
  <!--<?=$this->getTrans('statUserRegist') ?>: <?=$this->get('visitsRegistUser') ?><br />-->
  <div class="col-xs-12 col-md-6 col-lg-3">
    <div class="stats-content">
      <div class="stats-header">
        <?=$this->getTrans('statTotal') ?>
      </div>
      <br /> <a href="<?=$this->getUrl('statistic/index/index') ?>"><span class="count" data-target="<?=$this->get('visitsTotal') ?>" >0</span></a>
    </div>
  </div>
<script>
const counters = document.querySelectorAll(".count");
const speed = 200;

// The code to start the animation is now wrapped in a function
const startCounters = () => {
  counters.forEach((counter) => {
    const updateCount = () => {
      const target = parseInt(+counter.getAttribute("data-target"));
      const count = parseInt(+counter.innerText);
      const increment = Math.trunc(target / speed);
      if (count < target) {
        counter.innerText = count + increment;
        setTimeout(updateCount, 1);
      } else {
        count.innerText = target;
      }
    };
    updateCount();
  });
}

// On the first scroll in this window, call the function to start the counters
window.addEventListener('scroll', startCounters, {
  once: true
});
</script>
