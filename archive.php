<?php $this->need('header.php'); ?>

    <div  id="main" role="main">
    <div class="home_wrap">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类：%s '),
            'search'    =>  _t('搜索：%s '),
            'tag'       =>  _t('标签：%s '),
            'author'    =>  _t('%s 的文集')
        ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
		<ul class="post_list">
		<?php while($this->next()): ?>
		<li><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a><span class="post_date"><?php $this->date('Y-m-d'); ?></span>
		<?php endwhile; ?>
		</ul>
		<?php $this->pageNav('<<','>>','1'); ?>
        <?php else: ?>
            <article class="post">
                <p class="post-title"><?php _e('没有找到内容'); ?></p>
            </article>
             <div class="archive_wrap">
             <hr>
			<h2><?php _e('文章归档'); ?></h2>
            <ul>
                <?php $this->widget('Widget_Contents_Post_Recent','pageSize=1000')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
            </ul>
        <?php endif; ?>
    </div>
    </div><!-- end #main -->

	<?php $this->need('footer.php'); ?>
