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
	$_SESSION['redirecturl'] = "techis.php";?>

    <main>
        <?php include_once 'live.php';?>
        <div class="section-2 clearfix-1">
            <div class="container">
                <div class="page-name">тэчис</div>
                <div class="contract-attention techis__answer">
                    <p>Переверните устройство в горизонтальное положение.</p>
                    <p>Если игра не отображается, то ваше устройство не подходит для этой игры, но вы можете присоединиться к игре на компьютере или установить в настройках браузера отображение версии для ПК.</p>
                </div>
                <section class="techis__text">
                    <p class="techis__question">
                        Зачем играть в минное поле?
                    </p>
                    <p class="techis__answer">
                        В минном поле вероятность выше на получение большого выигрыша, поэтому вы можете с легкостью выбить танк. Например, если вы поставите 300 руб.<br>
                        и дойдете до конца минного поля, то получите 1800 руб. Эти деньги вы можете потратить на открытие кейсов. <br>
                        Необязательно доходить до конца, можно забрать выигрыш в любой момент.
                    </p>
                </section>
                <sectiont class="techis__cont">

                    <div class="min-pol">
                        <div class="techis__table-header">
                            <div class="techis__table-th table-th--white">600</div>
                            <div class="techis__table-th table-th--white">700</div>
                            <div class="techis__table-th table-th--white">800</div>
                            <div class="techis__table-th table-th--white">1000</div>
                            <div class="techis__table-th">1.2К</div>
                            <div class="techis__table-th">1.5К</div>
                            <div class="techis__table-th">1.7К</div>
                            <div class="techis__table-th">2К</div>
                            <div class="techis__table-th">2.5К</div>
                            <div class="techis__table-th">2К</div>
                        </div>

                        <!--                    <div class="techis__table ">-->

                        <div class="techis__min ">
                            <div class="techis__min-cont">

                                <div class="techis__min-col">
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td td-checked"></div>
                                    <div class="techis__min-td td-bomb"></div>
                                </div>
                                <div class="techis__min-col">
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td td-checked-bomb"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td "></div>
                                </div>
                                <div class="techis__min-col no-checked">
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td "></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                </div>
                                <div class="techis__min-col no-checked">
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                </div>
                                <div class="techis__min-col no-checked">
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                </div>
                                <div class="techis__min-col no-checked">
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                </div>
                                <div class="techis__min-col no-checked">
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                </div>
                                <div class="techis__min-col no-checked">
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                </div>
                                <div class="techis__min-col no-checked">
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                </div>
                                <div class="techis__min-col no-checked">
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                    <div class="techis__min-td"></div>
                                </div>
                            </div>
                        </div>
                        <!--                    </div>-->

                    </div>

                    <div class="techis__many-cont">
                        <div class="techis__summ gradient">
                            <p class="techis__summ-text">Выберите сумму для ставки.</p>
                           
                               <div class="techis__bets">
                               <div class="techis__bet">10</div>
                               <div class="techis__bet">25</div>
                               <div class="techis__bet">50</div>
                               <div class="techis__bet">100</div>
                               <div class="techis__bet">250</div>
                               <div class="techis__bet">500</div>
                               </div>
                                <button type="submit" class="techis__summ-button ">
                                    <p class="techis__summ-button-text">Старт</p>
                                </button>

                            
                        </div>
                        <div class="techis__live gradient">
                            <p class="techis__live-text"><span class="techis__live-text--orange">Live</span> результаты </p>
                            <table class="live__table">
                                <tr class="live__tr ">
                                    <th class="live__th live__name">Игрок</th>
                                    <th class="live__th live__stavka">Ставка</th>
                                    <th class="live__th live_x">X</th>
                                    <th class="live__th live__win">Выигрыш</th>
                                </tr>
                                <tr class="live__tr">
                                    <td class="live__td live__name">Paradox-ART</td>
                                    <td class="live__td live__stavka">5 000</td>
                                    <td class="live__td live__orange live_x">x3</td>
                                    <td class="live__td live__win live__orange live__win--before">15 000</td>
                                </tr>
                                <tr class="live__tr">
                                    <td class="live__td live__name">Paradox-ART</td>
                                    <td class="live__td live__stavka">5 000</td>
                                    <td class="live__td live__orange live_x">x3</td>
                                    <td class="live__td live__win live__orange live__win--before">15 000</td>
                                </tr>
                                <tr class="live__tr">
                                    <td class="live__td live__name">Paradox-ART</td>
                                    <td class="live__td live__stavka">5 000</td>
                                    <td class="live__td live_x">x3</td>
                                    <td class="live__td live__win  live__win--before">15 000</td>
                                </tr>
                                <tr class="live__tr">
                                    <td class="live__td live__name">Paradox-ART</td>
                                    <td class="live__td live__stavka">5 000</td>
                                    <td class="live__td live__orange live_x">x3</td>
                                    <td class="live__td live__win live__orange live__win--before">15 000</td>
                                </tr>
                                <tr class="live__tr">
                                    <td class="live__td live__name">Paradox-ART</td>
                                    <td class="live__td live__stavka">5 000</td>
                                    <td class="live__td live__orange live_x">x3</td>
                                    <td class="live__td live__win live__orange live__win--before">15 000</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </sectiont>

            </div>
        </div>
        <?php include_once 'stat.php';?>
    </main>
    <?php include_once 'footer.php';?>
</body>
<script src="js/live.js"></script>

</html>
