<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open() ?>

  <header class="header">
    <h1>My HTML Template!</h1>
  </header>

  <div class="row">
    <div class="col-3 col-s-3 menu">
      <?php wp_nav_menu(
        [
          'container' => false,
          'theme_location' => 'primary'
        ]
      ) ?>
        </div>