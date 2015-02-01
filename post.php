<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<article class="post-container post-container--single">
    <header class="post-header">
        <div class="post-meta">
            <time datetime="<?php $this->date(''); ?>" class="post-meta__date date"><?php $this->date(''); ?></time> • 
            <span class="post-list__meta--tags tags"><?php $this->category('-'); ?></span>
			<span class="post-list__meta--tags tags"><?php $this->tags('-'); ?></span>
        </div>
        <h2 class="post-title"><?php $this->title() ?></h2>
    </header>

    <section class="post">
        <p><?php $this->content(); ?></p>
    </section>
</article>
  
<script src="<?php $this->options->themeUrl('public/js/highlight.min.js'); ?>"></script>
<script>hljs.initHighlightingOnLoad();</script>


<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>