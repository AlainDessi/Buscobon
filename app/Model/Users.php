<?php

namespace App\Model;

class Users extends \Core\Database\Model {

  protected $fillable = [ 'email', 'lastname', 'firstname', 'active', 'password', 'rightvalue'];

} // end of class