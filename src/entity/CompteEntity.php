<?php

namespace App\Entity;

use App\Core\Abstract\AbstractEntity;

class CompteEntity extends AbstractEntity
{

    private int $id;
    private string $numero;
    private TypeCompteEntity $typeCompte;
    private string $dateCreation;
    private float $solde;
    private TypeUserEntity $user;
    private array $transaction=[];

    public function __construct(int $id=0, string $numero ="", string $dateCreation="",
    float $solde=0.0)
    {
        $this->id = $id;    
        $this->numero = $numero;
        $this->dateCreation = $dateCreation;
        $this->solde = $solde;              
    }

    

    public function getId()
    {
        return $this->id;
    }

   
    public function setId($id)
    {
        $this->id = $id;

    }

    public function getNumero()
    {
        return $this->numero;
    }

  
    public function setNumero($numero)
    {
        $this->numero = $numero;

    }

   
    public function getTypeCompte()
    {
        return $this->typeCompte;
    }

    
    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;

    }

   
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function setSolde($solde)
    {
        $this->solde = $solde;

    }

    public function getUser()
    {
        return $this->user;
    }

    
    public function setUser($user)
    {
        $this->user = $user;

    }

  
    public function getTransaction()
    {
        return $this->transaction;
    }

    public function addTransaction($transaction)
    {
        $this->transaction = $transaction;

    }
     public static function toObject(array $data):static
     {
        return new static(
            $data["id"]?? 0,
            $data["numero"]?? "",
            $data["dateCreation"]?? "",
            $data["solde"]?? "",
            $data["user"]?? "",
            $data["typeCompte"]?? "",
            $data["typeCompte"]?? ""
        );
     }
   


     public function toArray():array
     {
            return[
                "id" => $this->id,
                "numero" => $this->numero,
                "dateCreation" => $this->dateCreation,
                "solde" => $this->solde,
                "user" => $this->user,
                "typeCompte" => $this->typeCompte,
                "transaction" => array_map(fn($u) => method_exists($u, 'toArray')? $u->toArray():$u, $this->transaction),

            ];
     }
}