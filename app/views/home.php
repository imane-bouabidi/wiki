<?php
ob_start();
?>

<body
    class="home page-template page-template-page-blog page-template-page-blog-php page page-id-5 theme-jevelin woocommerce-js wpb-js-composer js-comp-ver-6.7.0 vc_responsive sh-header-mobile-spacing-compact sh-blog-style2 carousel-dot-style1 carousel-dot-spacing-5px carousel-dot-size-standard"
    style="overflow: hidden visible;">

    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
    <meta name="generator"
        content="Powered by Slider Revolution 6.6.18 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
    <script
        src="https://jevelin.shufflehound.com/blog1/wp-content/cache/autoptimize/11/js/autoptimize_7df793b9408f9c7fc008504be6cc1a3c.js"></script>
    <div id="page-container" class="">

        <style media="screen">
            .sh-titlebar {
                background-image: url('asstes/img/home-img.webp');
                background-position: center;
            }
        </style>
        <div class="sh-titlebar sh-titlebar-center sh-titlebar-light sh-titlebar-text-style2 sh-titlebar-mobile-layout-compact sh-titlebar-mobile-title-on"
            style="padding-top: 100px;">
            <div class="container">
                <div class="sh-table sh-titlebar-height-small">
                    <div class="sh-table-cell">
                        <div class="titlebar-title">
                            <h2 class="titlebar-title-h1">
                                Home </h2>
                            <div class="sh-titlebar-desc">
                                <p>Masonry + boxel layout</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="wrapper">
            <div class="content-container sh-page-layout-default">
                <div class="container entry-content">
                    <div id="content" class="content-with-sidebar-right blog-page-list">
                        <div class=" sh-group blog-list blog-style-masonry masonry2" 
                            style="position: relative; height: 4238.86px; opacity: 1;">
                            <?php foreach ($wikisDATA as $wiki) {
                                if ($wiki->getIsActive() == 0) {
                                    ?>
                                    <article id="<?=$wiki->getIdWiki()?>"
                                        class="wikis post-item post-93 post type-post status-publish format-standard has-post-thumbnail hentry category-people category-travel tag-girl tag-lifestyle"
                                        itemscope="itemscope" itemtype="http://schema.org/Article"
                                        style="position: absolute; left: 0px; top: 0px;">
                                        <div class="post-container">
                                            <div class="post-meta-thumb">
                                                <img width="1024" height="777" src="asstes/img/<?= $wiki->getImage() ?>"
                                                    class="attachment-large size-large wp-post-image" alt="" loading="lazy"
                                                    sizes="(max-width: 1024px) 100vw, 1024px">
                                                <div class="sh-overlay-style1">
                                                    <div class="sh-table-full">
                                                        <!-- lien vers detail wiki -->
                                                        <a href="index.php?action=detailsPoste&id=<?= $wiki->getIdWiki() ?>"
                                                            class="sh-overlay-item sh-table-cell"
                                                            title="Open the article - Trip that you’ll never ever forget">
                                                            <div class="sh-overlay-item-container">
                                                                <i class="icon-link"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-content-container">
                                                <div class="post-meta post-meta-one">
                                                    <span class="post-meta-author">
                                                        by <a class="bypostauthor" itemprop="url" rel="author">
                                                            <?= $users->getUserById($wiki->getIdUser())->getUserName() ?>
                                                        </a>
                                                    </span>
                                                    <time class="updated semantic" itemprop="dateModified"
                                                        datetime="2016-11-23T23:47:24+00:00"></time>
                                                    <a class="post-meta-date sh-default-color">
                                                        <?= $wiki->getDateCreation() ?>
                                                    </a>
                                                </div>
                                                <a href="index.php?action=detailsPoste&id=<?= $wiki->getIdWiki() ?>"
                                                    class="post-title">
                                                    <h2 itemprop="headline">
                                                        <?= $wiki->getTitre() ?>
                                                    </h2>
                                                </a>
                                                <div class="post-content" itemprop="text">
                                                    <?= substr($wiki->getContenu(),0,80) . '...' ?>
                                                </div>
                                                <div class="post-meta post-meta-two">
                                                    <div class="sh-columns post-meta-comments">
                                                        <span class="post-meta-categories ">
                                                            <i class="icon-tag"></i>
                                                            <a href="" rel="category tag">
                                                                <?= $cat->getCatById($wiki->getIdCat())->getCatName() ?>
                                                            </a>
                                                            <!-- <div class="flex items-center"> -->
                                                            <?php $tagsDATA = $tagDAO->getTagsForWiki($wiki->getIdWiki());
                                                            // print_r($tagsDATA);
                                                            foreach ($tagsDATA as $tag) {
                                                                ?>
                                                                <a href=""
                                                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"
                                                                    rel="category tag">
                                                                    <?= $tag ?>
                                                                </a>
                                                            <?php } ?>
                                                        </span>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                <?php }
                            } ?>
                        </div>
                        <!-- <div class="sh-pagination sh-default-color">
                            <ul class="page-numbers">
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="https://jevelin.shufflehound.com/blog1/page/2/">2</a>
                                </li>
                                <li><a class="next page-numbers"
                                        href="https://jevelin.shufflehound.com/blog1/page/2/">Next</a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div id="sidebar" class="sidebar-right" role="complementary" itemscope="itemscope"
                        itemtype="http://schema.org/WPSideBar">
                        <div id="recent_posts-2" class="widget_social_links widget-item widget_recent_posts">
                            <div class="wrap-recent-posts">
                                <h3 class="widget-title">Posts recents</h3>
                                <?php foreach ($latestWikis as $wiki) {
                                    if ($wiki->getIsActive() == 0) {
                                        ?>

                                        <div class="sh-recent-posts-widgets">
                                            <div class="sh-recent-posts-widgets-item">
                                                <div class="sh-recent-posts-widgets-item-thumb">
                                                    <a href="index.php?action=detailsPoste&id=<?= $wiki->getIdWiki() ?>">
                                                        <div class="sh-ratio">
                                                            <div class="sh-ratio-container sh-ratio-container-square">
                                                                <div class="sh-ratio-content"
                                                                    style="background-image: url(asstes/img/<?= $wiki->getImage() ?>);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sh-mini-overlay">
                                                            <div class="sh-mini-overlay-container">
                                                                <div class="sh-table-full">
                                                                    <div class="sh-table-cell">
                                                                        <i class="icon-link"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="sh-recent-posts-widgets-count">
                                                    0 </div> -->
                                                    </a>
                                                </div>
                                                <div class="sh-recent-posts-widgets-item-content">
                                                    <span class="post-meta-categories"><a rel="category tag">
                                                            <?= $cat->getCatById($wiki->getIdCat())->getCatName() ?>
                                                        </a> ,
                                                        <a>
                                                            <?= $wiki->getDateCreation() ?>
                                                        </a>
                                                    </span>
                                                    <a href="index.php?action=detailsPoste&id=<?= $wiki->getIdWiki() ?>">
                                                        <h6>
                                                            <?= $wiki->getTitre() ?>
                                                        </h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                        <div id="search-2" class="widget-item widget_search">
                            <form method="get" class="search-form" action="https://jevelin.shufflehound.com/blog1/">
                                <div>
                                    <label>
                                        <input type="search" id="search" class="sh-sidebar-search search-field"
                                            placeholder="Search here..." value="" name="s" title="Search text"
                                            required="">
                                    </label>
                                    <button type="submit" class="search-submit">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div id="tag_cloud-2" class="widget-item widget_tag_cloud">
                            <h3 class="widget-title">Categories recents</h3>
                            <div class="tagcloud">
                                <?php foreach ($latestCats as $cats) { ?>
                                    <a class="tag-cloud-link tag-link-52 tag-link-position-1" style="font-size: 8pt;"
                                        aria-label="Bike (1 item)">
                                        <?= $cats->getCatName() ?>
                                    </a>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sh-back-to-top sh-back-to-top3">
            <i class="icon-arrow-up"></i>
        </div>
    </div>

</body>
<?php
$content = ob_get_clean();

include_once 'layout.php';
?>