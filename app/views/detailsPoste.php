<?php
ob_start();
?>

<body
    class="post-template-default single single-post postid-93 single-format-standard theme-jevelin woocommerce-js wpb-js-composer js-comp-ver-6.7.0 vc_responsive singular sh-header-mobile-spacing-compact sh-blog-style2 carousel-dot-style1 carousel-dot-spacing-5px carousel-dot-size-standard"
    style="overflow: hidden visible;">
    <div class="sh-page-loader sh-table sh-page-loader-style-spinner" style="display: none;">
        <div class="sh-table-cell">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
    <meta name="generator"
        content="Powered by Slider Revolution 6.6.18 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
    <script
        src="https://jevelin.shufflehound.com/blog1/wp-content/cache/autoptimize/11/js/autoptimize_055e7365edf74e9be21ad12110cd770f.js"></script>
    <?php include_once("C:/xampp\htdocs\wiki\app/views\header.php"); ?>

    <div id="page-container" class="">


        <div id="wrapper">
            <div class="content-container sh-page-layout-default">
                <div class="container entry-content">
                    <div id="content" class="content">
                        <div class="blog-single blog-style-large">
                            <article
                                class="post-item post-item-single post-93 post type-post ">
                                <div class="post-container">
                                    <div class="post-meta-thumb">
                                        <img src="asstes/img/<?= $wikiDATA->getImage() ?>"
                                            class=" w-24"
                                            alt="" loading="lazy">
                                    </div>
                                    <a class="post-title">
                                        <h1 itemprop="headline">
                                            <?= $wikiDATA->getTitre() ?>
                                        </h1>
                                    </a>
                                    <div class="post-meta-data sh-columns">
                                        <div class="post-meta post-meta-one">
                                            <span class="post-meta-author">
                                                by <a class="bypostauthor" itemprop="url" rel="author">
                                                    <?= $users->getUserById($wikiDATA->getIdUser())->getUserName() ?>
                                                </a>
                                            </span>
                                            <time class="updated semantic" itemprop="dateModified"
                                                datetime="2016-11-23T23:47:24+00:00"></time>
                                            <a class="post-meta-date sh-default-color">
                                                <?= $wikiDATA->getDateCreation() ?>
                                            </a>
                                        </div>
                                        <div class="post-meta post-meta-two">
                                            <div class="sh-columns post-meta-comments">
                                                <span class="post-meta-categories ">
                                                    <i class="icon-tag"></i>
                                                    <a href="" rel="category tag">
                                                        <?= $cat->getCatById($wikiDATA->getIdCat())->getCatName() ?>
                                                    </a></span>
                                                <meta itemprop="interactionCount" content="UserComments:0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-content" itemprop="text">
                                        <p><span class="sh-dropcaps" style="font-size: 18px;">Q</span>
                                            <?= $wikiDATA->getContenu() ?>
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <div class="sh-clear"></div>
                            <div class="sh-page-links"></div>
                            <div class="sh-blog-tags">
                                <h5>Tags In</h5>
                                <div class="sh-blog-tags-list">
                                    <?php $tagsDATA = $tagDAO->getTagsForWiki($wikiDATA->getIdWiki());
                                    // print_r($tagsDATA);
                                    foreach ($tagsDATA as $tag) {
                                        ?>
                                        <a href=""
                                            class="sh-blog-tag-item inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"
                                            rel="category tag">
                                            <?= $tag ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include_once('C:\xampp\htdocs\wiki\app\views\footer.php') ?>
            </div>
        </div>

        <iframe id="_hjSafeContext_31055803" title="_hjSafeContext" tabindex="-1" aria-hidden="true" src="about:blank"
            style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
</body>
<?php
$content = ob_get_clean();
include_once 'layout.php';
?>