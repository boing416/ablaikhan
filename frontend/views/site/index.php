<?php
/* @var $this yii\web\View */
use backend\assets\FontAwesomeAsset;
FontAwesomeAsset::register($this);
use yii\web\JqueryAsset;
JqueryAsset::register($this);
$this->registerCssFile('/css/animate.min.css');
$this->registerJsFile('/js/animate-css.js');

$this->title = 'ablaikhan';
?>
<div class="site-index">
    <section id="home" data-type="background" data-speed="10" class="pages">
        <div class="row">
                <div class="col-md-12 top">
                    <img src="images/logo_full.png" alt=""/>
                    <div class="top_left">
                        <a href="#"><i class="fa fa-pencil-square-o"></i><span>обратная связь</span></a>
                        <a id="top_menu" href="#"><i class="fa fa-bars"></i><span>меню</span></a>
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
        </div>

    </section>
    <section id="about" data-type="background" data-speed="10" class="pages">

    </section>
    <section id="about2" data-type="background" data-speed="10" class="pages">

    </section>
    <section id="about3" data-type="background" data-speed="10" class="pages">

    </section>
</div>
<div id="top_menu1" class="top_menu">
    <div class="h" style="height: 100px"></div>
    <div class="list_menu_1">
        <ul>
            <li><a href="#">о нас</a></li>
            <li><a href="#">абитуриентам</a></li>
            <li><a href="#">международное сотрудничество</a></li>
            <li><a href="#">учебный процесс</a></li>
            <li><a href="#">наука и инновации</a></li>
            <li><a href="#">новости</a></li>
            <li><a href="#">контакты</a></li>
        </ul>
        <a class="map_link" href="#">+ карта сайта</a>
    </div>
    <div class="list_menu_2">
        <div class="row">
            <div class="col-md-12">
                <h1>карта сайта</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 items_mnu">
                <h1>о нас</h1>
                <ul>
                    <li>История</li>
                    <li>Преимущества</li>
                    <li>Миссия</li>
                    <li>Международное признание</li>
                    <li class="top-text">новости</li>
                    <li class="top-text">контакты</li>
                </ul>
            </div>
            <div class="col-md-2 items_mnu">
                <h1>абитурентам</h1>
                <ul>
                    <li>Офис-регистратора</li>
                    <li>Бакалавриат</li>
                    <li>Магистратура</li>
                    <li>Докторантура Ph.D</li>
                    <li>Программа вступительного экзамена</li>
                    <li>Программа двойного диплома</li>
                    <li>Наши специальности</li>
                    <li>Гранты</li>
                </ul>
            </div>
            <div class="col-md-2 items_mnu">
                <h1>международное сотрудничество</h1>
                <ul>
                    <li>Членство в междунородных организациях</li>
                    <li>Партнеры университета</li>
                    <li>Международные проекты</li>
                    <li>Академическая мобильность</li>
                    <li>Совместные образовательные программы</li>
                    <li>Управление международного сотрудничества</li>
                    <li>УШОС</li>
                    <li>Болонский процесс</li>
                </ul>
            </div>
            <div class="col-md-2 items_mnu">
                <h1>учебный процесс</h1>
                <ul>
                    <li>Структура и направления профессионально-образовательной деятельности ВУЗа</li>
                    <li>Подготовительные курсы</li>
                    <li>Академческая политика</li>
                    <li>Академический календарь</li>
                    <li>Путеводитель первокурстника</li>
                    <li>Лекции зарубежных профессоров</li>
                    <li>База проктик</li>
                    <li>Наши преподаватели</li>
                </ul>
            </div>
            <div class="col-md-3 items_mnu">
                <h1>наука и инновации</h1>
                <ul>
                    <li>Научные издания</li>
                    <li>НИРС</li>
                    <li>Диссовет</li>
                    <li>Состав диссертационного совета</li>
                    <li>Диссертационные работы</li>
                    <li>Аннотации</li>
                    <li>Извещение Комитета Образцы документов</li>
                    <li>Научные проекты</li>
                </ul>
            </div>
        </div>

        <a class="map_before" href="#"><--</a>
    </div>
    <div class="top_menu_footer">
        <div class="menu_line_1">
            <a href="#"><img src="images/icons/book.png" alt=""/>Образовательный портал</a>
            <a href="#"><img src="images/icons/edit.png" alt=""/>Блог ректора</a>
        </div>
        <div class="menu_line_2">
            <a href="#"><img src="images/icons/inst.png" alt=""/>instagram</a>
            <a href="#"><img src="images/icons/f.png" alt=""/>facebook</a>
            <a href="#"><img src="images/icons/vk.png" alt=""/>вкантакте</a>
        </div>
    </div>


    <a href="#" class="close closeAll"><i class="fa fa-times"></i></a>
</div>



