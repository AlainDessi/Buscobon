<?php

namespace App\Controller\Auth;

use App\Model\Users;
use Core\Http\Request;

use Session;
use Auth;
use Hash;


class AuthController extends \Core\Http\Controller
{
    /**
     * login
     * @return view
     */
  	public function getLogin()
    {
        return View('admin.auth.login');
  	}

    /**
     * Logout
     * @return redirection vers page d'accueil du site Front
     * @todo attention erreur si la route 'homepage n'existe pas'
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect('homepage');
    }

    /**
     * Vérification des paramètres posté
     */
    public function checkLogin()
    {
        // récupération des données de _POST
        $post = Request::post();

        // Lecture de l'utilisateur
        $user = Users::where('email', '=', $post['email'])
                ->first();

        // si l'utilisateur existe et mot de passe correct
        if($user) {
          // Vérification du mot de passe
          if(Hash::Check($post['password'], $user->password)) {
              $this->logUser($user);
              exit();
          } else {
              // mot de passe incorrect
              Session::danger('Mot de passe ou Email incorrect');
              return redirect('login');
          }
        } else {
            // email incorrect
            Session::danger('Mot de passe ou Email incorrect');
            return redirect('login');
        }
    }

    /**
     * mise en session des coordonnées et paramètres de l'utilisateur
     *
     * @param model $user
     * @return redirect
     */
    public function logUser($user)
    {
        // enregistrement des données utilisateur dans Session
        Auth::setId($user->id)
              ->setEmail($user->email)
              ->setRight($user->rightvalue);

        // Redirection vers la page d'accueil du site
        return redirect('admin.homepage');
    }
}
