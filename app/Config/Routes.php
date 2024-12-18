<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// excel dump
$routes->add('excel', 'ExcelDump::excelDump');
