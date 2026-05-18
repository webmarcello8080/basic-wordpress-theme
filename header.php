<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="bg-slate-900 text-white py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">

        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold">
            <?php bloginfo('name'); ?>
        </a>

        <nav class="hidden md:block">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'flex gap-6'
            ]);
            ?>
        </nav>

    </div>
</header>