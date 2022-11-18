<?php
    //require_once "index.phtml";

    use app\core\Router;

    require '../vendor/autoload.php';

    session_start();

    // echo "<pre>";
    // print_r($_SERVER);
    // echo "<pre>";
    // die();

    Router::run();
