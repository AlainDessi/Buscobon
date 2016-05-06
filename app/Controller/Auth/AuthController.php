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
     * affichage du la page de login
     * @return view
     */
    public function getLogin()
    {
        // affichage twig
        if (\Core\Config::get('render') === 'twig') {
            $data['form'] = [
                'open'      => \Form::open(),
                'login'     => \Form::text('email', 'email')->placeholder('votre email'),
                'pswd'      => \Form::password('password', 'password')
                                ->placeholder('votre mot de passe'),
                'submit'    => \Form::submit('se connecter'),
                'close'     => \Form::close()
            ];
        } else {
            $data = [];
        }

        return view('admin.auth.login');
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

        // vérification de l'email
        if (empty($post['email']) || !preg_match('/^[a-z0-9_.@-]+$/', $post['email'])) {
            $this->errorLogin('Votre email n\'est pas valide');
            exit();
        }

        // vérification du mot de passe
        if (empty($post['password']) || !preg_match('/^[a-z0-9A-Z_]+$/', $post['password'])) {
            $this->errorLogin('Votre mot de passe n\'est pas valide');
            exit();
        }

        // Lecture de l'utilisateur
        $user = Users::where('email', '=', $post['email'])
                ->first();

        // Vérification de l'existance d'un utilisateur
        if ($user) {
          // Vérification du mot de passe
            if (Hash::Check($post['password'], $user->password)) {
                $this->logUser($user);
                exit();
            } else {
                // mot de passe incorrect
                $this->errorLogin();
                exit();
            }
        } else {
            // email incorrect
            $this->errorLogin();
            exit();
        }
    }

    /**
     * Retourne la page de login avec affichage des erreurs
     * @param string $errorText
     * @return redirect
     */
    public function errorLogin($errorText = 'Mot de passe ou Email incorrect')
    {
        Session::danger($errorText);
        return redirect('login');
    }

    /**
     * mise en session des coordonnées et paramètres de l'utilisateur
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
