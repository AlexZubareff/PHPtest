<form action = "index.php" name = "login" method="post">
<p>Логин: <input type = "text" name = "user_login"></p>
<p>Пароль: <input type = "password" name = "password"></p>
<p><input type = "submit" name = "login_submit" value="Войти"></p>
</form>

<?php
    if(isset($_POST['user_login'], $_POST['password'])) {
        require_once 'connect_bd.php';
        if ($connect){
            $query_user_login = "SELECT * FROM users  WHERE login = '".$_POST['user_login']."'";
            $result = mysqli_query($connect,$query_user_login);
            $result = mysqli_fetch_assoc($result);

            if (password_verify($_POST['password'], $result['password'])){
                var_dump($result);
                setcookie('islogged', '1');
                header('location:index.php');
                die();
            } else {
                echo 'Incorrect Login/Password';
            }
    }
} 