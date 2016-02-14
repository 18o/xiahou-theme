<?php
//$this->need('header.php');
?>
<!doctype html>
<html class="theme-next pisces use-motion">
<head>

</head>
<link href="<?php $this->options->themeUrl('/public/404/bootstrap.min.css');?>" rel="stylesheet" media="screen">
<link href="<?php $this->options->themeUrl('/public/404/style.css');?>" rel="stylesheet">
<link href="<?php $this->options->themeUrl('/public/404/font-awesome.min.css');?>" rel="stylesheet">
<script src="<?php $this->options->themeUrl('/public/404/webfont.js');?>"></script>
<script src="<?php $this->options->themeUrl('/public/404/modernizr-1.0.min.js');?>"></script>
<body style="opacity: 1;">

<div class="container">
    <div class="row">
        <article class="col-md-12">
            <img src="<?php $this->options->themeUrl('/public/404/broken-round.svg');?>" class="svg img-responsive text-center" alt="404 icon" width="600" height="250">
            <h1>BROKEN</h1>
            <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
        </article>
    </div>
    <div id="wrapper" class="clearfix" style="display: none">
        <div class="col-md-3 col-sm-3 column">
            <h3 class="brand"><a href="http://www.dezinethemes.com/envato/missing/2/2/index.html" title="404"><i class="fa fa-leaf"></i>BRAND</a></h3>
        </div>
        <div class="col-md-4 col-sm-5 column no-border">
            <ul class="list-inline">
                <li><a class="tips" data-placement="top" data-toggle="tooltip" href="http://www.dezinethemes.com/envato/missing/2/2/index.html#" title="" data-original-title="Follow Us on Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a class="tips" data-placement="top" data-toggle="tooltip" href="http://www.dezinethemes.com/envato/missing/2/2/index.html#" title="" data-original-title="Follow Us on Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a class="tips" data-placement="top" data-toggle="tooltip" href="http://www.dezinethemes.com/envato/missing/2/2/index.html#" title="" data-original-title="Watch Our Videos"><i class="fa fa-youtube-play"></i></a></li>
                <li><a class="tips" data-placement="top" data-toggle="tooltip" href="http://www.dezinethemes.com/envato/missing/2/2/index.html#" title="" data-original-title="Follow Us On Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
                <li><a class="tips" data-placement="top" data-toggle="tooltip" href="http://www.dezinethemes.com/envato/missing/2/2/index.html#" title="" data-original-title="Watch Our gallery"><i class="fa fa-flickr"></i></a></li>
                <li><a class="tips" data-placement="top" data-toggle="tooltip" href="http://www.dezinethemes.com/envato/missing/2/2/index.html#" title="" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                <li class="last"><a class="tips" data-placement="top" data-toggle="tooltip" href="http://www.dezinethemes.com/envato/missing/2/2/index.html#" title="" data-original-title="Instagram"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>

        <div class="col-md-5 col-sm-4">
            <form action="" method="post" id="s">
                <div class="form-group">
                    <input type="text" id="s" name="s" placeholder="Search" class="form-control">
                        <span class="submit-button">
                            <input type="submit" id="search-submit" name="search-submit" value="" class="btn">
                            <img src="<?php $this->options->themeUrl('/public/404/corner.png');?>" alt="">
                        </span>
                </div>
            </form>
        </div>
    </div>
    <!--end-of-wrapper-->

    <footer>
        <div class="col-md-12 text-center">夏侯仲达 © <span class="year">2016</span>. All Rights Reserved.</div>
    </footer>
</div>
<!--SCRIPTS-->

<script src="<?php $this->options->themeUrl('/public/404/bootstrap.min.js');?>"></script>
<script src="<?php $this->options->themeUrl('/public/404/custom.js');?>"></script>
<script src="<?php $this->options->themeUrl('/public/404/missing.js');?>"></script>
<script src="<?php $this->options->themeUrl('/public/404/placeholders.js');?>"></script>
<script>
    function jumpurl(){location='/';}
    setTimeout('jumpurl()',3000);
</script>
<?php
$this->footer();
echo $this->options->piwik;
?>
</body>
</html>