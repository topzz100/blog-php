<?php
$request = parse_url($_SERVER['REQUEST_URI'])["path"];

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
    case '/contact':
        require __DIR__ . '/controllers/contact.php';
        break;
    case '/write':
        require __DIR__ . '/controllers/write.php';
        break;
    case '/settings':
        require __DIR__ . '/controllers/settings.php';
        break;
    case '/register':
        require __DIR__ . '/controllers/register.php';
        break;
    case '/login':
        require __DIR__ . '/controllers/login.php';
        break;

    default:
        // For any other URL, check if it matches a pattern
        if (preg_match('/^\/posts\/(\d+)$/', $request, $matches)) {
            $_GET['id'] = $matches[1]; // Set the ID as a GET parameter
            require __DIR__ . '/views/404.view.php';
            break;
        }

        // Handle 404
        http_response_code(404);
        require __DIR__ . '/views/404.view.php';
        break;
}
