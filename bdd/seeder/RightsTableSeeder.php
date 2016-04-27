<?php

namespace Bdd\Seeder;

use App\Model\Rights;

class RightsTableSeeder
{
    public static function run()
    {
        Rights::insert([ 'title' => 'Super Administrateur', 'rightvalue' => '999']);
        Rights::insert([ 'title' => 'Administrateur', 'rightvalue' => '900']);
        Rights::insert([ 'title' => 'Editeur', 'rightvalue' => '100']);
        Rights::insert([ 'title' => 'Auteur', 'rightvalue' => '10']);
        Rights::insert([ 'title' => 'Contributeur', 'rightvalue' => '1']);
    }
}
