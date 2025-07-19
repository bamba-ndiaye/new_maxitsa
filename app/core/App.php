<?php

namespace App\Core;

use App\Core\Abstract\AbstractController;
use App\Core\Abstract\AbstractRepository;
use App\Core\Abstract\AbstractEntity;
use App\Core\Database;
use App\Core\Router;
use App\Repository\CompteRepository;
use App\Repository\UsersRepository;
use App\Service\CompteService;
use App\Service\SecurityService;
use Symfony\Component\Yaml\Yaml;

class App
{
    private static array $container = [];
    private static bool $initialized = false;

    private static function initialize(): void
    {
        if (self::$initialized) {
            return;
        }

        $dependencies = [
            'core' => [
                'database' => Database::class,
                'router' => Router::class,
                'session'=>Session::class
            ],
            'abstract' => [
                'abstractRepo' => AbstractRepository::class,
                'abstractController' => AbstractController::class,
                'abstractEntity' => AbstractEntity::class,
            ],
            'services' => [
                'securityServ' => SecurityService::class,
                'compteServ'  => CompteService::class,
            ],
            'repositories' => [
                'usersRepo' => UsersRepository::class,
                'compteRepo' => CompteRepository::class
            ]
        ];

        foreach ($dependencies as $category => $services) {
            foreach ($services as $key => $class) {
                self::$container[$category][$key] = fn() => $class::getInstance();
            }
        }

        self::$initialized = true;
    }


    public static function getDependency(string $category, string $key)
    {
        self::initialize();

        if (!isset(self::$container[$category][$key])) {
            throw new \Exception("Dependency '{$key}' not found in category '{$category}'");
        }

        $dependency = self::$container[$category][$key];


        if (is_callable($dependency)) {
            self::$container[$category][$key] = $dependency();
        }

        return self::$container[$category][$key];
    }

      private array $services  = [];
        public function __construct()
        {
            $this->loadServices();

            
        }
        private function loadServices(){
            $config = Yaml::parseFile(__DIR__ . '/../config/services.yml');
            foreach ($config['services'] as $key => $class) {
                $this->services[$key] = new $class();
            }

        }
        public function get(string $name) {
            return $this->services[$name] ?? null;
        }
}
