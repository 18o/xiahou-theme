<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
	<?php $this->comments()->to($comments); ?>
	<section id="conversation" data-role="main" data-tracking-area="main">
		<div id="posts">
			<div id="form">
				<form class="reply authenticated" action="<?php $this->commentUrl() ?>" method="post">
					<div class="postbox">
						<div class="avatar">
							<a>
								<img src="//a.disquscdn.com/1414604865/images/noavatar92.png" alt="头像">
							</a>
						</div>
						<div data-role="login-form">
							<div>
								<section class="auth-section logged-out">
									<div class="guest input-wrapper">
										<input dir="auto" type="text" placeholder="姓名" name="author" maxlength="30" required>
										<input dir="auto" type="email" id="email" placeholder="电子邮件" name="email" required>
										<input dir="auto" type="text" placeholder="网站" name="url">
									</div>
								</section>
							</div>
							<div class="textarea-wrapper">
								<textarea class="textarea" name="text" style="overflow: auto;"></textarea>
								<div class="post-actions">
									<span id="hello">欢迎您留下您的建议或批评，感激不尽。</span>
<!--									<span class="comment-count">--><?php //$this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?><!--</span>-->
									<div class="temp-post" style="text-align: right">
										<button class="btn"> 提 交 </button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<ul id="post-list" class="post-list">
				<li class="post">
					<div data-role="post-content" class="post-content">
						<div class="indicator"></div>

						<div class="avatar">
							<div class="user"><img src="//a.disquscdn.com/1414604865/images/noavatar92.png" class="user" alt="头像"></div>
						</div>

						<div class="post-body">
							<header>
								<span class="post-byline">
								<span class="author">Guest</span>

								</span>

								<span class="post-meta">
								<span class="bullet time-ago-bullet" aria-hidden="true">•</span>

								<a href="http://mlongbo.com/set_as_default_search_engine/#comment-1588182389" data-role="relative-time" class="time-ago" title="2014年9月14日星期日上午10点39">2个月前</a>
								</span>

							</header>

							<div class="post-body-inner">
								<div class="post-message-container" data-role="message-container">
								<div class="publisher-anchor-color" data-role="message-content">
								<div class="post-message " data-role="message" dir="auto">
								<p>你好，我是火狐用户，我真崇拜你！</p>
								</div>

								</div>
								</div>

							</div>

						</div>

					</div>
				</li>


		</ul>
			<?php $comments->listComments(array(
				'before'        =>  '<ul class="post-list" id="post-list">',
				'after'         =>  '</ul>',
				'beforeAuthor'  =>  '',
				'afterAuthor'   =>  '',
				'beforeDate'    =>  '',
				'afterDate'     =>  '',
				'dateFormat'    =>  $this->options->commentDateFormat,
				'replyWord'     =>  _t('回复'),
				'commentStatus' =>  _t('您的评论正等待审核！'),
				'avatarSize'    =>  32,
				'defaultAvatar' =>  NULL
			)); ?>
		</div>

	</section>
</div>