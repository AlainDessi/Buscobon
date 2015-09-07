<?php

namespace App\Model;

class Rights extends \Core\Database\Model {

  protected $fillable = [ 'title', 'rightvalue'];

  /**
   * Prépare le tableau pour l'utilisation dans un select
   *
   * @return array
   */
  public static function getArraySelect()
  {
    $arraySelect = [];
    $rights = self::get();
    foreach ($rights as $right) {
      $arraySelect[$right->rightvalue] = $right->title;
    }
    return $arraySelect;
  }

  /**
   * Retourne le nom du droit par rapport à son numéro
   *
   * @param  int $right
   * @return string
   */
  public static function getTitle($right)
  {
    $right = self::where('rightvalue','=',$right)->first();
    if($right) {
      return $right->title;
    }
    else {
      return null;
    }
  }

} // end of class
