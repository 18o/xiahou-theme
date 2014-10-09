<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<article class="post-container post-container--single">

    <header class="post-header">
      <div class="post-meta">
        <time datetime="<?php $this->date(''); ?>" class="post-meta__date date"></time>
        <span class="post-list__meta--tags tags"><?php $this->category(','); ?></span>
		<span class="post-list__meta--tags tags"><?php $this->tags('|'); ?></span>
      </div>
      <h1 class="post-title"><?php $this->title() ?></h1>
    </header>

    <section class="post">
      <p><?php $this->content(); ?></p>
    </section>

  </article>


  	<?php $this->need('footer.php'); ?>