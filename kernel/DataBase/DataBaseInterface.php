<?php

namespace App\Kernel\DataBase;

interface DataBaseInterface
{
   
    public function  first(string $table,array $conditions=[]); 
    public function connect();
    public function insert(string $table, array $data):int|false;
 public function get(string $table, array $conditions = []): array;
   
}