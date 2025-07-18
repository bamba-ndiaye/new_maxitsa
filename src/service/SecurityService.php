<?php

namespace App\Service;
use App\Core\App;
use App\Entity\UsersEntity;
use App\Repository\UsersRepository;


class SecurityService{

    
    private UsersRepository $userRepository;    
    private static SecurityService|null $instance = null;

    public static function getInstance():SecurityService{
        if(self::$instance == null){
            self::$instance = new SecurityService();
        }
        return self::$instance;
    }


    public function __construct(){
        $this->userRepository = App::getDependency('repositories', 'usersRepo');
    }


   public function seConnecter(string $login, string $password): ?UsersEntity {
    $user = $this->userRepository->selectByLoginAndPssword($login, $password);
    if ($user) {
        return $user;
    }

    return null;
}



}