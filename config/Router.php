<?php

class Router
{

    public function __construct(){

    }
    
    public function handleRequest(array $get) : void
    {
        $controller = new PageController();
        
        if(isset($_GET["route"]) && $_GET["route"] === "a-propos")
        {   
            $controller -> about();
        }
        
        if(!isset($_GET["route"]))
        {
            $controller -> home();
        }
        else 
        {
            $controller -> notFound();
        }
    }
}