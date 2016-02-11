<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<html class="theme-next pisces use-motion">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="<?php $this->options->themeUrl('/vendors/fancybox/source/jquery.fancybox.css')?>" rel="stylesheet" type="text/css"/>
    <link href="<?php $this->options->themeUrl('/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php $this->options->themeUrl('public/css/main.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php $this->options->themeUrl('public/css/highlight.min.css')?>" rel="stylesheet" type="text/css" />
    <link rel="icon" href="<?php $this->options->themeUrl('/public/favicon.ico')?>" type="image/x-icon" />
    <?php $this->header(); ?>

    <script type="text/javascript" id="hexo.configuration">
        var NexT = window.NexT || {};
        var CONFIG = {
            fancybox: true,
            motion: true
        };
    </script>
    <title><?php if($this->is('post') || $this->is('page') || $this->is('post')){$this->title();echo "-";} ?><?php $this->options->title(); ?></title>
</head>