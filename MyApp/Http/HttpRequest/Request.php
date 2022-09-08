<?php

namespace MyApp\Http\HttpRequest;

class Request
{
    private $request = null; 

    public function __construct()
    {
        
    }

    public function multiple(): void
    {
        $postRequest = $_POST;
    }
}
