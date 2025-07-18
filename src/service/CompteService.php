<?php

namespace App\Service;
use App\Core\App;
use App\Repository\CompteRepository;


class CompteService
{


    private CompteRepository $compteRepository;
    private static CompteService|null $instance = null;

    public static function getInstance(): CompteService
    {
        if (self::$instance == null) {
            self::$instance = new CompteService();
        }
        return self::$instance;
    }

    //cette ligne nous permet de connecter le ficher service et ripository
    //injestion de dependance
    public function  __construct()
    {
        $this->compteRepository = App::getDependency('repositories', 'compteRepo');
    }

    public function getSolde(int $userId): float
    {
        return $this->compteRepository->getsoldeByUserId($userId);
    }
}
