<?php


class product {

    public function __construct() {
    }
    
    public function index()
    {
        return "product class";
    }
    
    public function hello()
    {
        $DBO = new DbOperation();
        $DBO->connect();
        
        var_dump($DBO->getDb());
    }
}
