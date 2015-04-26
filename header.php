<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" charset="<?php $this->options->charset(); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title><?php if($this->is('index')): ?><?php $this->options->title(); ?>
<?php elseif($this->is('archive')): ?><?php $this->archiveTitle('','',' | '); ?><?php $this->options->title(); ?>
<?php else: ?><?php $this->archiveTitle('','',' | '); ?><?php $this->options->title(); ?><?php endif; ?></title>
<?php if (!empty($this->options->FunctionShow) && in_array('OfflineEdit', $this->options->FunctionShow)):$noOfflineEdit='';else:$noOfflineEdit='&xmlrpc=&wlw=';endif; ?>
<?php if (!empty($this->options->FunctionShow) && in_array('AllowRss', $this->options->FunctionShow)):$noRss='';else:$noRss='&rss1=&rss2=&atom=';endif; ?>
<?php if (!empty($this->options->FunctionShow) && in_array('AllowPingback', $this->options->FunctionShow)):$noPingback='';else:$noPingback='&pingback=';endif; ?>
<?php $this->header('generator=&template='.$noOfflineEdit.$noRss.$noPingback); ?>
<?php if ($this->options->favicon):?>
<link rel="shortcut icon" type="image/png" href="<?php $this->options->favicon()?>" />
<?php endif;?>
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.min.css'); ?>" />
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery-1.7.2.min.js'); ?>"></script>
<?php if (!empty($this->options->FunctionShow) && in_array('ShowBacktop', $this->options->FunctionShow)): ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/gotop.js'); ?>"></script>
<?php endif; ?>
<style type="text/css">
body {background:<?php if ($this->options->rightBgcolor): $this->options->rightBgcolor(); else:echo "#eee"; endif;?>  <?php if ($this->options->rightBgimg): ?>url('<?php $this->options->rightBgimg();?>') no-repeat right bottom fixed<?php endif;?>;}
.header{background:<?php if ($this->options->leftBgcolor): $this->options->leftBgcolor(); else:echo "#551C1C"; endif;?>  <?php if ($this->options->leftBgimg): ?>url(<?php $this->options->leftBgimg();?>) left bottom no-repeat<?php endif; ?>;}
.user_avatar{background:url("<?php if ($this->options->user_avatar): $this->options->user_avatar(); else:echo "/usr/themes/fleurerlike/images/avatar.png"; endif;?>") center center no-repeat;background-size:cover;}
</style>

</head>
<body>
<div class="header" >
<a href="<?php $this->options->siteUrl(); ?>" class="logo" ><span class="user_avatar"></span></a>
<form method="post" action="/search/">
	<input type="text" name="s" class="text"  placeholder="search" size="20">
</form>
<?php $this->widget('Widget_Contents_Page_List')->parse('<a href="{permalink}" class="header_links clearfix">{title}</a>'); ?>
</div>
<div class="content_wrap" >
