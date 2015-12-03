<?php

class DbOperation {
    
    private $HOST_NAME;
    private $PORT;
    private $USER;
    private $PASSWORD;
    private $DATABASE;
    
    public function __construct() {
        include_once("config/database.php");
        
        $this->HOST_NAME = $config["db"]["host"];
        $this->PORT = $config["db"]["port"];
        $this->USER = $config["db"]["user"];
        $this->PASSWORD = $config["db"]["pwd"];
        $this->DATABASE = $config["db"]["dbn"];
        
    }
    
    public function connect()
    {
        $server_name = $this->HOST_NAME .",". $this->PORT;
    
        $connection_info = array(
                                "Database"  =>  $this->DATABASE,
                                "UID"       =>  $this->USER,
                                "PWD"       =>  $this->PASSWORD
                            );
        $conn = sqlsrv_connect($server_name, $connection_info);
        
        if( $conn === false ) die( print_r( sqlsrv_errors(), true));
        else return $conn;
    }
    
    public function close($conn)
    {
        sqlsrv_close($conn);
    }
    
    public function getDb()
    {
        $conn = $this->connect();
        
        $sql = "select * from sys_menu where status = 0";
        $stmt = sqlsrv_query($conn,$sql);        
        if( $stmt === false ) die( print_r( sqlsrv_errors(), true));
        $result = array();
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $result[] = $row;
        }
        $this->close($conn);
        return $result;
    }
}
