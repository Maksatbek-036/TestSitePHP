<?php
// filepath: c:/OpenServer/domains/TestSitePHP/kernel/Validator/ValidatorInterface.php
namespace App\Kernel\Validator;

interface ValidatorInterface
{
    
    public function validate(array $data, array $rules): bool;

   
    public function errors(): array;

  
    public function validateRule(string $key, string $ruleName, mixed $ruleValue): string|false;
}