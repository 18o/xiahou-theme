<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php if($this->is('post') || $this->is('page') || $this->is('post')){$this->title();echo "-";} ?><?php $this->options->title(); ?></title> 
    <link rel="stylesheet" href="<?php $this->options->themeUrl('public/css/default.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('public/css/vno.css'); ?>" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('public/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('public/css/tomorrow.css'); ?>">
    <?php $this->header(); ?>
</head>
<body class="home-template no-js">
    <span class="mobile btn-mobile-menu">
        <i class="fa fa-list btn-mobile-menu__icon"></i>
        <i class="fa fa-angle-up btn-mobile-close__icon hidden"></i>
    </span>
    <header class="panel-cover" style="background-image: url(http://iios.net/usr/uploads/2015/11/3393148476.jpg)">
      	<div class="panel-main">
        	<div class="panel-main__inner panel-inverted">
        		<div class="panel-main__content">
    				<a href="/" title="前往 <?php $this->options->title(); ?> 的主页">
    					<img src="http://iios.net/usr/uploads/2015/11/892173921.jpg" width="80" alt="<?php $this->options->title(); ?> logo" class="panel-cover__logo logo" />
    				</a>
		            <h1 class="panel-cover__title panel-title">
		            	<a href="/" title="link to homepage for <?php $this->options->title(); ?>"><?php $this->options->title(); ?></a>
		            </h1>
            		<span class="panel-cover__subtitle panel-subtitle"></span>
            		<hr class="panel-cover__divider" />
            		<p class="panel-cover__description">
            		<?php
            			$a = $this->options->description();
					echo $a;
					?>

            		</p>
            		<hr class="panel-cover__divider panel-cover__divider--secondary" />

            		<div class="navigation-wrapper">
              			<div>
              				<nav class="cover-navigation cover-navigation--primary">
                				<ul class="navigation">
                  					<li class="navigation__item">
                  						<a href="/#blog" title="访问博客" class="blog-button">博客</a>
                  					</li>
                  					<li class="navigation__item">
                  						<a href="/projects.html"  title="我的作品">作品</a>
                  					</li>
                 					<li class="navigation__item">
                 						<a href="/about.html" title="更多关于我">关于</a>
                 					</li>
                  					<!-- <li class="navigation__item">
                  						<a href="/" title="邮件订阅本站">订阅</a>
                  					</li> -->
                				</ul>
              				</nav>
              			</div>
	              		<div>
		              		<nav class="cover-navigation navigation--social">
		                		<ul class="navigation">
		                			<li class="navigation__item">
		                  				<a href="http://weibo.com/1732722751" title="@夏侯仲达" target="_blank">
		                    				<i class='social fa fa-weibo'></i>
		                    				<span class="label">Weibo</span>
		                  				</a>
		                			</li>
					                <li class="navigation__item">
					                  	<a href="https://github.com/xtreeio" title="Github" target="_blank">
					                    	<i class='social fa fa-github'></i>
					                    	<span class="label">Github</span>
					                  	</a>
					                </li>
		              
					                <!-- Google Plus 
					                <li class="navigation__item">
					                  <a href="#" rel="author" title="Google+" target="_blank">
					                    <i class='social fa fa-google-plus-square'></i>
					                    <span class="label">Google+</span>
					                  </a>
					                </li>-->

					                <li class="navigation__item">
					                  	<a href="http://twitter.com/tzllangzi" title="@夏侯" target="_blank">
						                    <i class='social fa fa-twitter'></i>
						                    <span class="label">Twitter</span>
					                  	</a>
					                </li> 
					                
					                <!-- RSS -->
					                <li class="navigation__item">
					                  	<a href="http://iios.net/feed/" title="RSS" target="_blank">
						                    <i class='social fa fa-rss'></i>
						                    <span class="label">RSS</span>
					                  	</a>
					                </li>
					              
					                <!-- Email -->
					                <li class="navigation__item">
					                  	<a href="mailto:admin@iios.net" title="邮件联系我" target="_blank">
						                    <i class='social fa fa-envelope'></i>
						                    <span class="label">Email</span>
					                  	</a>
					                </li>
		          				</ul>
		              		</nav>
	              		</div>
            		</div>
        		</div>
    		</div>
	        <div class="panel-cover--overlay cover-disabled"></div>
	    </div>
    </header>
    
<div class="content-wrapper">
	<div class="content-wrapper__inner">
  

