<?php

namespace App\Entity;

use App\Core\Abstract\AbstractEntity;
class UsersEntity extends AbstractEntity
{
    private int $id;
    private string $nom;
    private string $prenom;
    private string $password;
    private string $login;
    private TypeUserEntity $typeUser;
    private string $adresse;
    private array $comptes;
    private array $numeros;
    private string $transactions;
    private string $numeroCarteIdentite;
    private string $photorecto;
    private string $photoverso;


    public function __construct(int $id=0, string $som ="", string $prenom="",
     string $password="", string $login = "", string $adresse,
     array $numeros=[],  string $numeroCarteIdentite="", string $photorecto="",string $photoverso="")
    {
        $this->id = $id;
        $this->nom = $som;
        $this->prenom = $prenom;
        $this->password = $password;
        $this->login = $login;
        $this->adresse = $adresse;
        $this->numeros = $numeros;   
        $this->numeroCarteIdentite = $numeroCarteIdentite;
        $this->photorecto = $photorecto;
        $this->photoverso = $photoverso;
    }

    public function getId()
    {
        return $this->id;
    }   
    public function setId($id)
    {
        $this->id = $id;

        
    }   
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        
    }   
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
          
    }   
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)    
    {
        $this->password = $password;

        
    }   
    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;      
        
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {   
        $this->adresse = $adresse;

     
    }
    public function getTypeUser()
    {       
        return $this->typeUser;
    }
    public function setTypeUser(TypeUserEntity $typeUser) : void
    {
        $this->typeUser = $typeUser;

        //return $this;
    }          
    public function getNumeros()
    {
        return $this->numeros;
    }
    public function setNumeros(array $numeros)  
    {
        $this->numeros = $numeros;

        //return $this;
    }
    public function getNumeroCarteIdentite()
    {
        return $this->numeroCarteIdentite;  

    }
    public function setNumeroCarteIdentite($numeroCarteIdentite)
    {
        $this->numeroCarteIdentite = $numeroCarteIdentite;

        
    }
    public function getPhotorecto()
    {
        return $this->photorecto;
    }
    public function setPhotorecto($photorecto)
    {
        $this->photorecto = $photorecto;

    }
    public function getPhotoverso()
    {
        return $this->photoverso;
    }
    public function setPhotoverso($photoverso){
        $this->photoverso = $photoverso;
    }

    
    public function getComptes()
    {
        return $this->comptes;
    }

    public function addComptes($comptes)
    {
        $this->comptes = $comptes;

        return $this;
    }

    public function getTransactions()
    {
        return $this->transactions;
    }

    public function addTransactions($transactions)
    {
        $this->transactions = $transactions;

        return $this;
    }

    public static function toObject(array $data): static
    {
        return new static(
            $data["id"] ?? 0,
            $data["nom"] ?? "",
            $data["prenom"] ?? "",
            $data["password"] ?? "",
            $data["login"] ?? "",
            $data["adresse"] ?? "",
            $data["numeros"] ?? [],
            $data["numeroCarteIdentite"] ?? "",
            $data["photorecto"] ?? "",
            $data["photoverso"] ?? ""
        );
    }

    public function toArray():array
    {
        return [
            "id" => $this->id,
            "nom" => $this->nom,
            "prenom" => $this->prenom,
            "password" => $this->password,
            "login" => $this->login,
            "adresse" => $this->adresse,
            "numeros" => $this->numeros,
            "numeroCarteIdentite" => $this->numeroCarteIdentite,
            "photorecto" => $this->photorecto,
            "photoverso" => $this->photoverso,
            "typeUser" => $this->typeUser ?? ""
        ];  
    }
}

