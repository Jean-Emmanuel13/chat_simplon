<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}

if($page === 'home'){
    require './views/home.php';
}

if ($page === 'login') {
    require './views/login.php';
}

if ($page === 'sign-up'){
    require './views/signup.php';
}