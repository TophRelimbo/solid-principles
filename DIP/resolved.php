<?php

interface DBConnectionInterface{
  public funtion connect();
}

class MySQLConnection implements DBConnectionInterface{

  Public Function connect () {
    // Return the MySQL connection...
  }
}

class PostgreSQL implements DBConnectionInterface{

  public function connect (){
    // Return the PostgreSQL connection...
  }
}

class UserDB{

  private $dbConnection;

  public function ___construct (DBConnectionInterface $dbConnection){
    $this->dbConnection = $dbConnection;
  }

  public function store (User $user){
    // Store the user into a database...
  }
}
?>
