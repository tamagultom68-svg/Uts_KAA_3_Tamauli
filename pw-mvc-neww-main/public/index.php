<?php
session_start();
ini_set('display_errors',1); error_reporting(E_ALL);
require_once __DIR__.'/../app/controllers/HomeController.php';
require_once __DIR__.'/../app/controllers/ProductController.php';
require_once __DIR__.'/../app/controllers/AuthController.php';
require_once __DIR__.'/../app/controllers/PageController.php';
require_once __DIR__.'/../app/controllers/CategoryController.php';
require_once __DIR__.'/../app/controllers/AdminController.php';
$uri=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$basePath=rtrim(str_replace('\\','/',dirname($_SERVER['SCRIPT_NAME'])),'/');
if ($basePath!=='' && stripos($uri,$basePath)===0) $uri=substr($uri,strlen($basePath));
$uri='/'.trim($uri,'/');
if ($uri==='/index.php') $uri='/';
switch (strtolower($uri)) {
 case '/': (new HomeController())->index(); break;
 case '/products': (new ProductController())->index(); break;
 case '/login': (new AuthController())->login(); break;
 case '/logout': (new AuthController())->logout(); break;
 case '/register': (new AuthController())->register(); break;
 case '/about': (new PageController())->about(); break;
 case '/categories': (new CategoryController())->index(); break;
 case '/admin': (new AdminController())->index(); break;
 case '/admin/admin': (new AdminController())->index(); break;
 case '/admin/create': (new AdminController())->create(); break;
 case '/admin/edit': (new AdminController())->edit(); break;
 case '/admin/delete': (new AdminController())->delete(); break;
 default: http_response_code(404); echo '404 - Halaman tidak ditemukan';
}
