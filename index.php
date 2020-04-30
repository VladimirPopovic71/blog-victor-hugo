<?php
session_start();

require('./assets/db.php');
require('./assets/header.php');
require('./assets/nav.php');


$request = $_SERVER['REQUEST_URI'];
$uri = parse_url($request, PHP_URL_PATH);

if ($uri!="/login" && $uri!="/registration" && $uri!="/admin" && $uri!="/dashboard") { 
    echo '<img src="../img/cover-photo.jpg" class="img-fluid inner" alt="Cover-photo │ Victor Hugo">';
}

switch($uri){
    case "/":
        require (__DIR__ . '/pages/home.php');
        break;    
    case "/article":
        require (__DIR__ . '/pages/article.php');
        break;
    case "/articles":
        require (__DIR__ . '/pages/articles.php');
        break;
    case "/contact":
        require (__DIR__ . '/pages/contact.php');
        break;        
    case "/portfolio":
        require (__DIR__ . '/pages/portfolio.php');
        break;        
    case "/skills":
        require (__DIR__ . '/pages/skills.php');
        break;
    case "/login":
        require (__DIR__ . '/pages/login.php');
        break;        
    case "/logout":
        require (__DIR__ . '/pages/logout.php');
        break;                
    case "/registration":
        require (__DIR__ . '/pages/registration.php');
        break;            
    case '/admin':
        if($_SESSION['connecte'] === 1 && $_SESSION['status'] === 'A'){
            require __DIR__ . '/pages/admin.php';                                                    
        } else {
            require __DIR__ . '/pages/login.php';
        }
        break;
    case '/dashboard':
        if($_SESSION['connecte'] === 1 && $_SESSION['status'] === 'U'){
            require __DIR__ . '/pages/dashboard.php';
        } else {
            require __DIR__ . '/pages/login.php';
        }
        break;
    default :
        require (__DIR__ . '/pages/home.php');
        break;
}
require('./assets/footer.php');

?>