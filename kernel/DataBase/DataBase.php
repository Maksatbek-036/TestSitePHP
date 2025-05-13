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

    ) {
        $this->connect();
    }
public function first(string $table, array $conditions = [])
{
    $where='';
    if(count($conditions)>0){
        $where='WHERE '.implode('AND ',array_map(fn($field) => "$field=:$field", array_keys($conditions)));

    }
    $sql="SELECT * FROM $table $where LIMIT 1";
    $stmt=$this->pdo->prepare($sql);
    
    $stmt->execute($conditions);

    $result=$stmt->fetch(\PDO::FETCH_ASSOC);

    return $result ?:null;
}


    public function insert(string $table, array $data): int|false
    {
        $fields = array_keys($data);
        $columns = implode(',', $fields);
        $binds = implode(',', array_map(fn($field) => ":$field", $fields));
        $sql = "INSERT INTO $table ($columns) VALUES ($binds)";


        $stmt = $this->pdo->prepare($sql);
        try {
            $stmt->execute($data);
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
        return $this->pdo->lastInsertId();
    }


    public function connect()
    {
        $driver = $this->config->get('database.driver');
        $host = $this->config->get('database.host');
        $port = $this->config->get('database.port');
        $dbname = $this->config->get('database.dbname');
        $user = $this->config->get('database.user');
        $password = $this->config->get('database.password');
        $charset = $this->config->get('database.charset');
        $this->pdo = new PDO("$driver:host=$host;port=$port;dbname=$dbname;charset=$charset", $user, $password);
    }
}
