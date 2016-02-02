<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<body>
<div class="container one-collumn sidebar-position-leftpage-home">
    <div class="headband"></div>

<?php $this->need('nav.php'); ?>
    <main id="main" class="main">
        <div class="main-inner">
            <div class="content-wrap">
                <div id="content" class="content">
                    <section id="posts" class="posts-expand">
                        <?php while($this->next()): ?>
                            <article class="post post-type-normal ">
                                <header class="post-header">
                                    <h1 class="post-title">
                                        <a class="post-title-link" href="<?php $this->permalink() ?>">
                                            <?php $this->title() ?>
                                        </a>
                                    </h1>
                                    <div class="post-meta">
                                        <span class="post-time">
                                            <span class="post-meta-item-icon">
                                                <i class="fa fa-calendar-o"></i>
                                            </span>
                                            <span class="post-meta-item-text">发表于</span>
                                            <time datetime="<?php $this->date(); ?>" content="<?php $this->date(); ?>">
                                                <?php $this->date(); ?>
                                            </time>
                                        </span>
                                        <span class="post-category" >&nbsp; | &nbsp;
                                            <span class="post-meta-item-icon">
                                                <i class="fa fa-folder-o"></i>
                                            </span>
                                            <span class="post-meta-item-text">分类于</span>

                                            <span>
                                              <a href="<?php $this->permalink() ?>"  rel="index">
                                                  <span><?php $this->category('-'); ?></span>
                                              </a>
                                            </span>
                                        </span>

                                          <span class="post-comments-count">&nbsp; | &nbsp;
                                            <a href="/2015/questions-in-writing/#comments">
                                                <span class="post-comments-count ds-thread-count" data-thread-key="2015/questions-in-writing/">105条评论</span>
                                            </a>
                                          </span>

                                         <span id="/2015/questions-in-writing/" class="leancloud_visitors" data-flag-title="关于如何写作的知乎问答">
                                           &nbsp; | &nbsp;
                                           <span class="post-meta-item-icon">
                                             <i class="fa fa-eye"></i>
                                           </span>
                                           <span class="post-meta-item-text">阅读次数 </span>
                                           <span class="leancloud-visitors-count">123</span>
                                          </span>

                                    </div>
                                </header>
                                <div class="post-body" >
                                    <?php $this->content(); ?>
                                </div>
                                <footer class="post-footer">
                                    <div class="post-eof"></div>
                                </footer>
                            </article>
                        <?php endwhile; ?>
                    </section>

                    <nav class="pagination">
                        <a class="extend prev" rel="prev" href="/"><i class="fa fa-angle-left"></i></a>
                        <a class="page-number" href="/">1</a>
                        <span class="page-number current">2</span>
                        <a class="page-number" href="/page/3/">3</a>
                        <span class="space">&hellip;</span>
                        <a class="page-number" href="/page/37/">37</a>
                        <a class="extend next" rel="next" href="/page/3/"><i class="fa fa-angle-right"></i></a>
                    </nav>
                    <nav class="pagination" role="navigation">
                        <?php $this->pageLink('<span class="newer-posts pagination__newer btn btn-small btn-tertiary">&larr; 最近</span>'); ?>
                        <span class="pagination__page-number"><?php echo $this->getCurrentPage() ?> / <?php echo $this->getTotalPage() ?></span>
                        <?php $this->pageLink('<span class="older-posts pagination__older btn btn-small btn-tertiary">更早 &rarr;</span>', 'next'); ?>
                    </nav>
                    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
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
