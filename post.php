<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<article class="post-container post-container--single">

    <header class="post-header">
      <div class="post-meta">
        <time datetime="<?php $this->date(''); ?>" class="post-meta__date date"><?php $this->date(''); ?></time> • 
        <span class="post-list__meta--tags tags"><?php $this->category(','); ?></span>
						<span class="post-list__meta--tags tags"><?php $this->tags('|'); ?></span>
        <!--<span class="post-meta__author author"><img src="//www.gravatar.com/avatar/e429cf43c5aa09b182dc4d30610ced04?d=404&amp;s=250" alt="profile image for Longbo Ma" class="avatar post-meta__avatar" /> by Longbo Ma</span>-->
      </div>
      <h1 class="post-title"><?php $this->title() ?></h1>
    </header>

    <section class="post">
      <p><?php $this->content(); ?></p>
    </section>

  </article>
<section class="post-comments">
  <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'xiahou'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</section>



  	<?php $this->need('footer.php'); ?>