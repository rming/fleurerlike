<?php
/**
 * 类似 <a href="http://fleurer-lee.com/" target="_blank">fleurer</a> 博客，简洁风格主题。
 *
 * @package Typecho FleurerLike  Theme
 * @author Rming
 * @version 0.1
 * @link http://rmingwang.com
 */
$this->need('header.php');?>
<div class="home_wrap">
<ul class="post_list">
<?php while($this->next()): ?>
<li><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a><span class="post_date"><?php $this->date('Y-m-d'); ?></span>
<?php endwhile; ?>
</ul>
<?php $this->pageNav('<<','>>','1'); ?>

</div>
<?php $this->need('footer.php'); ?>
