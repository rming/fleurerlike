</div>
<?php $this->footer(); ?>
<?php if ($this->is('post')): ?>
<script type="text/javascript" >
function addBlankTargetForLinks () {
  $('.page_content a[href^="http"]').each(function(){
      $(this).attr('target', '_blank');
  });
}
$(document).bind('DOMNodeInserted', function(event) {
  addBlankTargetForLinks();
});
</script>
<?php endif;?>
<?php//仅当有img标签且是post的时候才使用lazyload?>
<?if($this->is('post') && preg_match('/<img(.*)src="(.*)"/i', $this->content)):?>
<?php if (!empty($this->options->FunctionShow) && in_array('lazyLoad', $this->options->FunctionShow)):?>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.lazyload.js'); ?>"></script>
<script type="text/javascript">
$(function() {
    $(".page_content img").lazyload({
        effect : "fadeIn",
        failurelimit : 5,
        threshold : 200
    });
});
</script>
<?endif;?>
<?endif;?>
<?php preg_match_all('/<h([1-9]{1})>/i', $this->content,$matches);?>
<?php if($this->is('post') && count($matches[0])>1):?>
<?php if (!empty($this->options->FunctionShow) && in_array('toc', $this->options->FunctionShow)):?>
<ul id="tree" class="ztree">
</ul>
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('zTreeStyle.css'); ?>">
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.ztree.all-3.5.min.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/ztree_toc.js'); ?>"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#tree').ztree_toc({
        debug:false,
        is_expand_all:false,
        is_auto_number:true,
        documment_selector:'.page_content',
        ztreeStyle: {
            width:'290px',
            overflow: 'auto',
            position: 'fixed',
            'z-index': 2147483647,
            border: '0px none',
            top: '0px',
            right:'0px',
            overflow: 'hidden'
        }
    });
});
</script>
<?endif;?>
<?endif;?>

</body>
</html>
