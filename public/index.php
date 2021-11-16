

<?php
$file = fopen("test.txt", "r");
if (!$file) {
    echo ('Ошибка открытия файла');
} else {
    $buffer = '';
    while (!feof($file)) {
        $buffer .= fread($file, 1);
    }
    echo $buffer . "</br>";
    fclose($file);
}

echo file_get_contents("test.txt");
