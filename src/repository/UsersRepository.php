<?php

namespace App\Repository;

use App\Core\abstract\AbstractRepository;
use App\Entity\UsersEntity;

class UsersRepository extends AbstractRepository
{
    private static UsersRepository|null $instance = null;
    private string $table = 'users';

    public static function getInstance(): UsersRepository
    {
        if (self::$instance === null) {
            self::$instance = new UsersRepository();
        }
        return self::$instance;
    }

    public function __construct()
    {
        parent::__construct();
    }


    public function selectByLoginAndPssword(string $login, string $password): null|UsersEntity
    {
        $query = "select * from $this->table WHERE login = :login AND password = :password ";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            'login' => $login,
            'password' => $password
        ]);

        $result = $stmt->fetch();

        if ($result) {
            return UsersEntity::toObject($result);
        }
        return null;
    }


}
