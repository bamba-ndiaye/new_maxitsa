<?php

namespace App\Repository;

use App\Core\abstract\AbstractRepository;
use PDO;

class CompteRepository extends AbstractRepository
{
    private static CompteRepository|null $instance = null;
    private string $table = 'compte';

    public static function getInstance(): CompteRepository
    {
        if (self::$instance === null) {
            self::$instance = new CompteRepository();
        }
        return self::$instance;
    }

    public function __construct()
    {
        parent::__construct();
    }


    //fonction qui nous permet de recuperer le solde de l'utilisateur 
    public function getsoldeByUserId(int $userId): float
    {
        try{
            $sql = " select solde from $this->table where user_id = :user_id limit 1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':user_id'=> $userId]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result ?(float) $result['solde'] :0.0;

        } catch(\Exception $e)
        {
            return 0.0;
        }
    }
}
