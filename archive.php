<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<h1 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类： %s'),
            'search'    =>  _t('包含关键字： %s'),
            'tag'       =>  _t('标签： %s'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h1>
<hr class="section-title__divider">
<?php $this->need('content.php'); ?>

<?php $this->need('footer.php'); ?>