<?php
    /**
     * 归档页面
     *
     * @package archive
     */


if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
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
                            <h2>
                                <?php $this->archiveTitle(array(
                                    'category'  =>  _t(" %s <small>分类</small>"),
                                    'search'    =>  _t(' %s  <small>关键字</small>'),
                                    'tag'       =>  _t(' %s <small>标签</small> '),
                                    'author'    =>  _t('%s <small>发布的文章</small>')
                                ), '', ''); ?>
                            </h2>
                        </div>
                        <?php if ($this->have()): ?>
                                <?php while($this->next()): ?>
                                <article class="post post-type-normal">
                                    <header class="post-header">

                                        <h1 class="post-title">

                                            <a class="post-title-link" href="<?php $this->permalink() ?>" >

                                                <span><?php $this->title() ?></span>

                                            </a>

                                        </h1>

                                        <div class="post-meta">
                                            <time class="post-time" datetime="<?php $this->date(''); ?>" content="<?php $this->date(''); ?>" >
                                                <?php $this->date(''); ?>
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
                    <?php $this->need('pagination.php'); ?>
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