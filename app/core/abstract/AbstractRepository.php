<?php

namespace App\Core\abstract;

use App\Core\Database;
use \PDO;

abstract class AbstractRepository extends Database

{
    protected PDO $pdo;
    public function __construct()
    {
        $this->pdo = parent::getInstance()->getConnection();
    }
}
