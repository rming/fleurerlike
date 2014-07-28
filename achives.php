<?php
	/** 
    *文章归档
    * 
    * @package custom
    */
	$this->need('header.php');?>
	    <div class="archive_wrap">
			<h2><?php _e('文章归档'); ?></h2>
            <ul>
                <?php $this->widget('Widget_Contents_Post_Recent','pageSize=10000')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
            </ul>
			<h2><?php _e('月份归档'); ?></h2>
            <ul>
                <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
            </ul>
		</div>
	<?php $this->need('footer.php');?>

