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

    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/main.css.map">

</head>

<body>
    <?php include_once 'header.php';
	$_SESSION['redirecturl'] = "top.php";?>

    <main>
        <?php include_once 'live.php';?>
        <div class="section-2 clearfix-1">
            <div class="container">
                <div class="content">
                    <div class="page-name">
                        <div>топ</div>
                        <div>
                            <p class="page-name__description">счастливчики нашего проекта</p>
                        </div>
                    </div>
                    <!--                    Начало топ-3-->
                    <div class="top-avatars">


                        <!-- 1-е место	-->
                        <div class="top-avatar-cont ">


                            <div class="top-avatar-fon top-avatar-fon--orange">
                                <img class="top-avatar__img" src="img/ava.png" alt="">
                            </div>
                            <div class="top-avatar-text">
                                <p class="top-avatar-text-1">Севастьянов Иван Иванович</p>
                                <p class="top-avatar-text-2">Открыто кейсов: 1200</p>
                                <p class="top-avatar-text-3" style="color: #ff5b00">75 000 Р</p>
                            </div>
                        </div>
                        <!--1-е место конец-->



                        <!--2-е место-->
                        <div class="top-avatar-cont">
                            <div class="top-avatar-fon top-avatar-fon--blue">
                                <img class="top-avatar__img" src="img/ava.png" alt="">
                            </div>
                            <div class="top-avatar-text">
                                <p class="top-avatar-text-1">Paradox-ART</p>
                                <p class="top-avatar-text-2">Открыто кейсов: 1200</p>
                                <p class="top-avatar-text-3" style="color: #00c0ff">52 000 Р</p>
                            </div>
                        </div>

                        <!--					2-е место	конец-->
                        <!--					2-е место	-->
                        <div class="top-avatar-cont">

                            <div class="top-avatar-fon top-avatar-fon--green">
                                <img class="top-avatar__img" src="img/ava.png" alt="">
                            </div>
                            <div class="top-avatar-text">
                                <p class="top-avatar-text-1">Paradox-ART</p>
                                <p class="top-avatar-text-2">Открыто кейсов: 1200</p>
                                <p class="top-avatar-text-3" style="color: #06ff00">36 000 Р</p>
                            </div>
                        </div>



                        <!--					2-е место	конец-->
                    </div>
                    <!--                        конец топ-3-->

                    <!--                       Начало остального топа-->
                    <table class="top-table">
                        <tr class="top-table__header">
                            <th class="top-table__place">Место:</th>
                            <th class="top-table__user">Пользователь:</th>
                            <th class="top-table__cases">Открыто&nbsp;кейсов:</th>
                            <th class="top-table__earned">Заработано:</th>
                        </tr>
                        <tr class="top-table__row">
                            <td class="top-table__place">4</td>
                            <td class="top-table__user">
                                <div class="top-table__user-cont">
                                    <img src="img/ava.png" alt="" class="top-table__avatar">
                                    <span class="top-table__user-text">Севастьянов Иван Иванович</span>
                                </div>

                            </td>
                            <td class="top-table__cases">1000</td>
                            <td class="top-table__earned">30 000 Р</td>
                        </tr>
                        <tr class="top-table__row">
                            <td class="top-table__place">5</td>
                            <td class="top-table__user">
                                <div class="top-table__user-cont">
                                    <img src="img/ava.png" alt="" class="top-table__avatar">
                                    <span class="top-table__user-text">Paradox-ART</span>
                                </div>
                            </td>
                            <td class="top-table__cases">500</td>
                            <td class="top-table__earned">25 000 Р</td>
                        </tr>
                        <tr class="top-table__row">
                            <td class="top-table__place">6</td>
                            <td class="top-table__user">
                                <div class="top-table__user-cont">
                                    <img src="img/ava.png" alt="" class="top-table__avatar">
                                    <span class="top-table__user-text">Paradox-ART</span>
                                </div>
                            </td>
                            <td class="top-table__cases">400</td>
                            <td class="top-table__earned">16 000 Р</td>
                        </tr>
                        <tr class="top-table__row">
                            <td class="top-table__place">7</td>
                            <td class="top-table__user">
                                <div class="top-table__user-cont">
                                    <img src="img/ava.png" alt="" class="top-table__avatar">
                                    <span class="top-table__user-text">Paradox-ART</span>
                                </div>
                            </td>
                            <td class="top-table__cases">300</td>
                            <td class="top-table__earned">7 000 Р</td>
                        </tr>
                    </table>
                    <!--                    конец остальго топа-->
                </div>
            </div>
        </div>
        <?php include_once 'stat.php';?>
    </main>
    <?php include_once 'footer.php';?>
</body>

</html>
