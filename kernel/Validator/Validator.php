<?php
namespace App\Kernel\Validator;
class Validator
{

    private array $errors = [];
    private array $data = [];
    public function validate(array $data, array $rules): bool
    {
        $this->errors = [];
        foreach ($rules as $key => $rule) {
            $rules = $rule;
            foreach ($rules as $rule) {
                $rule = explode(':', $rule);
                $ruleName = $rule[0];
                $ruleValue = $rule[1] ?? null;
                $error = $this->validateRule($key, $ruleName, $ruleValue);
                if ($error) {
                    $this->errors[$key][] = $error;
                }
            }
        }
        return empty($this->errors);
    }

    public function validateRule(string $key, string $ruleName, mixed $ruleValue): string|false
    {
        $value = $this->data[$key] ?? null;
        switch ($ruleName) {
            case 'required':
                if (empty($value)) {
                    return "$key is required";
                }
                break;
            case 'email':
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    return "$key must be a valid email address";
                }
                break;
            case 'min':
                if (strlen($value) < $ruleValue) {
                    return "$key must be at least $ruleValue characters long";
                }
                break;
            case 'max':
                if (strlen($value) > $ruleValue) {
                    return "$key must be at most $ruleValue characters long";
                }
                break;
            default:
                return false;
        }
        return false;
    }
}
