<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<body>
<div class="container one-collumn sidebar-position-leftpage-home">
<?php $this->need('nav.php'); ?>
    <main id="main" class="main">
        <div class="main-inner">
            <div class="content-wrap">
                <div id="content" class="content">
                    <section id="posts" class="posts-expand">
                        <?php while($this->next()): ?>
                            <article class="post post-type-normal ">

                                <?php $this->need('post-header.php'); ?>
                                <div class="post-body" >
                                    <?php $this->content(); ?>
                                </div>
                                <div class="post-more-link text-center">
                                    <a class="btn" href="<?php $this->permalink() ?>" rel="contents">
                                        阅读全文 »
                                    </a>
                                </div>
                                <footer class="post-footer">
                                    <div class="post-eof"></div>
                                </footer>
                            </article>
                        <?php endwhile; ?>
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

            <?php $this->need('sidebar.php'); ?>
        </div>
    </main>
