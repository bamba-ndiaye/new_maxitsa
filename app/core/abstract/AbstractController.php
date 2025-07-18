<?php

namespace App\Core\abstract;
use App\Core\App;
use App\Core\Session;

abstract class AbstractController extends Session
{
   
     protected $session ;

    private static AbstractController|null $instance = null ;


    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new static();
        }
        return self::$instance;
    }



    public function __construct()
    {
        $this->session = App::getdependency('core' , 'session');
    }


    abstract public  function index();
    abstract public  function page();
    abstract public  function accueil();
    abstract public  function edit();
    abstract public  function store();
    

    public function render(string $view, array $data = []): void
    {
        extract($data);
        require_once '../template/' . $view;
    }

} 