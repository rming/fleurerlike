<?php $this->need('header.php'); ?>
<div class="page_wrap">
<h1 class="page_title"><a href="<?php $this->permalink();?>"><?php $this->archiveTitle('','',''); ?></a></h1>
<div class="page_info">
<span>分类：<?php $this->category(','); ?></span>
<span class="xs_hidden">&emsp;作者：<a href="<?php $this->author->permalink();?>"><?php $this->author();?></a></span>
<span>&emsp;时间：<?php $this->date('Y-m-d'); ?></span>
<span class="hidden">&emsp;<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></span>
</div>
<div class="page_content">
<?php
    if (!empty($this->options->FunctionShow) && in_array('lazyLoad', $this->options->FunctionShow)){
        $pattern[] = '/<img(.*?)src="(.*?)"/i';
        $replace[] = '<img  ${1} data-original="${2}"';
    }
    //important tag
    $pattern[] = '/<important>(.*?)<\/important>/i';
    $replace[] = '<p class="attention"><span>${1}</span></p>';

    $content = preg_replace($pattern, $replace, $this->content);
    echo $content;
?>
</div>
<script type="text/javascript">
    var tag_poem    = $(".page_content").find(":not(p,br)").length===0;
    var length_poem = true;
    $(".page_content p").each(function(index, e) {
        length_poem = length_poem && $(e).html().length<100;
    });
    if(length_poem&&tag_poem) {
        $(".page_content").css('text-align', 'center');
    }
</script>
<hr style="width:100%;">
<ul class="page_nav clear-fix">
<li class="page_pre"><?php $this->thePrev();?></li>
<li class="page_next"><?php $this->theNext();?></li>
</ul>
<hr style="width:100%;">
<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('footer.php'); ?>
