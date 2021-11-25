<form action = "registration.php" name = "registration" method="post">
<p>Ваше имя: <input type = "text" name = "user_name"></p>
<p>Логин: <input type = "text" name = "user_login"></p>
<p>Пароль: <input type = "password" name = "password"></p>
<p>Email: <input type = "email" name = "email"></p>
<p><input type = "submit" name = "reg_submit" value="Зарегистрироваться"></p>
</form>

<?php
require_once 'connect_bd.php';

if ($connect){
    if(isset($_POST['user_name'], $_POST['user_login'], $_POST['password'], $_POST['email'] )) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query_reg = "INSERT INTO `users` SET name = '".$_POST['user_name']."', login = '".$_POST['user_login']."', password = '".$password."', email = '".$_POST['email']."'";
        // $query_reg = mysqli_escape_string($connect, $query_reg);
        mysqli_query($connect,$query_reg);
        
        header('location:login.php');
        die();
    } else {
        echo 'Invalid data for registration!';
    }
}