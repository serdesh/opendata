
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navadmshmr">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand"> <img src="gerb.png" alt="Администрация Шарьинского района" style="width:20px;margin:auto;"> </div>
                <a class="navbar-brand" href="http://admshmr.ru">admshmr.ru</a>
            </div>
            <div class="collapse navbar-collapse" id="navadmshmr">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php?page=content/nabor.php&title=Перечень наборов открытых данных"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;Перечень наборов открытых данных</a></li>
                    <li><a href="index.php?page=content/faq.php&title=Ответы на часто задаваемые вопросы"><i class="fa fa-question-circle-o" aria-hidden="true"></i>&nbsp;Ответы на часто задаваемые вопросы</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Условия использования</a></li>
                    <!--            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Сельские поселения <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Варакинское с.п.</a></li>
                                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Головинское с.п.</a></li>
                                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Заболотское с.п.</a></li>
                                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Зебляковское с.п.</a></li>
                                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Ивановское с.п.</a></li>
                                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Конёвское с.п.</a></li>
                                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Одоевское с.п.</a></li>
                                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Троицкое с.п.</a></li>
                                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Шангское с.п.</a></li>
                                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Шекшемское с.п.</a></li>
                                    </ul>
                                </li>-->
                    <li><a href="http://admshmr.ru/index.php?option=com_chronoforms5&view=form&Itemid=716"><i class="fa fa-share-square-o" aria-hidden="true"></i>&nbsp;Обратная связь</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Условия использования</h4>
            </div>
            <div class="modal-body">
                <?php include 'content/terms.php'; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>