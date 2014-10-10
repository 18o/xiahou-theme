<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<article class="post-container post-container--single">
    <header class="post-header">
        <h1 class="post-title"><?php $this->title() ?></h1>
    </header>

    <section class="post">
        <p><?php $this->content(); ?></p>
    </section>

  </article>


  	<?php $this->need('footer.php'); ?>