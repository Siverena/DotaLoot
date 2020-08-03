<?php

include_once('m/auth.php');

?>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=320px, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php include_once 'header.php';
	$_SESSION['redirecturl'] = "agree.php";?>

    <main>
        <?php include_once 'live.php';?>
        <div class="section-2 clearfix-1">
            <div class="container">
                <div class="content">
                    <div class="page-name">
                        <div>ВАШИ ВЫВОДЫ</div>
                    </div>

                    <div class="ifSmallWidth techis__answer">
                        <p>Переверните устройство в горизонтальное положение.</p>
                        <p>Если таблица не отображается, то ваше устройство не подходит для корректного отображения этой страницы. Вы можете открыть страницу на компьютере или установить в настройках браузера отображение версии для ПК.</p>
                    </div>
                    <div class="cons-cont">
                        <table class="top-table">
                            <tr class="top-table__header">
                                <th class="top-table__place">№:</th>
                                <th class="top-table__user">Предмет:</th>
                                <th class="top-table__earned">Сумма:</th>
                                <th class="top-table__kod">Статус:</th>
                                <th class="top-table__cases">Секретный код:</th>
                            </tr>
                            <tr class="top-table__row">
                                <td class="top-table__place">1</td>
                                <td class="top-table__user"> Название предмета </td>
                                <td class="top-table__earned">500</td>
                                <td class="top-table__kod">Статус</td>
                                <td class="top-table__cases">DJSFJSNFJ</td>
                            </tr>
                            <tr class="top-table__row">
                                <td class="top-table__place">2</td>
                                <td class="top-table__user">Название предмета </td>
                                <td class="top-table__earned">500</td>
                                <td class="top-table__kod">Статус</td>
                                <td class="top-table__cases">DJSFJSNFJ</td>
                            </tr>
                            <tr class="top-table__row">
                                <td class="top-table__place">3</td>
                                <td class="top-table__user">Название предмета </td>
                                <td class="top-table__earned">500</td>
                                <td class="top-table__kod">Статус</td>
                                <td class="top-table__cases">DJSFJSNFJ</td>
                            </tr>
                            <tr class="top-table__row">
                                <td class="top-table__place">4</td>
                                <td class="top-table__user">Название предмета </td>
                                <td class="top-table__earned">500</td>
                                <td class="top-table__kod">Статус</td>
                                <td class="top-table__cases">DJSFJSNFJ</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once 'stat.php';?>
    </main>
    <?php include_once 'footer.php';?>
</body>

</html>
