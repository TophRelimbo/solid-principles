<?php

class UserDB {

    private $dbConnection;

    public function ___contruct (MySQLConnection){
        $this->dbConnection = $dbConnection;
    }

    public function store (User $user){
        // Store the user into a database...
    }
}

?>
