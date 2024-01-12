<div role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
    <header class="primary-mobile" style="height: 60px;">
        <div id="header-mobile" class="sh-header-mobile">
            <div class="sh-header-mobile-navigation">
                <div class="container">
                    <div class="sh-table">
                        <div class="sh-table-cell sh-group">
                            <div class="header-logo sh-group-equal">
                                <a href="index.php?action=home" class="header-logo-container sh-table-small" rel="home">
                                    <div class="sh-table-cell">
                                        <img class=" w-4" src="asstes\img\wiki-logo.png" alt="wiki logo">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="sh-table-cell">
                            <nav id="header-navigation-mobile" class="header-standard-position">
                                <div class="sh-nav-container">
                                    <ul class="sh-nav sf-js-enabled" style="touch-action: pan-y;">
                                        <li class="menu-item sh-nav-dropdown">
                                            <a>
                                                <div class="sh-table-full">
                                                    <div class="sh-table-cell">
                                                        <span class="c-hamburger c-hamburger--htx">
                                                            <span>Toggle menu</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="sh-header-mobile-dropdown" style="display: none;">
                <div class="container sh-nav-container">
                    <ul class="sh-nav-mobile">
                        <li id="menu-item-7"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-7">
                            <a href="index.php?action=home">Home</a>
                        </li>
                        <li id="menu-item-112"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-112"><a
                                href="index.php?action=signUp">Sign Up</a>
                        </li>
                        <li id="menu-item-112"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-112"><a
                                href="index.php?action=logIn">Log In</a>
                        </li>

                    </ul>
                </div>
                <div class="container sh-nav-container">
                    <div class="header-mobile-search">
                        <form role="search" method="get" class="header-mobile-form"
                            action="https://jevelin.shufflehound.com/blog1/">
                            <input class="header-mobile-form-input" type="text" placeholder="Search here.." value=""
                                name="s" required="">
                            <button type="submit" class="header-mobile-form-submit">
                                <i class="icon-magnifier"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="header-mobile-social-media">
                    <a href="https://twitter.com" target="_blank" class="social-media-twitter">
                        <i class="icon-social-twitter"></i>
                    </a><a href="https://facebook.com" target="_blank" class="social-media-facebook">
                        <i class="icon-social-facebook"></i>
                    </a>
                    <div class="sh-clear"></div>
                </div>
            </nav>
        </div>
    </header>
    <header class="primary-desktop" style="height: 100.8px;">
        <div class="sh-header-height">
            <div class="sh-header sh-header-1 sh-header-small-icons">
                <div class="container">
                    <div class="sh-table">
                        <div class="sh-table-cell sh-group">
                            <div class="header-logo sh-group-equal">
                                <a href="index.php?action=home" class="header-logo-container sh-table-small" rel="home">
                                    <div class="sh-table-cell">
                                        <!-- <div style="display: flex; flex-direction : column;">
                                            <img style="width: 60px;" src="asstes\img\wiki-logo.png" alt="wiki logo">
                                        </div> -->
                                        <h1>Wiki™</h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="sh-table-cell">
                            <nav id="header-navigation" class="header-standard-position">
                                <div class="sh-nav-container">
                                    <ul id="menu-menu-1" class="sh-nav sf-js-enabled" style="touch-action: pan-y;">
                                        <li id="menu-item-7"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-7">
                                            <a href="index.php?action=home">Home</a>
                                        </li>
                                        <?php if (empty($_SESSION['admin']) && empty($_SESSION['author'])) { ?>
                                            <li id="menu-item-112"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-112">
                                                <a href="index.php?action=signUp">Sign Up</a>
                                            </li>
                                            <li id="menu-item-111"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-111">
                                                <a href="index.php?action=logIn">Log In</a>
                                            </li>
                                        <?php } ?>
                                        <li id="menu-item-111"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-111">
                                            <?php if (!empty($_SESSION['admin'])) { ?>
                                            <a href="index.php?action=adminDash">Dashboard</a>
                                            <?php }else if(!empty($_SESSION['author'])){?>
                                                <a href="index.php?action=authorDash">Dashboard</a>
                                            <?php }?>
                                        </li>
                                        <?php if (!empty($_SESSION['admin']) || !empty($_SESSION['author'])) { ?>
                                            <li id="menu-item-112"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-112">
                                                <a href="index.php?action=logOut">Log Out</a>
                                            </li>
                                        <?php } ?>
                                        <li class="menu-item sh-nav-search sh-nav-special">
                                            <a href="#"><i class="icon icon-magnifier"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div id="header-search" class="sh-header-search">
                    <div class="sh-table-full">
                        <div class="sh-table-cell">
                            <div class="line-test">
                                <div class="container">
                                    <form method="get" class="sh-header-search-form"
                                        action="https://jevelin.shufflehound.com/blog1/">
                                        <input type="search" class="sh-header-search-input" placeholder="Search Here.."
                                            value="" name="s" required="">
                                        <button type="submit" class="sh-header-search-submit">
                                            <i class="icon-magnifier"></i>
                                        </button>
                                        <div class="sh-header-search-close close-header-search">
                                            <i class="ti-close"></i>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>