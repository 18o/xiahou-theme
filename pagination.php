<?php
$current_page = $this->getCurrentPage();
$total_page = $this->getTotalPage();

?>




<nav class="pagination">


    <?php if($current_page == 1) {?>
        <span class="page-number current"><?php echo $this->getCurrentPage();?></span>

    <?php } elseif($current_page == 2) {?>
        <a class="extend prev" rel="prev" href="/">
            <i class="fa fa-angle-left"></i>
        </a>
    <?php } else  { ?>
        <a class="extend prev" rel="prev" href="/page/<?php echo $this->getCurrentPage() - 1; ?>">
            <i class="fa fa-angle-left"></i>
        </a>
    <?php }?>

    <?php for($i = $current_page; $i < ($current_page + 5 < $current_page ?: $current_page); $i++) {
        echo $i . "--";
    }?>



    <a class="page-number" href="/">1</a>
    <span class="page-number current">2</span>
    <a class="page-number" href="/page/3/">3</a>
    <span class="space">&hellip;</span>
    <a class="page-number" href="/page/37/">37</a>
    <a class="extend next" rel="next" href="/page/<?php echo $this->getTotalPage();?>/">
        <i class="fa fa-angle-right"></i>
    </a>
</nav>



<nav class="pagination" role="navigation">
    <?php $this->pageLink('<span class="newer-posts pagination__newer btn btn-small btn-tertiary">&larr; 最近</span>'); ?>
    <span class="pagination__page-number"><?php echo $this->getCurrentPage() ?> / <?php echo $this->getTotalPage() ?></span>
    <?php $this->pageLink('<span class="older-posts pagination__older btn btn-small btn-tertiary">更早 &rarr;</span>', 'next'); ?>
</nav>
<?php $this->pageLink('下一页','next'); ?>
<?php $this->pageLink('上一页'); ?>