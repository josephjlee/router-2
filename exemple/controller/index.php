<?php

require __DIR__ . "/../../vendor/autoload.php";
require __DIR__ . "/Test/Kadokweb.php";


use KadokWeb\Router\Router;

define("BASE", "https://www.localhost/kadokweb/router/exemple/controller");

$router = new Router(BASE);
/**
 * routes
 */
$router->namespace("Test");

$router->get("/", "Kadokweb:home");
$router->get("/edit/{id}", "Kadokweb:edit");
$router->post("/edit/{id}", "Kadokweb:edit");

/**
 * group by routes and namespace
 */
$router->group("admin")->namespace("Test");

$router->get("/", "Kadokweb:admin");
$router->get("/user/{id}", "Kadokweb:admin");
$router->get("/user/{id}/profile", "Kadokweb:admin");
$router->get("/user/{id}/profile/{photo}", "Kadokweb:admin");

/**
 * Group Error
 */
$router->group("error")->namespace("Test");
$router->get("/{errcode}", "Kadokweb:notFound");


/**
 * execute
 */
$router->dispatch();

if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}