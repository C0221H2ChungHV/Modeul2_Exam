<?php

class DB
{
    protected $dsn = "mysql:host=localhost;dbname=Exame_Modul2";
    protected $user = "phpmyadmin";
    protected $password = "1";
    public $connection;

    public function __construct()
    {
        $this->connection = new PDO($this->dsn, $this->user, $this->password);
    }
}

