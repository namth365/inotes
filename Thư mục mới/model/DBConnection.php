<?php


namespace Model;
use PDO;

class DBConnection
{
    public $inotes;
    public $user;
    public $password;

    public function __construct($inotes, $user, $password)
    {
        $this->inotes = $inotes;
        $this->password = $password;
        $this->user = $user;
    }

    public function connect(){
        return new PDO($this->inotes, $this->user, $this->password);
    }
}