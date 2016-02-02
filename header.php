<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<html class="theme-next pisces use-motion">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link href="<?php $this->options->themeUrl('/vendors/fancybox/source/jquery.fancybox.css')?>" rel="stylesheet" type="text/css"/>
    <link href="<?php $this->options->themeUrl('/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php $this->options->themeUrl('public/css/main.css')?>" rel="stylesheet" type="text/css" />
    <meta name="keywords" content="Hexo,next" />
    <meta name="description" content="胡编一通，乱写一气。猴赛雷。">
    <meta property="og:type" content="website">
    <meta property="og:title" content="IIssNan's Notes">
    <meta property="og:url" content="http://notes.iissnan.com/page/2/index.html">
    <meta property="og:site_name" content="IIssNan's Notes">
    <meta property="og:description" content="胡编一通，乱写一气。猴赛雷。">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="IIssNan's Notes">
    <meta name="twitter:description" content="胡编一通，乱写一气。猴赛雷。">



    <script type="text/javascript" id="hexo.configuration">
        var NexT = window.NexT || {};
        var CONFIG = {
            scheme: 'Pisces',
            sidebar: '[object Object]',
            fancybox: true,
            motion: true
        };
    </script>
    <title><?php if($this->is('post') || $this->is('page') || $this->is('post')){$this->title();echo "-";} ?><?php $this->options->title(); ?></title>
</head>