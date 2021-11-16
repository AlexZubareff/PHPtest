<?php
$file = fopen('test.txt','r');
if(!$file){
    echo('Ошибка открытия файла');
}