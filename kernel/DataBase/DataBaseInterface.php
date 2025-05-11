<?php

namespace App\Kernel\DataBase;

interface DataBaseInterface
{
   
    public function connect();
    public function insert(string $table, array $data):int|false;


   
}