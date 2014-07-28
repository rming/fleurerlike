<?php
	/** 
    *通用页面
    * 
    * @package custom
    */ 
$this->need('header.php'); ?>
<div class="page_wrap">
<div class="page_content"><?php $this->content(); ?></div>
<hr>
<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>