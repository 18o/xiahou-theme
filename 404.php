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