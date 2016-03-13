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

} // end of class
