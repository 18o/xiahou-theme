<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<body>
<div class="container one-collumn sidebar-position-left page-post-detail ">
    <div class="headband"></div>
    <?php $this->need('nav.php'); ?>
    <main id="main" class="main">
        <div class="main-inner">
            <div class="content-wrap">
                <div id="content" class="content">
                    <div id="posts" class="posts-expand">
                        <article class="post post-type-normal " >
                            <header class="post-header">
                                <h1 class="post-title"><?php $this->title() ?></h1>


                                <div class="post-meta">
          <span class="post-time">
            <span class="post-meta-item-icon">
              <i class="fa fa-calendar-o"></i>
            </span>
            <span class="post-meta-item-text">发表于</span>
            <time datetime="<?php $this->date(''); ?>" content="<?php $this->date(''); ?>">
                <?php $this->date(''); ?>
            </time>
          </span>


            <span class="post-category" >
              &nbsp; | &nbsp;
              <span class="post-meta-item-icon">
                <i class="fa fa-folder-o"></i>
              </span>
              <span class="post-meta-item-text">分类于</span>

                <span>
                    <?php $this->category('-'); ?>
                </span>


            </span>


              <span class="post-comments-count">
                &nbsp; | &nbsp;
                <a href="/2015/questions-in-writing/#comments">
                    <span class="post-comments-count ds-thread-count" data-thread-key="2015/questions-in-writing/" >123条评论</span>
                </a>
              </span>


             <span id="/2015/questions-in-writing/" class="leancloud_visitors" data-flag-title="<?php $this->title() ?>">
               &nbsp; | &nbsp;
               <span class="post-meta-item-icon">
                 <i class="fa fa-eye"></i>
               </span>
               <span class="post-meta-item-text">阅读次数 </span>
               <span class="leancloud-visitors-count">123</span>
              </span>

                                </div>
                            </header>
                            <div class="post-body">
                                <?php $this->content(); ?>
                            </div>

                            <footer class="post-footer">

                                <div class="post-tags">
                                    <?php $this->tags('&nbsp'); ?>
                                </div>

                                <div class="post-nav">
                                    <div class="post-nav-next post-nav-item">

                                        <a href="/2015/ten-years/" rel="next" title="十年">
                                            <i class="fa fa-chevron-left"></i> 十年
                                        </a>

                                    </div>

                                    <div class="post-nav-prev post-nav-item">

                                        <a href="/2015/interview/" rel="prev" title="希桅的第一次面试">
                                            希桅的第一次面试 <i class="fa fa-chevron-right"></i>
                                        </a>

                                    </div>
                                </div>
                            </footer>
                        </article>
                    </div>
                </div>

                <div class="comments" id="comments">

                    <div class="ds-thread" data-thread-key="2015/questions-in-writing/"
                         data-title="关于如何写作的知乎问答" data-url="http://notes.iissnan.com/2015/questions-in-writing/">
                    </div>

                </div>


            </div>

            <div class="sidebar-toggle">
                <div class="sidebar-toggle-line-wrap">
                    <span class="sidebar-toggle-line sidebar-toggle-line-first"></span>
                    <span class="sidebar-toggle-line sidebar-toggle-line-middle"></span>
                    <span class="sidebar-toggle-line sidebar-toggle-line-last"></span>
                </div>
            </div>

            <?php $this->need('sidebar.php'); ?>

        </div>
    </main>
<?php $this->need('footer.php'); ?>