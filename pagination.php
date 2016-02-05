<?php
$current_page = $this->getCurrentPage();
$total_page = $this->getTotalPage();

?>


<?php
$this->pageNav(
   '<i class="fa fa-angle-left"></i>',
   '<i class="fa fa-angle-right"></i>',
   3,
   '...',
   [
       'wrapTag' => 'nav',
       'wrapClass' => 'pagination',
       'itemTag' => 'span',
       'textTag' => 'span',
       'currentClass' => 'current',
       'prevClass' => 'extend',
       'nextClass' => 'extend'

   ]);
?>


<style type="text/css">
    .pagination span {
        display: inline-block;
        width: 30px;
        height: 30px;
        cursor: pointer;
        border-top: 1px solid #eee;
        margin-top: -1px;
    }
    .pagination span a {
        border-bottom: none;
    }
    .pagination span:hover {
        border-top: 1px solid black;
    }
</style>