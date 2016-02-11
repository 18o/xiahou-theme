<?php
/**
 * tag
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
                        <div class="tag-cloud">
                            <div class="tag-cloud-title">
                                目前共计 <?php echo tags_count();?> 个标签
                            </div>
                            <div class="tag-cloud-tags">
                                <?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
                                <?php if($tags->have()): ?>
                                    <?php while ($tags->next()): ?>
                                        <a style="font-size: 22px;color:rgb(<?php echo(rand(100,255)); ?>,<?php echo(rand(100,255)); ?>,
                                        <?php echo(rand(100,255)); ?>)" href="<?php $tags->permalink();?>">
                                            <?php $tags->name(); ?></a>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>
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
        $(".menu-item-tags").addClass("menu-item-active");
    </script>

