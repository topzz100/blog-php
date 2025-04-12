<?php

//echo "Hello there";
require 'functions.php';


// $uri = $_SERVER['REQUEST_URI'];

// if ($uri === "/php/projects/blog-php/") {
//     require 'controller/index.php';
// } else if ($uri === "/php/projects/blog-php/about") {
//     require 'controller/about.php';
// } else if ($uri === "/php/projects/blog-php/contact") {
//     require 'controller/contact.php';
// } else if ($uri === "/php/projects/blog-php/write") {
//     require 'controller/write.php';
// } 




// Base path and URL
define('BASE_PATH', __DIR__);
define('BASE_URL', 'http://localhost/php/projects/blog-php');

// Get the requested URL
$request = $_SERVER['REQUEST_URI'];

// Remove base path from request
$request = str_replace('/php/projects/blog-php', '', $request);

// Route the request
switch ($request) {
    case '':
    case '/':
        require __DIR__ . '/controllers/index.php';
        break;
    case '/about':
        require __DIR__ . '/controllers/about.php';
        break;
    case '/posts':
        require __DIR__ . '/controllers/posts.php';
        break;
    default:
        // For any other URL, check if it matches a pattern
        if (preg_match('/^\/posts\/(\d+)$/', $request, $matches)) {
            $_GET['id'] = $matches[1]; // Set the ID as a GET parameter
            require __DIR__ . '/controllers/post-single.php';
            break;
        }

        // Handle 404
        http_response_code(404);
        require __DIR__ . '/views/404.view.php';
        break;
}
