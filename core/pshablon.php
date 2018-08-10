<div class="container-fluid">
<div class="row">
    <div class="col-md-12 text-center">
        <h3>Паспорт набора</h3>
    </div>
    <div class="col-md-12 text-center">
        " <?php echo $title;?>"
    </div>
    <div class="col-md-12 text-center">
         &nbsp;
    </div>
    <div class="row">
        <div class="btn-group" id="odat">
            <?php
            $link_pasport = $folder . "/index.php";
            echo '<a class="btn btn-default" href="' . $urlnabor . '" role="button">Скачать набор (*.csv)</a>';
            echo '<a class="btn btn-default" href="/index.php?page=content/showdata.php&title=' . $title . '&link_data=' . $urlnabor . '" role="button">Просмотреть данные</a>';
            echo '<a class="btn btn-default" href="' . $urlmeta . '" role="button">Скачать паспорт (*.csv)</a>';
            $urls_old_nabor = get_old_datafile($folder);
            $urls_old_structure = get_old_datafile($folder);
            ?>
        </div>
    </div>
    <div about="<?php echo $identifier ?>" typeof="foaf:Document">
        <div rel="dc:conformsTo" resource="http://opendata.gosmonitor.ru/standard/3.0">&nbsp;</div>
        <table about="<?php echo $identifier ?>" class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Наименование поля паспорта</th>
                    <th>Значение поля паспорта</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <td>
                        <div class="label"><span class="label">Идентификационный номер</span></div>
                    </td>
                    <td property="dc:identifier"><?php echo $identifier ?></td>
                </tr>
                <tr class="even">
                    <td>
                        <div class="label"><span class="label">Наименование набора данных</span></div>
                    </td>
                    <td property="dc:title"><?php echo $title ?></td>
                </tr>
                <tr class="odd">
                    <td>
                        <div class="label"><span class="label">Описание набора данных</span></div>
                    </td>
                    <td property="dc:description"><?php echo $description ?></td>
                </tr>
                <tr class="even">
                    <td>
                        <div class="label"><span class="label">Владелец набора данных</span></div>
                    </td>
                    <td property="dc:creator">Администрация Шарьинского муниципального района Костромской области</td>
                </tr>
                <tr class="odd">
                    <td>
                        <div class="label"><span class="label">Ответственное лицо</span></div>
                    </td>
                    <td rel="dc:publisher" resource="#publisher"><span about="#publisher" property="foaf:name" rel="dc:publisher" typeof="foaf:Person"><?php echo $publishername ?></span></td>
                </tr>
                <tr class="even">
                    <td>
                        <div class="label"><span class="label">Номер телефона ответственного лица</span></div>
                    </td>
                    <td rel="dc:publisher" resource="#publisher"><span about="#publisher" content="тут телефон +75555" property="foaf:phone" typeof="foaf:Person"><?php echo $publisherphone ?></span></td>
                </tr>
                <tr class="odd">
                    <td>
                        <div class="label"><span class="label">Адрес электронной почты ответственного лица</span></div>
                    </td>
                    <td rel="dc:publisher" resource="#publisher"><span about="#publisher" property="foaf:mbox" typeof="foaf:Person"><?php echo $publishermbox ?></span></td>
                </tr>
                <tr class="even">
                    <td>
                        <div class="label"><span class="label">Гиперссылка (URL) на набор</span></div>
                    </td>
                    <td><a href="<?php echo $urlnabor ?>"><?php echo $urlnabor ?>.</a></td>
                </tr>
                <tr class="odd">
                    <td>
                        <div class="label"><span class="label">Формат данных</span></div>
                    </td>
                    <td content="csv" property="dc:format">csv</td>
                </tr>
                <tr class="even">
                    <td>
                        <div class="label"><span class="label">Описание структуры набора данных</span></div>
                    </td>
                    <td><a href="<?php echo $urlstructure ?>"><?php echo $urlstructure ?></a></td>
                </tr>
                <tr class="odd">
                    <td>
                        <div class="label"><span class="label">Дата первой публикации </span></div>
                    </td>
                    <td content="29-06-2015" property="dc:created"><?php echo $created ?></td>
                </tr>
                <tr class="even">
                    <td>
                        <div class="label"><span class="label">Дата последнего внесения изменений</span></div>
                    </td>
                    <td content="<?php echo $modified ?>" property="dc:modified"><?php echo $modified ?></td>
                </tr>
                <tr class="odd">
                    <td>
                        <div class="label"><span class="label">Дата актуальности набора данных</span></div>
                    </td>
                    <td content="31-01-2017" property="dc:valid"><?php echo $valid ?></td>
                </tr>
                <tr class="even">
                    <td>
                        <div class="label"><span class="label">Содержание последнего изменения</span></div>
                    </td>
                    <td><?php echo $provenance ?></td>
                </tr>
                <tr class="odd">
                    <td>
                        <div class="label"><span class="label">Ключевые слова (Keywords)</span></div>
                    </td>
                    <td property="dc:subject"><?php echo $subject ?></td>
                </tr>
                <tr class="even">
                    <td>
                        <div class="label"><span class="label">Гиперссылки (URL) на версии набора данных</span></div>
                    </td>
                    <td>
                        <ul>
                            <?php
                            $countM = count($urls_old_nabor);
//                                    echo "<PRE>";
//                                    print_r($urls_old_nabor);
//                                    echo 'размер массива '.$countM;
//                                    echo 'Нулевой элемент = '.$urls_old_nabor[0];
//                                    echo "</PRE>";
                            for ($i = 0; $i < $countM; $i++) {
                                if ($urls_old_nabor[$i] == 'Нет данных') {
                                    echo '<li>' . $urls_old_nabor[$i] . '</li>';
                                } else {
                                    $url = 'http://opendata.admshmr.ru/' . $folder . '/' . $urls_old_nabor[$i];
                                    echo '<li><a href="' . $url . '" style="line-height: 20.8px;">' . $url . '</a></li>';
                                };
                            };
                            ?>
                        </ul>
                    </td>
                </tr>
                <tr class="odd">
                    <td>
                        <div class="label"><span class="label">Гиперссылки (URL) на версии структуры набора данных</span></div>
                    </td>
                    <td>
                        <ul>
                            <?php
                            $countM = count($urls_old_structure);
                            for ($i = 0; $i < $countM; $i++) {
                                if ($urls_old_structure[$i] == 'Нет данных') {
                                    echo '<li>' . $urls_old_structure[$i] . '</li>';
                                } else {
                                    echo '<li><a href="' . $urls_old_structure[$i] . '" style="line-height: 20.8px;">http://opendata.admshmr.ru/' . $urls_old_structure[$i] . '</a></li>';
                                };
                            };
                            ?>
                        </ul>
                    </td>
                </tr>
                <tr class="even">
                    <td>
                        <div class="label"><span class="label">Версия методических рекомендаций</div>
                    </td>
                    <td>3.0</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>&nbsp;</div>
    </div>