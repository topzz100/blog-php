<?php
// Base path and URL
define('BASE_PATH', __DIR__);
define('BASE_URL', 'http://localhost/php/projects/blog-php');

//echo "Hello there";
require 'functions.php';
// require "router.php";
require 'Database.php';

// Get the requested URL
//require "router.php";


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




// class Person
// {
//     public $name;
// }

// $person = new Person();
// $person->name = "John";

//dd($person);
$id = $_GET['id'];

$config = require('config.php');

$db = new Database($config['database']);
$query = "select * from posts where id = ?";
$posts = $db->query($query, [$id])->fetchAll();


// $dsn = "mysql:host=localhost;port=3306;dbname=blog_php;charset=utf8mb4";

// $pdo = new PDO($dsn, 'root');
// $statement = $pdo->prepare("select * from posts");
// $statement->execute();

// $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }

//dd($_GET['id']);
