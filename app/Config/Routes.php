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
    $routes->delete('delete/(:num)', 'Admin\Pengajar::delete/$1');
});
$routes->group('pengumuman', function($item){
    $item->get('/', 'Admin\Pengumuman::index');
    $item->get('read', 'Admin\Pengumuman::read');
    $item->post('post', 'Admin\Pengumuman::post');
    $item->put('put', 'Admin\Pengumuman::put');
    $item->delete('delete/(:num)', 'Admin\Pengumuman::delete/$1');
});
$routes->group('tentang', function($item){
    $item->get('/', 'Admin\Tentang::index');
    $item->get('read', 'Admin\Tentang::read');
    $item->post('post', 'Admin\Tentang::post');
    $item->put('put', 'Admin\Tentang::put');
    $item->delete('delete/(:num)', 'Admin\Tentang::delete/$1');
});
$routes->group('cpl', function($item){
    $item->get('/', 'Admin\Cpl::index');
    $item->get('read', 'Admin\Cpl::read');
    $item->post('post', 'Admin\Cpl::post');
    $item->put('put', 'Admin\Cpl::put');
    $item->delete('delete/(:num)', 'Admin\Cpl::delete/$1');
});
$routes->group('unsur', function($item){
    $item->post('post', 'Admin\Unsur::post');
});
$routes->group('kurikulum', function($item){
    $item->get('/', 'Admin\matakuliah::index');
    $item->get('read', 'Admin\matakuliah::read');
    $item->post('post', 'Admin\matakuliah::post');
    $item->post('jenis', 'Admin\Jenis::post');
    $item->post('kurikulum', 'Admin\Kurikulum::post');
    $item->put('put', 'Admin\matakuliah::put');
    $item->delete('delete/(:num)', 'Admin\matakuliah::delete/$1');
});
$routes->group('prestasi', function($item){
    $item->get('/', 'Admin\Prestasi::index');
    $item->get('read', 'Admin\Prestasi::read');
    $item->post('post', 'Admin\Prestasi::post');
    $item->put('put', 'Admin\Prestasi::put');
    $item->delete('delete/(:num)', 'Admin\Prestasi::delete/$1');
});
$routes->group('kegiatan', function($item){
    $item->get('/', 'Admin\Kegiatan::index');
    $item->get('read', 'Admin\Kegiatan::read');
    $item->post('post', 'Admin\Kegiatan::post');
    $item->put('put', 'Admin\Kegiatan::put');
    $item->delete('delete/(:num)', 'Admin\Kegiatan::delete/$1');
});
$routes->group('arsip', function($item){
    $item->get('/', 'Admin\Arsip::index');
    $item->get('read', 'Admin\Arsip::read');
    $item->post('post', 'Admin\Arsip::post');
    $item->put('put', 'Admin\Arsip::put');
    $item->delete('delete/(:num)', 'Admin\Arsip::delete/$1');
});
$routes->group('slider', function($item){
    $item->get('/', 'Admin\Slider::index');
    $item->get('read', 'Admin\Slider::read');
    $item->post('post', 'Admin\Slider::post');
    $item->put('put', 'Admin\Slider::put');
});
$routes->group('lulusan', function($item){
    $item->get('/', 'Admin\Lulusan::index');
    $item->get('read', 'Admin\Lulusan::read');
    $item->post('post', 'Admin\Lulusan::post');
    $item->put('put', 'Admin\Lulusan::put');
    $item->delete('delete/(:num)', 'Admin\Lulusan::delete/$1');
});
