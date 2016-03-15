<?php

namespace App\Model;

class Users extends \Core\Database\Model
{
    /**
     * Liste des champs pouvant être modifié
     * @var array
     */
    protected $fillable = [ 'email',
                            'lastname',
                            'firstname',
                            'active',
                            'password',
                            'rightvalue',
                            'trash' ];

    public static function getUserName($userId)
    {
        $user = self::find($userId);
        return $user->firstname . ' ' . $user->lastname;
    }

} // end of class
