<?php
namespace app\support;

class RequestType
{

    public static function get()
    {
        return strtolower(trim($_SERVER['REQUEST_METHOD']));
    }

}
