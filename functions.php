<?php

function themeConfig($form) {
	$leftBgcolor = new Typecho_Widget_Helper_Form_Element_Text('leftBgcolor', NULL, NULL, _t('侧边栏背景颜色'), _t('在这里填入一个颜色（16进制、RGB）, 如：“#551C1C”、“RGB(85, 28, 28)”'));
    $form->addInput($leftBgcolor);
	$leftBgimg = new Typecho_Widget_Helper_Form_Element_Text('leftBgimg', NULL, NULL, _t('侧边栏背景图片'), _t('在这里填入一个图片URL地址, 以在网站侧边栏背景使用图片'));
    $form->addInput($leftBgimg);
    $rightBgcolor = new Typecho_Widget_Helper_Form_Element_Text('rightBgcolor', NULL, NULL, _t('内容区背景颜色'), _t('在这里填入一个颜色（16进制、RGB）, 如：“#EEEEEE”、“RGB(238, 238, 238)”'));
    $form->addInput($rightBgcolor);
    $rightBgimg = new Typecho_Widget_Helper_Form_Element_Text('rightBgimg', NULL, NULL, _t('内容区背景图片'), _t('在这里填入一个图片URL地址, 以在网站内容区域背景使用图片'));
    $form->addInput($rightBgimg);
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('网站图标'), _t('在这里填入一个网站图标URL地址, 以便访问者浏览器的收藏夹使用'));
    $form->addInput($favicon);
    
    //是否启用返回顶部按钮
    $FunctionShow = new Typecho_Widget_Helper_Form_Element_Checkbox('FunctionShow', 
    array('ShowBacktop' => _t('显示返回顶部按钮'),
    	'OfflineEdit' => _t('离线编辑器支持'),
    	'AllowRss' => _t('RSS输出支持'),
    	'AllowPingback' => _t('Pingback支持'),
    ),
    array('ShowBacktop','OfflineEdit','AllowRss','AllowPingback'), _t('功能开关'));
    $form->addInput($FunctionShow->multiMode());
     /*
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
    */
}
