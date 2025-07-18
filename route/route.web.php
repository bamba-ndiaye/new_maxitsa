<?php

use App\controller\SecurityController;
use App\controller\CompteController;

$route = [
   '/' => [
      'controller' => SecurityController::class,
      'method' => 'index'
   ],
   '/register' => [
      'controller' => SecurityController::class,
      'method' => 'page'
   ],
   
   '/login' => [

      'controller' => SecurityController::class,
      'method' => 'show'
   ],
   '/compte' => [
      'controller' => CompteController::class,
      'method' => 'accueil'
   ]
];
