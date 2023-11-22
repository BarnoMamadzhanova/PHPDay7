
<?php

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "dboop");

    // $connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    // if(!$connect){
    //     die("Connection failed: " . mysqli_connect_error());
    // } else {
    //     echo 'Connect';
    // }

    class DB_connection{
        private $connect;
        public function __construct()
        {
            $this->connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
            if($this->connect->connect_error){
                die("Connection failed: " . mysqli_connect_error());
            } else {
                echo 'Connect';
            }
        }

        public function query($query)
        {
            $statement = $this->connect->prepare($query);
            $statement->execute();
            $result = $statement->get_result();
            return $result;
        }
    }

    $database = new DB_connection();

