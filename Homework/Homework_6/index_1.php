<form action="index_1.php" method="post">
    <p>Введите числа А и В</p><br/>
    A: <input type="number" name="A"><br>
    <br>
    B: <input type="number" name="B"><br>
    <br>
    <br>
    <input type="submit" id="Sum" name="Sum" value="Сложение">
    <input type="submit" id="Minus" name="Minus" value="Вычитание">
    <input type="submit" id="Multiple" name="Multiple" value="Умножение">
    <input type="submit" id="Del" name="Del" value="Деление">
</form>

<?php
$a = $_POST['A'];
$b = $_POST['B'];

if (isset($_POST["Sum"])) {
    $res = sum($a, $b);
} else if (isset($_POST["Minus"])) {
    $res = minus($a, $b);
} else if (isset($_POST["Multiple"])) {
    $res = mult($a, $b);
} else (isset($_POST["Del"])){
    $res = del($a, $b)};


function sum($arg1, $arg2)
{
    return ($arg1 + $arg2);
}

function minus($arg1, $arg2)
{
    return ($arg1 - $arg2);
}

function mult($arg1, $arg2)
{
    return ($arg1 * $arg2);
}

function del($arg1, $arg2)
{
    if ($arg2 == 0) {
        echo "Делить на ноль нельзя!";
    } else {
        return ($arg1 / $arg2);
    }
}
?>

<h1><?php echo $res ?></h1>