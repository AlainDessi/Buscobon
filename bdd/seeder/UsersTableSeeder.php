<?php

namespace Bdd\Seeder;

use App\Model\Users;

use Hash;

class UsersTableSeeder
{
    public static function run()
    {
        Users::insert([ 'email' => 'alain.dessi@laposte.net',
                        'password' => Hash::Encrypt('12345'),
                        'rightvalue' => '999',
                        'active' => true ]);
    }
} // end class
