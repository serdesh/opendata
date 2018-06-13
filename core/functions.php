<?php

function get_last_datafile($path_metafile) {
    $pf_array = file($path_metafile); // Считывание файла в массив
    if ($pf_array) {//Если массив не пустой
        $last_dat = "20000101T0000";
        //Получаем последнюю дату
        foreach ($pf_array as $str) {
            if (strstr($str, "-structure-")) {
                $sdf = explode(";", $str); //Информация о названии файла набора + ссылка на него
                /* pArray($sdf); */
                if (strtotime(get_str_dat($sdf[0])) > strtotime($last_dat)) {
                    $last_dat = $sdf[0];
                    $last_link = $sdf[1];
                }
            }
        }
    }
    return $last_link;
}

function get_str_dat($string) {//разбиваем строку data-20160620T1615-structure-.... и выцепляем дату и время
    $arr = explode("-", $string);
    return $arr[1];
}

function get_link_data_file($data) {
    foreach ($array as $value) {
        
    }
}

function pArray($array, $nameArray) {
    echo '<pre>' . $nameArray;
    print_r($array);
    echo '</pre>';
}

function del_name_website($str) {
    return str_replace("http://opendata.admshmr.ru/", "", $str);
}

function get_old_datafile($directory) { //Получаем массив со старыми наборами данных
    if (!$directory) {
        //echo 'Файлы';
        return null;
    }
    $files = scandir($directory, 1); //Сортируем по убыванию, чтобы последний файл был первым
    //var_dump($files);
    //Отфильтровываем наборы данных
    $countfiles = 0;
    $datafiles = array();

    foreach ($files as $file) {
        if (strpos($file, '-structure-')) {
            if ($countfiles > 0) {//Пропускаем первый, потому что он самый новый
                $datafiles[] = $file;
            }
            $countfiles += 1;
        }
    }
    //pArray($datafiles, 'Файлы данных');
    //Удаляем первый элемент массива
    //unset($datafiles[0]);
    return $datafiles;
}

function getFolderName($pathDir) {
    $nameDir = substr($pathDir, 0, strpos($pathDir, '/'));
    return $nameDir;
}

?>