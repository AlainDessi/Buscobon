<?php

namespace App\Controller\Admin;

use Auth;

use App\Model\Post;

class HomeController extends \Core\Http\Controller
{
    /**
     * Constructeur
     * @method __construct
     */
    public function __construct()
    {
        Auth::check();
        parent::__construct();
    }

    /**
     * Affichage de la page d'accueil
     * @method index
     * @return view
     */
    public function index()
    {
        return view('admin.homepage');
    }
} // end class
