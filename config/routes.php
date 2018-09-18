<?php

use Cake\Routing\Router;

Router::extensions(['xlsx']);


Router::plugin('Iteracode/Excel', null, function($routes){
    $routes->connect('/:controller/:action');
});
