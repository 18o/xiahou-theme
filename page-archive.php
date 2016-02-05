<?php
    /**
     * archive
     *
     * @package archive
     */


if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$this->widget('Widget_Stat')->to($stat);
$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
?>


<body>



<div class="container one-collumn sidebar-position-left  page-archive  ">
    <div class="headband"></div>
    <?php $this->need('nav.php');?>

    <main id="main" class="main">
        <div class="main-inner">
            <div class="content-wrap">
                <div id="content" class="content">


                    <section id="posts" class="posts-collapse">
                        <div class="collection-title">
                            <span class="archive-page-counter">
                  非常好！ 目前共计  <?php echo $stat->publishedPostsNum;?>  篇日志， 继续努力。
                </span>
                        </div>
                        <?php if ($archives->have()): ?>
                                <?php while($archives->next()): ?>
                                <article class="post post-type-normal">
                                    <header class="post-header">

                                        <h1 class="post-title">

                                            <a class="post-title-link" href="<?php $archives->permalink() ?>" >

                                                <span><?php $archives->title() ?></span>

                                            </a>

                                        </h1>

                                        <div class="post-meta">
                                            <time class="post-time" datetime="<?php $archives->date(''); ?>" content="<?php $archives->date(''); ?>" >
                                                <?php $archives->date(''); ?>
                                            </time>
                                        </div>

                                    </header>
                                </article>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <article class="post  post-type-normal">
                                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
                            </article>
                        <?php endif; ?>
                    </section>
                    <?php //$this->need('pagination.php'); ?>
                </div>

            </div>

            <div class="sidebar-toggle">
                <div class="sidebar-toggle-line-wrap">
                    <span class="sidebar-toggle-line sidebar-toggle-line-first"></span>
                    <span class="sidebar-toggle-line sidebar-toggle-line-middle"></span>
                    <span class="sidebar-toggle-line sidebar-toggle-line-last"></span>
                </div>
            </div>

            <?php $this->need('sidebar.php');?>

        </div>
    </main>

<?php $this->need('footer.php');?>