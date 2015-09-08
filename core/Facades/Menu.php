<?php

use Core\Helpers\MenuBuilder;

class Menu
{

  public static function __callStatic($method,$args)
  {
    $form = new MenuBuilder();
    return call_user_func_array([$form,$method], $args);
  }

}
