<?php
$list_array = file("list.csv"); // Считывание файла в массив
echo '<table class="table table-hover table-bordered"><tr><th>№</br>п/п</th><th>Наименование набора</th><th>Формат</br>данных</th></tr>';
if ($list_array){
    $counter=1;
    foreach ($list_array as $value) {
        if (stristr($value, '4430001003')){
            echo '<tr>';
            $strings = explode(";", $value);
            $link_actual_data_file = get_last_datafile($strings[2]);
            /*echo '<pre>Стрингс';
            print_r($strings);
            echo '</pre>';*/
            echo '<td id="cellnum">'.$counter.'</td>';
            //echo '<td id="cellname"><a href="/index.php?page='.$strings[0].'/index.php&title='.$strings[1].'">'.$strings[1].'</a></td>';
            echo '<td id="cellname"><a href="/index.php?page='.$strings[0].'/index.php&title='.$strings[1].'">'.$strings[1].'</a>';
            echo '<div class="btn-group" style="float: right;">';
            echo '<a class="btn btn-default" href="/index.php?page='.$strings[0].'/index.php&title='.$strings[1].'" role="button">Паспорт набора</a>';
            echo '<a class="btn btn-default" href="'.$link_actual_data_file.'" role="button">Скачать (*.csv)</a>';
            echo '<a class="btn btn-default" href="/index.php?page=content/showdata.php&title='.$strings[1].'&link_data='.$link_actual_data_file.'" role="button">Просмотр</a>';
            echo '</div>';
            echo '</td>';
            echo '<td id="cellf">'.$strings[3].'</td>';
            echo '<tr>';
            $counter++;
        }

    }
}
    else {
        echo 'Ошибка. Нет данных';    
    }
echo '</table>';   