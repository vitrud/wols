<div id="page_wrapper">
        <header id="header" > <!-- ����� ����� -->
                <?php if ($site_name || $site_slogan || $logo): ?> 
                 <!-- ���� ������ ��� �����, ������ ��� ���� ������� ���� ���������� -->
                        <hgroup>
                <?php if ($logo): ?> <!-- ���� ����� ������� - ������� ������� -->
                     <a title="<?php print t('Home'); ?>" rel="home" href="<?php print $front_page; ?>">
                     <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
                <?php endif; ?>
                <?php if ($site_name): ?> <!-- ���� ������� ��� ����� - ������� -->
                     <h1><a title="<?php print t('Home'); ?>" rel="home" href="<?php print $front_page; ?>">
                                     <?php print $site_name; ?></a></h1>
                <?php endif; ?>
                <?php if ($site_slogan): ?> <!-- ���� ����� ������ ����� - ������� -->
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

        <aside id="left_column"> <!-- ����� �������  c ��������  sidebar_first -->
                  <?php print render($page['sidebar_first']); ?>
        </aside>
        <div id="article_wrapper" > <!--������ �������-->
        <?php print $breadcrumb; /* ������� "������� "������ ������" */ ?>
        <?php print $messages; /* ������� ��������� ������� */ ?>
          <!-- ��������� � ��������� � ���������� -->
        <?php print render($title_suffix); ?>
        <?php if($title): ?> <h1><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print render($tabs); /* ������� ���� */ ?> 
        <?php print render($page['content']); /* ������� ������ "�������" */ ?>
        </div>
        <footer> <!-- ������ ����� � �������� footer -->
         <?php print render($page['footer']); ?>
        </footer>
</div>