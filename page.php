<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<body>

<div class="container one-collumn sidebar-position-left  page-archive  ">
    <?php $this->need('nav.php');?>

    <main id="main" class="main">
        <div class="main-inner">
            <div class="content-wrap">
                <div id="content" class=" posts-expand">
                    <header class="post-header">
                        <h1 class="post-title">
                            <a class="post-title-link" href="<?php $this->permalink() ?>">
                                <?php $this->title() ?>
                            </a>
                        </h1>
                    </header>
                    <div class="post-body">
                        <?php $this->content(); ?>
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
            <?php $this->need('sidebar.php');?>
        </div>
    </main>

    <?php $this->need('footer.php');?>

