<?php
require 'connection.php';
require 'inc/project-names.php';
require 'inc/leaders.php';


?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Второй Вариант</title>

    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <script src="assets/vendors/jquery-3.5.0.min.js"></script>
    <!-- With jQuery -->
    <script src="assets/js/common.js"></script>
</head>
<body>
    <section class="container">
        
        <!-- Первое задание -->
        <h5>Информация о выполненных задачах по выбранному проекту на указанную дату</h5>
        <form id="form1" action="forms/projects.php" class="form-group">
            <select name="project">
                <?php
                    foreach ($projectNames as $projectName){
                        echo '<option value="'.$projectName['ID'].'">'.$projectName['name'].'</option>';
                    }
                ?>
            </select>
            <input type="date" name="targetDate">
            <input type="time" name="targetTime">
            <input type="button" value="Отправить" onclick="getRes1(this)">
            <input type="button" value="Данные с LocalStorage" onclick="getLocal1(this)">
            <input type="button" value="Очистить форму" onclick="$('#result1 tbody').html('');">
        </form>
        <!--   -->
        <table id="result1" class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Выполненная работа</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>


        <!--  Второе задание  -->
        <h5>Количество проектов указанного руководителя.</h5>
        <form id="form2" action="forms/leader-projects.php" class="form-group">
            <select name="leader">
                <?php
                    foreach ($leaders as $leader){
                        echo '<option value="'.$leader['ID'].'">'.$leader['surname'].'</option>';
                    }
                ?>
            </select>
            <input type="button" value="Отправить" onclick="getRes2(this)">
            <input type="button" value="Данные с LocalStorage" onclick="getLocal2(this)">
            <input type="button" value="Очистить форму" onclick="$('#result2 tbody').html('');">
        </form>
        <table id="result2" class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>Количество проектов</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
        <!--    -->

        <!--  Третье задание  -->
        <h5>Сотрудники, работающие под началом выбранного руководителя</h5>
        <form id="form3" action="forms/workers.php" class="form-group">
            <select name="leader">
                <?php
                    foreach ($leaders as $leader){
                        echo '<option value="'.$leader['ID'].'">'.$leader['surname'].'</option>';
                    }
                ?>
            </select>
            <input type="button" value="Отправить" onclick="getRes3(this)">
            <input type="button" value="Данные с LocalStorage" onclick="getLocal3(this)">
            <input type="button" value="Очистить форму" onclick="$('#result3 tbody').html('');">
        </form>
        <table id="result3" class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Имя сотрудника</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
        <!--  -->
    </section>
</body>
</html>