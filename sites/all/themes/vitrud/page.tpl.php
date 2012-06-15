<div id="page_wrapper">
        <header id="header" > <!-- Шапка сайта -->
                <?php if ($site_name || $site_slogan || $logo): ?> 
                 <!-- если задано имя сайта, слоган или лого выводим блок заголовков -->
                        <hgroup>
                <?php if ($logo): ?> <!-- Если задан логотип - выводим логотип -->
                     <a title="<?php print t('Home'); ?>" rel="home" href="<?php print $front_page; ?>">
                     <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
                <?php endif; ?>
                <?php if ($site_name): ?> <!-- Если заданно имя сайта - выводим -->
                     <h1><a title="<?php print t('Home'); ?>" rel="home" href="<?php print $front_page; ?>">
                                     <?php print $site_name; ?></a></h1>
                <?php endif; ?>
                <?php if ($site_slogan): ?> <!-- Если задан слоган сайта - выводим -->
                     <h2><?php print $site_slogan; ?></h2>
                <?php endif; ?>
                </hgroup>
        <?php endif; ?>
        </header>

<?php if ($primary_nav): ?>
   <nav class="primary_nav">
      <?php print $primary_nav; ?>
   </nav> 
<?php endif; ?>

        <aside id="left_column"> <!-- Левая колонка  c регионом  sidebar_first -->
                  <?php print render($page['sidebar_first']); ?>
        </aside>
        <div id="article_wrapper" > <!--Правая колонка-->
        <?php print $breadcrumb; /* Выводим "Выводим "хлебне крошки" */ ?>
        <?php print $messages; /* Выводим сообщения системы */ ?>
          <!-- Заголовок с суффиксом и преффиксом -->
        <?php print render($title_suffix); ?>
        <?php if($title): ?> <h1><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print render($tabs); /* Выводим табы */ ?> 
        <?php print render($page['content']); /* Выводим регион "контент" */ ?>
        </div>
        <footer> <!-- подвал сайта с регионом footer -->
         <?php print render($page['footer']); ?>
        </footer>
</div>