<?php
$current_page = $this->getCurrentPage();
$total_page = $this->getTotalPage();

?>




<nav class="pagination">

    <a class="extend prev" rel="prev" href="/page/<?php echo $current_page - 1 > 0 ?: 1; ?>">
        <i class="fa fa-angle-left"></i>
    </a>
    <?php
    $start = $end = $current_page;

    for($i = $current_page - 2; $i < $current_page + 2; $i++) {
    if($i < 1 || $i > $total_page) continue;
    ?>
        <a class="extend prev" rel="prev" href="/page/<?php echo $i; ?>">
            <?php echo $i; ?>
        </a>
    <?php }?>

    <a class="extend next" rel="next" href="/page/<?php echo $total_page;?>/">
        <i class="fa fa-angle-right"></i>
    </a>

</nav>
