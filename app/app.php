<?php
  require $contexto_app . '/vendor/autoload.php';

  //configuracion de la aplicacion
  $settings = require $contexto_app . '/app/settings.php';

  if ($env == 'production') {
    $settings['displayErrorDetails'] = false;
  }

  //crear la instancia de Slim
  $app = new \Slim\App(
    array(
      'settings' => $settings
    )
  );

  // se obtiene el conainer de Slim
  $container = $app->getContainer();

  //se agregan los providers
  $providers = $contexto_app .'/app/providers/*.php';
  foreach (glob($providers) as $filename) require $filename;

  $routes = $contexto_app . '/app/routes/*.php';
  foreach(glob($routes) as $filename) require $filename;

  $app->run();
?>
