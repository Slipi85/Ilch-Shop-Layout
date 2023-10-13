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
        <style>
        .slider-inner h1 span,
        .inner-header h2 span,
        .index_header_bg_inner h2 span {
            color:<?=$this->getLayoutSetting('pageHeaderSpan')?>;
        }
        </style>
    </head>
    <body>
