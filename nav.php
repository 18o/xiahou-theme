<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<header id="header" class="header" >
    <div class="header-inner">
        <div class="site-nav-toggle">
            <button>
                <span class="btn-bar"></span>
                <span class="btn-bar"></span>
                <span class="btn-bar"></span>
            </button>
        </div>

        <nav class="site-nav">
            <ul id="menu" class="menu menu-left">
                <li class="menu-item menu-item-home">
                    <a href="/" rel="section">
                        <i class="menu-item-icon fa fa-home fa-fw"></i> <br />首页
                    </a>
                </li>
                <li class="menu-item menu-item-archives">
                    <a href="/archives" rel="section">
                        <i class="menu-item-icon fa fa-archive fa-fw"></i> <br />归档
                    </a>
                </li>

                <li class="menu-item menu-item-tags">
                    <a href="/tags" rel="section">
                        <i class="menu-item-icon fa fa-tags fa-fw"></i> <br />标签
                    </a>
                </li>


                <li class="menu-item menu-item-search">
                    <a href="#" class="st-search-show-outputs">
                        <i class="menu-item-icon fa fa-search fa-fw"></i> <br />搜索
                    </a>
                </li>
            </ul>

            <div class="site-search">
                <form class="site-search-form">
                    <input type="text" id="st-search-input" class="st-search-input st-default-search-input" />
                </form>

            </div>
        </nav>
    </div>
</header>