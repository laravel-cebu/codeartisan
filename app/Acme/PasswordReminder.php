<?php

class PasswordReminder {

    /**
     * @var MySQLConnection
     */
    private $dbConnection;

    public function __construct(MySQLConnectioN $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}