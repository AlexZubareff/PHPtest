<form action="index.php" method="post">
    <p>Введите числа А и В</p><br />
    A: <input type="number" name="A"><br>
    <br />
    B: <input type="number" name="B"><br>
    <br />
    Выбирите действие: <input list="Math" name="Action"><br>
    <datalist id="Math">
        <option value="Sum">
        <option value="Minus">
        <option value="Multiple">
        <option value="Del">
    </datalist>
    <br>
    <input type="submit" value="Выполнить"><br>
</form>


<?php
$a = $_POST['A'];
$b = $_POST['B'];
$action = $_POST['Action'];

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
    return ($arg1 / $arg2);
}

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'Sum':
            return sum($arg1, $arg2);
            break;
        case 'Minus':
            return minus($arg1, $arg2);
            break;
        case 'Multiple':
            return mult($arg1, $arg2);
            break;
        case 'Del':
            if ($arg2 == 0) {
                echo "Делить на ноль нельзя!";
                break;
            }
            return del($arg1, $arg2);
            break;
        default:
            echo "Введены некорректные данные";
            break;
    }
}
?>
<h1><?php echo mathOperation($a, $b, $action) ?></h1>