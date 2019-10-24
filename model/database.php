<?php

require_once( dirname(__DIR__) . '/config-app.php');


class Database {



    public $connection;

    

    function __construct(){

        $this->open_db_connection();

    }


    public function open_db_connection(){

        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

        if($this->connection->connect_errno){
            die('Database connection failed ' . $this->connection->connect_error );
        }

    }



    public function query( $sql ){

        $result = $this->connection->query( $sql );
        $this->confirm_query( $result );
        return $result;

    }



    public function confirm_query( $result ){

        if( !$result ) {
            die('Query faild ' . $this->connection->error);
        }
    }



    public function escape_string( $string ){
        $escape_string = $this->connection->real_escape_string( $string  );
        return $escape_string;
    }


} // end of class


$database = new Database();

