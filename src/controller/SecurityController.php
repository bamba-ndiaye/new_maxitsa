<?php

namespace App\controller;

use App\Core\Abstract\AbstractController;
use App\service\SecurityService;
use App\Core\App;

class SecurityController extends AbstractController
{

    private SecurityService $securityService;


    public function __construct()
    {
        parent::__construct();
        $this->securityService = App::getDependency('services', 'securityServ');
    }

    public function index()
    {

        //require_once '../template/login/login.html.php';
        $this->render('login/login.html.php');
    }

    public function page()
    {
        //require_once '../template/login/inscription.html.php';
        $this->render('login/inscription.html.php');
    }

    public function accueil()
    {
        //require_once '../template/dashboard/accueil.html.php';
        //$this->render('dashboard/accueil.html.php');
    }

    public function edit() {}

    public function store() {}


    public function show()
    {
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {

            $login = $_POST['login'] ?? '';
            $password = $_POST['password'] ?? '';

            $user = $this->securityService->seConnecter($login, $password);

            if ($user) {
                $this->session->set('user', [
                    'id' => $user->getId(),
                    'login' => $user->getLogin()
                ]);

                header('Location: /compte');
                exit;
            } else {
                $this->render('login/login.html.php', [
                    'error' => 'Identifiants incorrects.'
                ]);
            }
        } else {
            $this->render('login/login.html.php');
        }
    }
}
