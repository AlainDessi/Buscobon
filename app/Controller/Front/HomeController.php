<?php

namespace App\Controller\Front;

class HomeController extends \Core\Http\Controller
{

    /**
     * Affichage de la HomePage
     */
  	public function index()
    {
        $title = "Buscobon - Php Framework by Alain DESSI";
        return View('front.homepage',compact('title'));
  	}

    /**
     * Exemple de gestions des langues
     * @param  string $flag exemple (fr/en/it ...)
     * @param  string $page slug de la page (par exemple)
     */
    public function flagtest($flag, $page)
    {
        echo 'Page de test des langues<br>';
        echo 'Flag: ' . $flag . '<br>';
        echo 'Page : ' . $page;
    }

} // end class
