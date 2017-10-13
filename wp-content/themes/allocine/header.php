<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Execution de la fonction wp_head() obligatoire ! -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
  <div class="container">
    <div class="col-sm-12">
      <h1><?= bloginfo('title') ?></h1>
      <h2><?= bloginfo('description') ?></h2>
    </div>
  </div> 
  </header>
