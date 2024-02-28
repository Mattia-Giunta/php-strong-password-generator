<?php

session_start();


include_once __DIR__ . "/partials/function.php";



$letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$symbols = '!@#$%^&*()_+-={}[]<>,./';

if(isset($_GET['lunghezza'])){

    $lunghezzaPassword = $_GET['lunghezza'];

    $consentiDuplicazioni = $_GET['radio'];

    $_SESSION['password'] = generaPasword($lunghezzaPassword, $letters , $numbers , $symbols, $consentiDuplicazioni );

    header('Location: ./index.php');
}
?>
