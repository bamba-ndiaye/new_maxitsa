<?php


namespace App\Entity;

use App\Core\Abstract\AbstractEntity;

class TransactionEntity extends AbstractEntity{
    private int $id;
    private string $date;
    private TypeTransactionEntity $typeTransaction;
    private UsersEntity $user;
    private  CompteEntity $compte;
    private float $montant;

    public function __construct(int $id , string $date ,  float $montant ,TypeTransactionEntity $typeTransaction)
    {
        $this->id = $id;
        $this->date = $date;
        $this->montant = $montant;  
        $this->typeTransaction = $typeTransaction;
    }



   
    public function getDate()
    {
        return $this->date;
    }

    
     
    public function setDate($date)
    {
        $this->date = $date;

    }

    
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;

    }

    public function getUser()
    {
        return $this->user;
    }

   
    public function setUser($user)
    {
        $this->user = $user;

    }

    
    public function getMontant()
    {
        return $this->montant;
    }

    
    public function setMontant($montant)
    {
        $this->montant = $montant;

    }

   
    public function getCompte()
    {
        return $this->compte;
    }

    public function setCompte($compte)
    {
        $this->compte = $compte;

    }
 
    public function getTypeTransaction()
    {
        return $this->typeTransaction;
    }

    
    public function setTypeTransaction($typeTransaction)
    {
        $this->typeTransaction = $typeTransaction;

    }


    public static function toObject(array $data): static
    {
        return new static(
            $data["id"] ?? 0,
            $data["date"] ?? "",
            $data["montant"] ?? 0.0,
            new TypeTransactionEntity($data["typeTransaction"]["id"] ?? 0, $data["typeTransaction"]["libelle"] ?? "")
        );
    }

    

    public function toArray():array
    {
        return [
            "id" => $this->id,
            "date" => $this->date,
            "montant" => $this->montant,
            "typeTransaction" => $this->typeTransaction,
            "user" => $this->user,
            "compte" => $this->compte,
        ];
    }

//    public static function toObject(array $data): static {
//     return new static   (

//        $data['id'] ?? 0,
//         $data['date'] ?? "",
//         $data['montant'] ?? 0.0,
//         $data['typeTransaction'] ?? null
//     );
//     $transaction->setUser($data['user'] ?? null);
//     $transaction->setCompte($data['compte'] ?? null);
//     return $transaction;
//    }

}

