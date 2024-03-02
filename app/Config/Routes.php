<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('beranda', static function($routes){
    $routes->get('', 'Admin\Home::index');
});
$routes->group('pengajar', static function($routes){
    $routes->get('', 'Admin\Pengajar::index');
    $routes->get('read', 'Admin\Pengajar::read');
    $routes->post('post', 'Admin\Pengajar::post');
    $routes->put('put', 'Admin\Pengajar::put');
    $routes->delete('delete', 'Admin\Pengajar::delete');
});
