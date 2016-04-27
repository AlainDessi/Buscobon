<?php

namespace App\Controller\Admin;

use Auth;
use Request;
use Hash;
use Session;

use App\Model\Users;
use App\Model\Rights;

class UsersController extends \Core\Http\Controller
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
     * Liste des Utilisateurs
     */
    public function index()
    {
        $users = Users::where('trash', '=', '0')->get();
        return view('admin.users.list', compact('users'));
    }

    /**
     * Edition d'un utilisateur
     * @param int $user_id
     */
    public function edit($id)
    {
        $user   = Users::find($id);
        $rights = Rights::getArraySelect();

        return view('admin.users.edit', compact('user', 'rights'));
    }

    /**
     * Mise à jour d'un utilisateur
     * @param  int $id
     */
    public function update($id)
    {
        $post = Request::Post();

        if (!isset($post['active'])) {
            $post['active'] = 0;
        }

        /* vérification mot de passe */
        if (!empty($post['password_1'])) {
            if ($post['password_1'] === $post['password_2']) {
                $post['password'] = Hash::Encrypt($post['password_1']);
            } else {
                Session::danger('Mot de passe ou Email incorrect');
                return redirect('admin.users.edit', $id);
                exit();
            }
        }

        // update enregistrement
        $req = Users::update($post, $id);

        if ($req) {
            Session::success('Enregistrement de l\'utilisateur réussi');
        } else {
            Session::danger('Une erreur est survenu lors de la sauvegarde');
        }

        return redirect('admin.users.edit', $id);
    }

    /**
     * Formulaire de Création d'un utilisateur
     *
     */
    public function create()
    {
        $rights = Rights::getArraySelect();
        return View('admin.users.create', compact('rights'));
    }

    /**
     * Création d'un utilisateur
     *
     */
    public function store()
    {
        $post = Request::post();
        $user = Users::where('email', '=', $post['email'])->first();

        if (!$user) {
            $user_id = Users::insert($post);
            redirect('admin.users.edit', $user_id);
        } else {
            Session::danger('Email déjà existant, veuillez saisir un autre email');
            redirect('admin.users.create');
        }
    }

    /**
     * Suppression d'un utilisateur
     * @param  int $user_id
     */
    public function delete($id)
    {
        $req = Users::update(['trash' => '1', 'active' => '0'], $id);

        if (!$req) {
            Session::danger('Erreur lors de la suppression de l\'ultilisateur');
        } else {
            Session::success('Utilisateur supprimé');
        }

        return redirect('admin.users');
    }
} // end of class
