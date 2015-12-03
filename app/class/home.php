<?php 
    
class home{
    public function __construct()
    {
        
    }
    
    public function index()
    {
        return "Hello World";
    }
    public function welcome()
    {
        include "app/page/welcome_page.php";
    }
        
}
 