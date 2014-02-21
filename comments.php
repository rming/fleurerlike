<div id="comments">
<?php $this->comments()->to($comments); ?>
<?php if ($comments->have()): ?>
<?php $comments->listComments(); ?>
<?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
<?php endif; ?>

<?php if($this->allow('comment')): ?>
<div id="<?php $this->respondId(); ?>" class="respond">
<div class="cancel-comment-reply">
<?php $comments->cancelReply(); ?>
</div>
<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
<?php if($this->user->hasLogin()): ?>
<p>已登录 <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
<?php else: ?>
<p>
<label for="author"><?php _e('用户昵称：&nbsp;'); ?><span class="required">*</span></label>
<input type="text" name="author" id="author" class="text" size="15"  placeholder="Username"  />
</p>
<p>
<label for="mail"><?php _e('电子邮箱：&nbsp;'); ?><?php if ($this->options->commentsRequireMail): ?><span class="required">*</span><?php endif; ?></label>
<input type="text" name="mail" id="mail" class="text" size="15"  placeholder="username@mail.com"   />
</p>
<p>
<label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('个人网站：&nbsp;'); ?></label>
<input type="url" name="url" id="url" class="text" placeholder="http://" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
</p>
<?php endif; ?>
<p>
<textarea rows="5" cols="50" name="text" class="textarea"  id="comment"  ></textarea>
</p>
<p><input type="submit" value="<?php _e('提交评论'); ?>" class="submit" /></p>
</form>
</div>
<?php else: ?>
<h4><?php _e('评论已关闭'); ?></h4>
<?php endif; ?>
</div>