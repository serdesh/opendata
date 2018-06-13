<?php
$urlmeta = '4430001003-mestoadministracii/meta.csv';
$folder = '4430001003-mestoadministracii';
$pf_array = file($urlmeta); // Считывание файла в массив
//Определение переменных. данные берутся из файла meta.csv
if ($pf_array){
    foreach ($pf_array as $value) {
        $str = explode(";", $value);//Разбиваем строку, разделитель точка с запятой
         //Преобразуем дату из формата yyyyMMdd
        if ($str[0]=='created' OR $str[0]=='modified' OR $str[0]=='valid'){
            $_year = substr($str[1], 0, 4);
            $_month = substr($str[1], 4, 2);
            $_day =  substr($str[1], 6, 2);
            $str[1]=$_day.'.'.$_month.'.'.$_year;
        };
        $php_str = '$'.$str[0].'="'.$str[1].'";';//Составляем команду создания и определения переменной 
        //Проверяем параметр
        if (stristr($php_str, '-structure-')){ //если название набора данных
            $urlnabor = $str[1];
        } elseif(stristr($php_str, 'structure-')){//если название структуры набора данных
            $urlstructure = $str[1];
        }else{
            eval($php_str);//выполняем строку как команду    
        }
    }
} else {
    echo 'Ошибка! Отсутствуют данные';    
}
include 'core/pshablon.php';
