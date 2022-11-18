<?php
namespace app\routes;

class Routes 
{

    public static function get()
    {
        return 
        [
            'get'   => [
                '/' => 'HomeController@index',
                '/login'        => 'LoginController@login',
                '/register'     => 'RegisterController@register',
                '/user/[0-9]+'  => 'UserController@show',
            ],

            'post'  => []
        ];
    }

}
