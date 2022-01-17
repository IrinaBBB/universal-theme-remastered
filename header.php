<!doctype html>
<?php get_language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="container">
        <div class="header-wrapper">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : echo 'Universal'; ?>
            <?php endif; ?>
            <?php wp_nav_menu([
                'theme_location' => 'header_menu',
                'menu' => '',
                'container' => 'nav',
                'container_class' => 'header-nav',
                'menu_class' => 'menu',
                'echo' => true,
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ]) ?>
            <?php get_search_form(); ?>
        </div>
        <!-- /.header-wrapper -->
    </div>
    <!-- /.container -->
</header>
