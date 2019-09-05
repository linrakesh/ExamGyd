<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php wp_head();?>
  </head>
  <body class="gray">
    <header id="header">
      <div class="container">
        <div class="logo">
          <h1><a href="<?php echo site_url(); ?>" title="<?php bloginfo('description'); ?>"><?php bloginfo(); ?></a></h1>
        </div>
        <div class="search-form">
            <?php get_search_form();?>
        </div>
        <div class="write-for-us">
            <?php wp_nav_menu( array('theme_location' => 'logo')); ?>
        </div>
      </div>

    </header>
    <section id="menu">
      <div class="container-normal">
        <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
        <!-- <span class="search-icon"><i class="fa fa-search"></i></span> -->
      </div>
    </section>