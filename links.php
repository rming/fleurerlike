<?php
	/**
    *友情链接
    *
    * @package custom
    */
	$this->need('header.php'); ?>
	<div class="links_wrap">
		<?php $this->content(); ?>
	</div>
    <script type="text/javascript">
    var links = $(".links_wrap a");
    $.each(links, function(index, e) {
        var icon_api = "http://grabicon.com/icon?domain=";
        $(e).prepend('<img src="'+icon_api+$(e).attr('href')+'&size=16"/>&nbsp;');
    });
    </script>
	<?php $this->need('footer.php'); ?>

