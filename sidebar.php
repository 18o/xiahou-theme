<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<aside id="sidebar" class="sidebar">
    <div class="sidebar-inner">
        <section class="site-overview sidebar-panel  sidebar-panel-active ">
            <div class="site-author motion-element">
                <img class="site-author-image" src="<?php $this->options->themeUrl('public/img/7539841.jpeg')?>"
                     alt="IIssNan" />
                <p class="site-author-name">夏侯仲达</p>
                <p class="site-description motion-element">我得到的都是侥幸 我失去的都是人生</p>
            </div>
            <nav class="site-state motion-element">
                <div class="site-state-item site-state-posts">
                    <a href="/archive.html">
                        <span class="site-state-item-count">
                            <?php
                            $this->widget('Widget_Stat')->to($stat);
                            echo $stat->publishedPostsNum;
                            ?>
                        </span>
                        <span class="site-state-item-name">日志</span>
                    </a>
                </div>

                <div class="site-state-item site-state-categories">
                    <span class="site-state-item-count">
                        <?php
                        echo $stat->categoriesNum;
                        ?>
                    </span>
                    <span class="site-state-item-name">分类</span>

                </div>

                <div class="site-state-item site-state-tags">
                    <a href="/tags">
                        <span class="site-state-item-count">
                            <?php
                            echo tags_count();
                            ?>
                        </span>
                        <span class="site-state-item-name">标签</span>
                    </a>
                </div>

            </nav>


            <div class="feed-link motion-element">
                <a href="/feed/atom/" rel="alternate">
                    <i class="fa fa-rss"></i>
                    RSS
                </a>
            </div>

            <div class="links-of-author motion-element">
                <span class="links-of-author-item">
                <a href="https://github.com/xtreeio" target="_blank">
                    <i class="fa fa-github"></i> GitHub
                </a>
                </span>

                <span class="links-of-author-item">
                <a href="https://twitter.com/tzllangzi" target="_blank">
                    <i class="fa fa-twitter"></i> Twitter
                </a>
                </span>

                <span class="links-of-author-item">
                <a href="http://weibo.com/tzllangzi" target="_blank">
                    <i class="fa fa-weibo"></i> 微博
                </a>
                </span>

                <span class="links-of-author-item">
                <a href="http://www.zhihu.com/people/xia-hou-zhong-da" target="_blank">
                    <i class="fa fa-globe"></i> 知乎
                </a>
                </span>
            </div>

            <div class="links-of-author motion-element"></div>
        </section>
    </div>
</aside>