<?php
if(isset($_GET['url'])){
    $url=$_GET['url'];

    switch($url){
        case 'profile';
        include 'profile.php';
        break;

        case 'login';
        include 'login.php';
        break;

        case 'logout';
        include 'logout.php';
        break;

        case 'index';
        include 'index.html';
        break;

        case 'form';
        include 'form.php';
        break;

    default:
    echo "WELCOME";
    break;
    }
}
?>