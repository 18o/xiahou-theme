<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<article class="post-container post-container--single">
    <header class="post-header">
        <div class="post-meta">
            <time datetime="<?php $this->date(''); ?>" class="post-meta__date date"><?php $this->date(''); ?></time> • 
            <span class="post-list__meta--tags tags"><?php $this->category('-'); ?></span>
			<span class="post-list__meta--tags tags"><?php $this->tags('-'); ?></span>
        </div>
        <h1 class="post-title"><?php $this->title() ?></h1>
    </header>

    <section class="post">
        <p><?php $this->content(); ?></p>
    </section>
</article>
  
<script src="<?php $this->options->themeUrl('public/js/highlight.min.js'); ?>"></script>
<script>hljs.initHighlightingOnLoad();</script>


<div class="post-rand">
    <section class="col-organic">
        <ul class="discovery-posts">
            <?php $rand_posts = rand_posts();
                  for ($i = 0; $i < 2; $i++) { 
            ?>
            <li class="discovery-post">
                <a href="" class="publisher-anchor-color">
                    <header class="discovery-post-header">
                        <h3 title="Java Jersey2使用总结">
                            <span class="title line-truncate"><?php echo $rand_posts[$i]['title'];?></span>
                        </h3>
                        <ul class="meta">
                            <li class="time"><?php echo $rand_posts[$i]['created'];?>&nbsp;</li>
                            <li class="comments"><?php echo $rand_posts[$i]['comments'];?>条评论</li>
                        </ul>
                    </header>
                </a>
                <a href="" class="top-comment">
                    <img src="http://localhost/usr/themes/xiahou/public/img/7539841.jpeg">
                    <p>
                        &nbsp;&nbsp;
                        <span class="line-truncate"><?php echo $rand_posts[$i]['content'];?></span>
                    </p>
                </a>

            </li>
            <?php }?>
        </ul>
    </section>
</div>

<?php $this->need('footer.php'); ?>