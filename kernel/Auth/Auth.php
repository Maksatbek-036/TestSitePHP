<?php

namespace App\Kernel\Auth;

use App\Kernel\Auth\AuthInterface;
use App\Kernel\Config\Config;
use App\Kernel\Config\ConfigInterface;
use App\Kernel\Database\DataBaseInterface;
use App\Kernel\Session\SessionInterface;

class Auth implements AuthInterface
{
    public function __construct(

        private DataBaseInterface $db,
        private SessionInterface $session,
        private ConfigInterface $config,
    ) {}

    public function attempt(string $username, string $password): bool
    {
    $user=$this->db->first($this->table(),[
        $this->username()=>$username,
$this->password()=>$password
    ]);
    if (! $user){
        return false;
    }
if (! password_verify($password,$user[$this->password()]))
        {return false;}
    $this->session->set($this->sessionField(),$user);
    return true;

    }


    public function logout(): void
    {
        // Implement logic to log out the user
    }

    public function check(): bool
    {
        // Implement logic to check if a user is authenticated
        return false;
    }

    public function user(): ?array
    {
        // Implement logic to return the authenticated user's data
        return null;
    }
    public function table(): string
    {
        return $this->config->get('auth.table','users');
    }
    public function username(): string
    {
        return $this->config->get('auth.username','email');
        
    }
    public function password(): string
    {
        return $this->config->get('auth.password','password');
    }
    public function sessionField(): string
    {
        return $this->config->get('auth.session_field','user_id');
    }
}
