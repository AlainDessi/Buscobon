<?php

namespace App\Controller;

use App\Model\Users;

class HomeController extends \Core\Http\Controller {

  /**
   * HomePage
   */
	public function index() {

    $title = "Buscobon - Php Framework by Alain DESSI";
    return View('sample.homepage',compact('title'));

	}


} // end class
