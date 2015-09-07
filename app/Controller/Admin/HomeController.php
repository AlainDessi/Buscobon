<?php

namespace App\Controller\Admin;

use Auth;

use App\Model\Post;

class HomeController extends \Core\Http\Controller {


  public function __construct()
  {
    Auth::check();
    parent::__construct();
  }

  /**
   * HomePage
   */
  public function index() {
    return View('admin.homepage');
  }


} // end class
