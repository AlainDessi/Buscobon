<?php

namespace App\Controller\Auth;

use App\Model\Users;
use Core\Http\Request;

use Session;
use Auth;
use Hash;


class AuthController extends \Core\Http\Controller {

  /**
   * login
   */
	public function getLogin()
  {
    return View('auth.login');
	}

  /**
   * Logout
   */
  public function getLogout()
  {
    Auth::logout();
    return redirect('admin.post');
  }

  public function checkLogin()
  {
    $post = Request::post();

    $user = Users::where('email','=',$post['email'])->first();

    if($user) {
      if(Hash::Check($post['password'], $user->password)) {
        $this->logUser($user);
        exit();
      }
    }
    Session::danger('Mot de passe ou Email incorrect');
    return redirect('login');
  }

  public function logUser($user)
  {

    // enregistrement Session
    Auth::setId($user->id)->setEmail($user->email);

    // redirect here
    return redirect('admin.homepage');

  }

} // end class
