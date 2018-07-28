<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
class Users{
    private $id;
    private $email;
    private $password;
    public function getId(){
        return $this->id;
    }
    public function getEmail(): ?string{
        return $this->email;
    }
    public function setEmail(string $email): self{
        $this->email = $email;
        return $this;
    }
    public function getPassword(): ?string{
        return $this->password;
    }
    public function setPassword(string $password): self{
        $this->password = $password;
        return $this;
    }
}
