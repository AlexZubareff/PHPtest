<form action="login.php" name="login" method="post">
    <p>Логин: <input type="text" name="user_login"></p>
    <p>Пароль: <input type="password" name="password"></p>
    <p><input type="submit" name="login_submit" value="Войти"></p>
</form>

<?php
// echo 'Registration success';
if (isset($_COOKIE['islogged'])) {
    header('location: index.php');
}

if (isset($_POST['user_login'], $_POST['password'])) {
    require_once 'connect_bd.php';

    if ($connect) {
        $query_user_login = "SELECT * FROM users  WHERE login = '" . $_POST['user_login'] . "'";
        $result = mysqli_query($connect, $query_user_login);
        $result = mysqli_fetch_assoc($result);
        // var_dump($result);
        if (password_verify($_POST['password'], $result['password'])) {

            setcookie('islogged', '1');
            session_start();
            $_SESSION['name'] = $result['name'];
            $_SESSION['login'] = $result['login'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['created_at'] = $result['created_at'];
            header('location: index.php');
            die();
        } else {
            echo 'Incorrect Login/Password';
        }
    }
}
