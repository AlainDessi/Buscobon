<?php

namespace App\Controller;

use Auth;

use App\Model\Post;

class PostController extends \Core\Http\Controller {

  public function __construct()
  {
    Auth::check();
    parent::__construct();
  }

  /**
   * HomePage
   */
	public function index() {

    return View('admin.sampleform');

	}


} // end class
