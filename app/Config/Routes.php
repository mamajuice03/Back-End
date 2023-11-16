<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('readproduct', 'ProductController::readProduct');
$routes->get('insertproduct', 'ProductController::insertProduct');
$routes->get('edit-product/(:any)', 'ProductController::getProduct/$1');
$routes->post('update-product/(:any)', 'ProductController::updateProduct/$1');
$routes->get('delete-product/(:any)', 'ProductController::deleteProduct/$1');
$routes->post('insertproduct', 'ProductController::insertProduct');

$routes->group('api', function ($routes) {
    $routes->get('products', 'ProductController::readProductApi');
    $routes->get('product/(:any)', 'ProductController::getProductApi/$1');
    $routes->post('insert-product', 'ProductController::insertProductApi');
    $routes->delete('product/(:num)', 'ProductController::deleteProductApi/$1');
    $routes->put('product/(:num)', 'ProductController::updateProductApi/$1');
});
