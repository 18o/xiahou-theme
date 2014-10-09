
		<div class="main-post-list">
			<ol class="post-list">
				<?php while($this->next()): ?>
					<li>
					<h2 class="post-list__post-title post-title">
						<a href="<?php $this->permalink() ?>" title="阅读 <?php $this->title() ?>">
						<?php $this->title() ?></a>
					</h2>
					<p class="excerpt"><?php $this->content(); ?></p>
					<div class="post-list__meta">
						<time datetime="<?php $this->date(); ?>" class="post-list__meta--date date">
						<?php $this->date(); ?></time> &#8226; 
						<span class="post-list__meta--tags tags"><?php $this->category(','); ?></span>
						<span class="post-list__meta--tags tags"><?php $this->tags('|'); ?></span>
						<a class="btn-border-small" href="<?php $this->permalink() ?>">继续阅读</a>

					</div>
					<hr class="post-list__divider" />
					</li>
				<?php endwhile; ?>
			</ol>
		    <hr class="post-list__divider " />

			<nav class="pagination" role="navigation">
<?php $this->pageLink('<span class="newer-posts pagination__newer btn btn-small btn-tertiary">&larr; 最近</span>'); ?>
			    <span class="pagination__page-number"><?php echo $this->getCurrentPage() ?> / <?php echo $this->getTotalPage() ?></span>
<?php $this->pageLink('<span class="older-posts pagination__older btn btn-small btn-tertiary">更早 &rarr;</span>', 'next'); ?>
			        
			</nav>
		</div>
	    

