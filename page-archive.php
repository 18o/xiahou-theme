<?php
    /**
     * archive
     *
     * @package custom
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
                        <span class="archive-move-on"></span>
                        <span class="archive-page-counter">
                  非常好！ 目前共计 <b> <?php echo $stat->publishedPostsNum;?> </b> 篇日志， 继续努力。
                        </span>

                        <?php
                        $year = '';
                        if ($archives->have()):
                            while($archives->next()):
                                $year_tmp = date('Y', $archives->created);
                                if($year != $year_tmp) {
                                    $year = $year_tmp;

                                ?>
                                <div class="collection-title post">
                                    <h2 class="archive-year motion-element" id="archive-year-<?php echo $year; ?>" style="opacity: 1; display: block; transform: translateX(0px);"><?php echo $year; ?></h2>
                                </div>
                                    <?php } ?>
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
<script>
    $(".menu-item-archives").addClass("menu-item-active");
</script>
