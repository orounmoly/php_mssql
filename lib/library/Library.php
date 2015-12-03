<?php


class library {
    
    public $route;

    public function __construct() {
        require "config/route.php";
        $this->route = $route["default_controller"];
    }
    
    public function get_segment($seg)
    {
        $uri_segment = explode("/", parse_url(trim($_SERVER["REQUEST_URI"],"/"), PHP_URL_PATH));
        return $uri_segment[$seg];
    }
    public function get_all_segment()
    {
        return explode("/",parse_url(trim($_SERVER["REQUEST_URI"],"/"), PHP_URL_PATH));
    }
}
