<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$db = Typecho_Db::get();
$prefix  = $db->getPrefix();
$sql = "UPDATE `".$prefix."contents` SET `views` = `views` + 1 WHERE `cid` = ".intval($this->cid).";";
$db->query($sql);
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
                            <?php $this->need('post-header.php'); ?>
                            <div class="post-body">
                                <?php $this->content(); ?>
                            </div>

                            <footer class="post-footer">

                                <div class="post-tags">
                                    <?php $this->tags('&nbsp'); ?>
                                </div>

                                <div class="post-nav">
                                    <div class="post-nav-next post-nav-item">
                                        <?php $this->thePrev('上一篇 : %s', '没有上一篇了'); ?>
                                    </div>
                                    <div class="post-nav-prev post-nav-item">
                                        <?php $this->theNext('下一篇 : %s', '没有下一篇了'); ?>
                                    </div>
                                </div>
                            </footer>
                        </article>
                    </div>
                </div>

                <?php $this->need('comments.php'); ?>
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