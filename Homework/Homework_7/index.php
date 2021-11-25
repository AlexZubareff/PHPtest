<?php
if (isset($_COOKIE['islogged'])){
    echo 'You are authorized';
} else {
    header('location:login.php');
}