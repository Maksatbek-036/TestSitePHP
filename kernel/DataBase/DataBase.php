<?php

namespace App\Kernel\DataBase;

use App\Kernel\Config\ConfigInterface;
use App\Kernel\DataBase\DataBaseInterface;
use PDO;

class DataBase implements DataBaseInterface
{
     private PDO $pdo;
   
    public function __construct(
        private ConfigInterface $config,

    )
    {
       $this->connect();
    }
    public function insert(string $table, array $data): int|false
    {
      $fields=array_keys($data);
      $columns=implode(',', $fields);
      $binds=implode(',', array_map(fn($field) => ":$field", $fields));
      $sql="INSERT INTO $table ($columns) VALUES ($binds)";

 
        $stmt=$this->pdo->prepare($sql);
        try {
            $stmt->execute($data);
        } catch (\PDOException $th) {
            return false;
        }
        return (int)$this->pdo->lastInsertId();
    }
    public function connect()
    {
        $driver = $this->config->get('database.driver');
        $host = $this->config->get('database.host');
        $port = $this->config->get('database.port');
        $db = $this->config->get('database.db');
        $username = $this->config->get('database.user');
        $password = $this->config->get('database.password');
        $charset = $this->config->get('database.charset');
        $this->pdo = new PDO(
            "$driver:host=$host;port=$port;dbname=$db;charset=$charset",
            $username,$password
            );
            
           
    }
}
