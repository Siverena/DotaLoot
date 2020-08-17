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
    <?php include_once 'header.php';?>

    <main>
        <?php include_once 'live.php';?>
        <div class="section-2 clearfix-1">
            <div class="container">
                <div class="content">
                    <div class="page-name">
                        Партнерская программа
                    </div>
                    <section class="common">
                        <div class="common__stat">
                            <p class="common__stat-name">Paradox-ART</p>
                            <p class="common__stat-count">Рефералов: <span class="common__stat-count__quantity">300</span></p>
                            <p class="common__stat-count">Заработано: <span class="common__stat-count__quantity">15 000</span></p>
                        </div>
                        <div class="common__ref-link">
                            <a class="common__ref-link__text" href="">Ваша реферальная ссылка, нажмите что бы скопировать. </a>
                            <p class="common__ref-link__link">https://dota-loot.com/getprize?ref=406549</p>
                        </div>
                        <div class="common__share">
                            <p class="common__share-text">Поделись ссылкой в соц сетях:</p>
                            <div class="common__share-links">
                                <a class="common__share-link common__share-vk" href="vk.com">vk</a>
                                <a class="common__share-link common__share-gl" href="google.com">google</a>
                                <a class="common__share-link common__share-is" href="instagram">instagram</a>
                                <a class="common__share-link common__share-ok" href="odnoklassniki">odnoklassniki</a>
                                <a class="common__share-link common__share-fb" href="facebook">facebook</a>
                                <a class="common__share-link common__share-wa" href="whatapp">whatapp</a>
                                <a class="common__share-link common__share-tl" href="telegram">telegram</a>
                            </div>

                        </div>
                    </section>

                    <section class="months">
                        <h3 class="months__header">
                            Статистика за последние 6 месяцев
                        </h3>
                        <div class="months__cont">
                            <div class="months__month">
                                <p class="months__name ">Февраль</p>
                                <p class="months__earn">Заработано</p>
                                <p class="months__summ">12 000</p>

                            </div>
                            <div class="months__month">
                                <p class="months__name ">Март</p>
                                <p class="months__earn">Заработано</p>
                                <p class="months__summ">12 000</p>
                            </div>
                            <div class="months__month">
                                <p class="months__name ">Апрель</p>
                                <p class="months__earn">Заработано</p>
                                <p class="months__summ">12 000</p>
                            </div>
                            <div class="months__month month--active">
                                <p class="months__name months--future">Май</p>
                                <p class="months__earn">Заработано</p>
                                <p class="months__summ months--present">75 000</p>
                            </div>
                            <div class="months__month">
                                <p class="months__name months--future">Июнь</p>
                                <p class="months__earn">Заработано</p>
                                <p class="months__summ months--future">0</p>
                            </div>
                            <div class="months__month">
                                <p class="months__name months--future">Июль</p>
                                <p class="months__earn">Заработано</p>
                                <p class="months__summ months--future">0</p>
                            </div>
                        </div>


                    </section>
                    <section class="partner-faq">
                        <h3 class="partner-faq__header">FAQ</h3>
                        <p class="partner-faq__text">С помощью кнопок <span style="color: #f74f22;">"Поделиться"</span> Вы можете делиться своей партнерской ссылкой как в соц. сетях, так и напрямую. <br>
                            Вы получаете <span style="color: #fff;">5%</span> от суммы всех заказов привлеченного пользователя. Процент фиксирован.<br>
                            Полученные средства можно тратить на покупку кейсов на <span style="color: #f74f22; text-transform: uppercase;">dota-loot</span>.<br>
                            Средства на баланс перестают начисляться спустя 30 дней с момента привлечения последнего реферала.</p>

                    </section>
                    <section class="questions">
<!--Вопрос-->
                        <div class="question">
                            <input type="checkbox" id="hd-1" class="hide" />
                            <label class="question__label" for="hd-1"><span class="label-style">Я привел рефералов, но мне денег на баланс не зачисленно, что делать?</span></label>
                            <div class="answer">
                                <p>Как только ваш реферал пополнит свой баланс, автоматически вам зачислится 7% от суммы его пополнения. До тех пор пока ваш реферал баланс не пополнил, вам на баланс не будут перечисленны средства.</p>
                            </div>
                        </div>
                        <!--Вопрос конец-->
                        <!--Вопрос-->
                        <div class="question">
                            <input type="checkbox" id="hd-2" class="hide" />
                            <label class="question__label" for="hd-2"><span class="label-style">Если я приведу много рефералов, можно мне больше процент с реферала?</span></label>
                            <div class="answer">
                                <p>Для любого количества рефералов предусмотрен единый процент с пополнений. Вы получите 7% с оплат любого количества приведенных реферелов.</p>
                            </div>
                        </div>
                        <!--Вопрос конец-->
                        




                    </section>



                </div>
            </div>
        </div>
        <?php include_once 'stat.php';?>
    </main>
    <?php include_once 'footer.php';?>
</body>

</html>
