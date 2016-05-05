<?= "<?php" ?>

namespace App\Controller\<?= $namespace ?>;

use Auth;

class <?= $controllerName ?> extends \Core\Http\Controller
{
    /**
     * Constructeur
     * @method __construct
     */
    public function __construct()
    {
        // Vérification de login
        // Auth::check();
        parent::__construct();
    }

    /**
     * Index
     */
    public function index()
    {
        //
    }

    /**
     * Edit
     * @param int $user_id
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update
     * @param  int  $id
     */
    public function update($id)
    {
        //
    }

    /**
     * Create
     */
    public function create()
    {
        //
    }

    /**
     * Store
     */
    public function store()
    {
      //
    }

    /**
     * delete
     * @param  int  $user_id
     */
    public function delete($id)
    {
        //
    }
}
