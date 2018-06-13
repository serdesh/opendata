<?php
$CUR_LINK_DATA=del_name_website($_GET['link_data']);
$pf_array = file($CUR_LINK_DATA); // Считывание файла в массив        
//$folder = str_replace("http://opendata.admshmr.ru/","",get_folder($LINK_DATA));//Для корректной работы на локальном сервере
$folder = get_folder($CUR_LINK_DATA);
$inf_arr = file($folder.'/meta.csv');
$title = get_title($inf_arr[3]);
//Наименование таблицы
echo '<center><h3>'.$title.'</h3></center>';
echo '<p>&nbsp;</p>';
echo '<div class="btn-group" id="odat">';
$link_pasport = $folder."/index.php";
//$link_pasport = str_replace("http://opendata.admshmr.ru/","", $link_pasport);// для корректной работы на локальном сервере
//echo "Ссылка на паспорт: ".$link_pasport;
echo '<a class="btn btn-default" href="/index.php?page='.$link_pasport.'&title='.$title.'" role="button">Паспорт набора</a>';
echo '<a class="btn btn-default" href="'.$CUR_LINK_DATA.'" role="button">Скачать (*.csv)</a>';
echo '</div>';
echo '<p>&nbsp;</p>';
//Таблица
echo '<table class="table table-hover table-bordered">';
$counter = 1;
foreach ($pf_array as $values) {
    //pArray($value, 'Значение! ');
    if ($counter == 1){//Шапка талицы
        addTR($values, TRUE,'tblhead');
    }else{
        //чет нечет
        if(($counter%2)==1){
            //echo 'не чётное число';
            $_class = 'odd';
        }else {
            //echo 'чётное число';
            $_class = 'even';
        }
        addTR($values, FALSE, $_class);
    }
    $counter++;
}
echo '</table">';

function addTR($str_dat, $head, $class) {
    $mar = explode(";", $str_dat);
    //pArray($mar,'Ячейки ');
    echo '<tr class="' . $class . '">';
    foreach ($mar as $val) {
        if ($head==TRUE){
            echo '<th>'.$val.'</th>';
        }  else {
            echo '<td>'.$val.'</td>';
        }
    }
    echo '</tr>';
}

function get_folder($l_dat){
    $fold = substr($l_dat, 0, strripos($l_dat, "/"));
    //echo 'FOLDER: '.$fold;
    return $fold;
}

function get_title($string) {
   $inf = explode(";", $string);
   return  $inf[1];
}
