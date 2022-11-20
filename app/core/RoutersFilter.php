<?php
namespace app\core;

use app\routes\Routes;
use app\support\RequestType;
use app\support\Uri;

class RoutersFilter
{

    private string $uri;
    private string $method;
    private array $routesRegistered;

    public function __construct()
    {
        $this->uri              = Uri::get();
        $this->method           = RequestType::get();
        $this->routesRegistered = Routes::get();
    }

    private function simpleRouter()
    {
        // Pegar rota exata, ex: /login

        if(array_key_exists($this->uri,$this->routesRegistered[$this->method]))
        {
            return $this->routesRegistered[$this->method][$this->uri];
        }
        
        return 'NotFoundController@index';
    }

    private function dynamicRouter()
    {

    }

    public function get()
    {
        var_dump($this->simpleRouter());
        return $this->simpleRouter();
    }
}
