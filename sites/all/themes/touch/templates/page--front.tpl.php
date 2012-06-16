<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<div class="wrapper">
    <!--Header (start)-->
    <header class="header clearfix">

        <!--start logo-->
        <?php if ($logo): ?>
        <a class='header__logo' href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
        </a>
        <?php endif; ?>
        <!--end logo-->

        <?php if ($page['search_box']): ?>
        <!-- / start search box region -->
        <div class="header__search">
            <?php print render($page['search_box']); ?>
        </div>
        <!-- / end search box region -->
        <?php endif; ?>

        <!-- <?php print render($page['header']); ?> -->
        <nav class="main-menu">
            <?php
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
            print drupal_render($main_menu_tree);
            ?>
        </nav>
    </header>
    <!-- Header (end) -->
</div>

<div class="wrapper wrapper_type_slider">
    <!-- Slider (begin) -->
    <div class="slideshow">
    <!--<?php if ($is_front): ?>  -->

        <div class='slideshow__banners my_toggle'>
            <a class='my_toggle__elem my_toggle__elem-vis-yes' href="http://wols.com.ua/content/11">
                <img class="slideshow__banners-images-big slideshow__banners-images-big_visibility_yes" src="sites/default/files/baner/1_1_banner.jpg">
            </a>

            <a class='my_toggle__elem' href="http://wols.com.ua/welcome">
                <img class="slideshow__banners-images-big" src="sites/default/files/main_baner/welcome.jpg">
            </a>

            <a class='my_toggle__elem' href="http://wols.com.ua/events">
                <img class="slideshow__banners-images-big" src="sites/default/files/main_baner/prayer.jpg">
            </a>

            <a class='my_toggle__elem' href="http://wols.com.ua/events">
                <img class="slideshow__banners-images-big" src="sites/default/files/main_baner/camp_childrens_simf.jpg">
            </a>
        </div
       ><div class="scroller" id="viewPort">

            <div class="scroller__banners" id="content_banner">

                <a href="media/sermon_series/dream_to_mission">
                    <img src="sites/default/files/baner/dream_to_mission.jpg" width="236" height="93" class="slider">
                </a>

                <a href="media/sermon_series/law_good">
                    <img src="sites/default/files/baner/law_good.jpg" width="236" height="93" class="slider">
                </a>

                <a href="media/sermon_series/one-life">
                    <img src="sites/default/files/baner/1life.jpg" width="236" height="93" class="slider">
                </a>

                <a href="media/sermon_series/key">
                    <img src="sites/default/files/baner/key.jpg" width="236" height="93" class="slider">
                </a>

                <a href="media/sermon_series/secrets">
                    <img src="sites/default/files/baner/secret.jpg" width="236" height="93" class="slider">
                </a>

                <a href="media/sermon_series/360">
                    <img src="sites/default/files/baner/360.jpg" width="236" height="93" class="slider">
                </a>

            </div>

<!--            <div class='arrow'>-->
<!---->
<!--                <img src="sites/default/files/baner/arrow.png" alt="next">-->
<!---->
<!--            </div>-->

        </div>

        <script>
//            var toggleBanners = new FadeToggle({
//                wrapper:'my_toggle',
//                elem:'__elem',
//                onMod:'-vis-yes'
//            });
//
//            var scrollBanners = new MyScroller({
//                wrapper:'scroller__banners',
//                elem:'slider',
//                elemHeight:93
//            });
        </script>

        <!-- <?php endif; ?> -->
    </div>
    <!-- Slider (begin) -->
</div>

<div class="wrapper">
    <!-- Content (begin) -->
    <div class="main">
        <section class="main__content" role="main">

            <aside class="content__aside">
                <?php print render($page['sidebar_first']); ?>

                <h2 class="block-header">
                    Расписание собраний
                </h2>

                <div class="service">
                    <p>
                        <strong>Воскресенье</strong><br/>
                        <span class="service__time">12:00 - Богослужение</span><br/>
                        <strong>Понедельник</strong><br/>
                        <span class="service__time">18:00 - Молитвенное Богослужение</span><br/>
                        <span class="service__time">18:00 - Библейская школа</span><br/>
                        <strong>Вторник</strong><br/>
                        <span class="service__time">16:00 - Служение «Золотой век»</span><br/>
                        <span class="service__time">18:00 - Библейская школа</span><br/>
                        <strong>Среда</strong><br/>
                        <span class="service__time">18:00 - Семейный курс</span><br/>
                    </p>
                </div>
            </aside
           ><article class="content__article">
                <h2 class="block-header">
                    Последняя проповедь
                </h2>
                <?php print render($page['content']); ?>
            </article>

        </section
       ><aside class="main__aside">
            <div class="rcol">
                <div class="rcol__video">
                    <iframe width="300" height="169" src="http://www.youtube.com/embed/W6eObOU9b0U" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="rcol__video">
                    <iframe width="300" height="169" src="http://www.youtube.com/embed/4VdtybN3ovU" frameborder="0" allowfullscreen></iframe>
                </div>

                <a class="rcol__banner" href="http://aleksandrshevchenko.org/calendar/summer-tour-in-ukrainian-cities" target="_blank">
                    <img src="http://aleksandrshevchenko.org/modules/mod_image_show_gk4/cache/banners.ua-tour-2012-3gk-is-354.png" width="270" height="105" alt="Summer tour">
                </a>

                <a class="rcol__banner" href="http://www.youtube.com/user/melitopolwl">
                    <img src="sites/default/files/baner/youtube-logo.png" alt="YouTube" width="199" height="79" >
                </a>

            </div>
        </aside>
    </div>
    <!-- Content (end) -->

    <!-- Footer (begin)-->
    <div id="footer" class="clearfix">
        <div id="copyright">Слово Жизни &copy <?php echo date("Y"); ?>, <?php print $site_name; ?></div>
    </div>
    <!-- Footer (end)-->
</div>