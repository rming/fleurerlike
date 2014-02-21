<?php $this->need('header.php'); ?>
<div class="page_wrap">
<h1 class="page_title"><a href="<?php $this->permalink();?>"><?php $this->archiveTitle('','',''); ?></a></h1>
<div class="page_info">分类：<?php $this->category(','); ?>
&nbsp;&nbsp;&nbsp;&nbsp;作者：<a href="<?php $this->author->permalink();?>"><?php $this->author();?></a>
&nbsp;&nbsp;&nbsp;&nbsp;时间：<?php $this->date('Y-m-d'); ?>
<!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
 -->
</div>
<div class="page_content"><?php $this->content(); ?></div>
<hr>
<ul class="page_nav">
<li class="page_pre"><?php $this->thePrev();?></li>
<li class="page_next"><?php $this->theNext();?></li>
</ul> 
<hr>
<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>