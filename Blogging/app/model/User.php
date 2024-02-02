<?php

class User
{

    private $idUser;
    private $username;
    private $email;
    private $password;
    private $nameRole;


    public function __construct( $idUser, $username, $email, $password, $nameRole)
    {
        $this->idUser = $idUser;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->nameRole = $nameRole;
 
    }

    public function getIdUser()
    {
        return $this->idUser;
    }
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getNameRole()
    {
        return $this->nameRole;
    }
    public function setNameRole($nameRole)
    {
        $this->nameRole = $nameRole;
    }
}

class Author extends User {
 
}

class Admin extends User {
    
}

?>
