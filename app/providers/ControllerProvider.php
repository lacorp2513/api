<?php
  $container['TestController'] = function($container){
    return new App\Controllers\TestController($container);
  }
 ?>
