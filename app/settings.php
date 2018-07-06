<?php
  //configuracion de la base de datos;
  $db = require $contexto_app . '/app/database/database.php';

  //configracion de la aplicacion
  $settings = array(
    'displayErrorDetails' => true,
    'determineRouteBeforeAppMiddleware' => true,
    'db' => $db
  );

  //se agrega el contexto de la app
   $settings['contexto'] = $contexto_app;



   return $settings;
?>
