<?php

namespace App\DAO;

use \PDO;

abstract class dao extends PDO{
    protected $conexao;

    function __construct()
    {
        $dsn = 'mysql:host=' . $_ENV['db']['host'] . ';dbname=' . $_ENV['db']['database'];

        $this->conexao = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['pass']);
    }
}