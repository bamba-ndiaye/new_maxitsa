<?php

namespace App\controller;

use App\Core\Abstract\AbstractController;
use App\service\CompteService;
use App\Core\App;

class CompteController extends AbstractController
{

    private CompteService $compteService;


    public function __construct()
    {
        parent::__construct();
        $this->compteService = App::getDependency('services', 'compteServ');
    }

    

    public function accueil()
    {
        $user = $this->session->get('user');

        if (!$user || !isset($user['id'])) {
            echo "Utilisateur non connecté.";
            exit;
        }

        $solde = $this->compteService->getSolde((int)$user['id']);

            $this->render('dashboard/accueil.html.php', [
            'solde'=> $solde
        ]);
    }

    public  function edit() {}
    public  function store() {}
    public function index() {}
    public  function page() {}

}
