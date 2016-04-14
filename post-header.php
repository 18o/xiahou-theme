<header class="post-header">
    <h1 class="post-title">
        <a class="post-title-link" href="<?php $this->permalink() ?>">
            <?php $this->title() ?>
        </a>
    </h1>
    <div class="post-meta">
        <span class="post-time">
            <span class="post-meta-item-icon">
                <i class="fa fa-calendar-o"></i>
            </span>
            <span class="post-meta-item-text">发表于</span>
            <time datetime="<?php $this->date(); ?>" content="<?php $this->date(); ?>">
                <?php $this->date(); ?>
            </time>
        </span>
        <span class="post-category" >&nbsp; | &nbsp;
            <span class="post-meta-item-icon">
                <i class="fa fa-folder-o"></i>
            </span>
            <span class="post-meta-item-text">分类于</span>

            <span>
              <a href="<?php $this->permalink() ?>"  rel="index">
                  <span><?php $this->category('-'); ?></span>
              </a>
            </span>
        </span>

          <span class="post-comments-count">&nbsp; | &nbsp;
            <a href="<?php $this->permalink() ?>#comments">
                <span class="post-comments-count ds-thread-count">
                    <?php $this->commentsNum('没有评论', '1 条评论', '%d 条评论'); ?>
                </span>
            </a>
          </span>

         <span id="/2015/questions-in-writing/" class="leancloud_visitors">
           &nbsp; | &nbsp;
           <span class="post-meta-item-icon">
             <i class="fa fa-eye"></i>
           </span>
           <span class="post-meta-item-text">阅读次数 </span>
           <span class="leancloud-visitors-count">
               <?php
                    echo post_views($this->cid);

               ?>
           </span>
          </span>

    </div>
</header>