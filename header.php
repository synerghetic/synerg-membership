<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8" />
  <title><?= the_field('je_name'); ?> - Adhésions</title>
  <meta name="description" content="Devenez adhérent à <?= the_field('je_name'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Cache-control" content="public, max-age=604800" />

  <link rel="stylesheet" href="wp-content/themes/adhesions/fonts/stylesheet.css" />

  <link rel="stylesheet" href="wp-content/themes/adhesions/css/normalize.css" />
  <link rel="stylesheet" href="wp-content/themes/adhesions/css/main.css" />

  <?php wp_head(); ?>

  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</head>
