<?php

namespace App\Model;

class Rights extends \Core\Database\Model
{

    /**
     * Liste des champs pouvant être modifié
     * @var array
     */
    protected $fillable = [ 'title',
                            'rightvalue'];

    /**
     * Prépare le tableau pour l'utilisation dans un select
     *
     * @return array
     */
    public static function getArraySelect()
    {
        $arraySelect = [];
        $rights      = self::get();

        foreach ($rights as $right) {
            $arraySelect[$right->rightvalue] = $right->title;
        }

        return $arraySelect;
    }

    /**
     * Retourne le nom du droit par rapport à son Id
     *
     * @param  int $right
     * @return string
     */
    public static function getTitle($right)
    {
        $right = self::where('rightvalue','=',$right)->first();

        if($right) {
            return $right->title;
        } else {
            return null;
        }
    }

} // end of class
