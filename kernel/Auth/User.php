<?php

namespace App\Kernel\Auth;

class User
{
    public function __construct(
        private int $id,
        // private string $name,
        private string $email,
        private string $password,
        // private bool $is_admin,
    ) {
    }

    public function id(): int
    {
        return $this->id;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function password(): string
    {
        return $this->password;
    }

    // public function name(): string
    // {
    //     return $this->name;
    // }

    // public function isAdmin(): ?bool
    // {
    //     return $this->is_admin;
    // }
}
