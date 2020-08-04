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
    $_SESSION['redirecturl'] = "index.php";?>


    <main>
        <?php include_once 'live.php';?>

        <section class="l-k">
            <div class="container">
                <div class="page-name">
                    <div>Мой профиль</div>
                    <div>
                        <p class="page-name__description">Мой: баланс, инвентарь, информация.</p>
                    </div>
                </div>
                <div class="content content-lk">

                    <div class="user">
                        
                        <div class="user-avatar">
                            <img class="user__image" src="img/ava.png" alt="">
                        </div>
                        <div class="user__text-block user__text-block--name">
                            <span>Paradox-ART</span>
                        </div>
                        <div class="user__text-block user__text-block--money ">
                            <p class="money__count">75 000Р</p>

                            <button class="site-btn site-btn--orange user__btn--pay lk-column-1__pay" type="button" data-toggle="modal" data-target="#Modal-4">
                                <p class="button-t button-t-b">+</p>
                            </button>

                        </div>
                        <div class="user__text-block user__text-block--quantity"> Открыто кейсов: 1200
                        </div>
                        <a class="site-btn site-btn--orange user__btn--conclusion" href="conclusion.php">
                            <p class="button-t">Выводы</p>
                        </a>
                        <a class="site-btn site-btn--orange user__btn--partner" href="partner.php">
                            <p class="button-t">Партнёрка</p>
                        </a>
                    </div>
                    <div class="information information--lk">
                        <div class="algorithm">
                            <div class="algorithm__step algorithm__step--link">
                            Введите ссылку на обмен
                            </div>
                            <div class="algorithm__step algorithm__step--balance">
                            Пополните баланс
                            </div>
                            <div class="algorithm__step algorithm__step--skin">Получайте скины
                            </div>
                        </div>


                        <div class="exchange-link">
                            <form class="exchange-link__form" action="" method="post">
                                <div class="exchange-link__text-wrap">
                                <label class="exchange-link__label" for="link">Выша ссылка на обмен</label>
                                <input readonly id="link" class="exchange-link__input" type="text" value="https://steamcommunity.com/tradeoffer/new/?artner=293023081=pHKFxQc9">
                                </div>

                                <div class="exchange-link__button-wrap">
                                    <button class="site-btn site-btn--green exchange-link--look"><p class="button-t">Узнать</p></button>
                                    <button class="site-btn site-btn--orange exchange-link--save"> <p class="button-t">Сохранить </p></button>
                                </div>
                            </form>
                        </div>

                        <div class="stim-name">
                            <form class="stim-name__form" action="" method="post">
                                <div class="stim-name__text-wrap">
                                <label class="stim-name__label" for="link">Ваш логин Steam</label>
                                <input readonly id="link" class="stim-name__input" type="text" value="paradox53r">
                                </div>

                                <div class="stim-name__button-wrap">
                                    <button class="site-btn site-btn--green stim-name--look"><p class="button-t">Узнать</p></button>
                                    <button class="site-btn site-btn--orange stim-name--save"> <p class="button-t">Сохранить </p></button>
                                </div>
                            </form>
                        </div>
                        
                        <div class="new-sitem">
                            <p class="new-sitem__title">Новая система обмена! Без задержек Steam!</p>
                            <button data-toggle="modal"  data-target="#exchange" class="site-btn new-sitem--look">Узнать подробнее</button>
                        </div>


                        
                        <div class="worning">
                            <div class="worning__text-wrap">
                            <p>Сотрудники DotaLoot никогда не добавляются в друзья, не пишут в личные сообщения и не просят у пользователей предметы.</p>
                            <p style="color:#f74f22;">Не ведитесь на уловки мошенников!</p>
                            </div>

                        </div>
                        

                        <div class="board strong-4">
                            <h3 class="board__header strong-4__header">Ваши предметы</h3>
                            <div class="board__nav lk-nav">
                                <div class="lk-nav__page">
                                    <a href=""><img style="transform: scale(-1, 1) " src="img/double-r.png" alt=""></a><a style="margin-left: 7px;" href=""><img src="img/double-r.png" alt=""></a>
                                </div>
                                <div class="lk-nav__activ">
                                    <a class="lk-nav__activ-link lk-nav__activ-link-orage" href="">Активные</a><a class="lk-nav__activ-link" href="">Не активные</a>
                                </div>

                            </div>
                            <div class="items  strong-4__item-cont">
                                <!--predmet-item start-->
                                <div class="my-predmet-item lk-item--margin">
                                    <div class="my-predmet-item__img">
                                        <img src="img/item2.png" alt="">
                                    </div>
                                    <div class="line item-image-r1"></div>
                                    <div class="my-predmet-item__text">
                                        Название предмета
                                    </div>
                                    <div class="properties">
                                        <div class="my-predmet-item__price"> 159Р </div>

                                        <div class="status-cont">
                                            <button class="status-cont__link status-cont--status1" data-toggle="modal"  data-target="#sale" href="">
                                                <span>V</span>
                                                <div class="status-cont__link--hover">Забрать предмет</div>
                                            </button>
                                            <button class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Продать предмет</div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <!--predmet-item end-->

                                <!--predmet-item start-->
                                <div class="my-predmet-item lk-item--margin">
                                    <div class="my-predmet-item__img">
                                        <img src="img/item2.png" alt="">
                                    </div>
                                    <div class="line item-image-r1"></div>
                                    <div class="my-predmet-item__text">
                                        Название предмета
                                    </div>
                                    <div class="properties">
                                        <div class="my-predmet-item__price"> 159Р </div>
                                        <div class="status-cont">
                                            <button class="status-cont__link status-cont--status1" data-toggle="modal"  data-target="#sale" href="">
                                                <span>V</span>
                                                <div class="status-cont__link--hover">Забрать предмет</div>
                                            </button>
                                            <button class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Продать предмет</div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <!--predmet-item end-->

                                <!--predmet-item start-->
                                <div class="my-predmet-item lk-item--margin">
                                    <div class="my-predmet-item__img">
                                        <img src="img/item2.png" alt="">
                                    </div>
                                    <div class="line item-image-r1"></div>
                                    <div class="my-predmet-item__text">
                                        Название предмета
                                    </div>
                                    <div class="properties">
                                        <div class="my-predmet-item__price"> 159Р </div>
                                        <div class="status-cont">
                                            <button class="status-cont__link status-cont--status1" data-toggle="modal"  data-target="#sale" href="">
                                                <span>V</span>
                                                <div class="status-cont__link--hover">Забрать предмет</div>
                                            </button>
                                            <button class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Продать предмет</div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <!--predmet-item end-->

                            </div>
                        </div>
                    </div>
                        

                </div>
            </div>
        </section>
        <?php include_once 'stat.php';?>
    </main>
    <?php include_once 'footer.php';?>



    <!-- exchange -->
    <div class="modal fade" id="exchange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-exchange">
                <!-- <div class="modal-body ">-->

                <div class="modal-window modal-window--1 ">
                    <h2 class="window__header">Новая система вывода предметов</h2>
                    <p class="window__text">Возможно выбранного предмета сейчас нет в
                    наличии или он имеет ограничения на обмен.
                    Не переживайте!)
                    Мы приготовили для вас новую и
                    более быструю систему вывода
                    предметов</p>
                </div>
                <div class="modal-window modal-window--2 ">
                    <h2 class="window__header">Как вам будет удобно</h2>
                        <p class="window__text">Вы можете выбрать, как именно получить предмет</p>

                    <ol class="modal-window__list">
                    <li class="modal-window__item">Вывести ваш предмет обычным трейдом, или заменить его
                                        на аналогичный по стоимости.</li>
                    <li class="modal-window__item">Получить стоимость этого предмета на ваш Steam-аккаунт икупить его самостоятельно на официальной торговой площадке Steam или потратить
                                        его стоимость на что-то более серьезное. <br> На ваш аккаунт придет полная стоимость предмета в течении пары секунд.</li>
                    <li class="modal-window__item">Продать предмет на нашем сайте с бонусом 15%</li>
                    <li class="modal-window__item">Использовать его в контрактах для получения более ценного предмета)</li>
                    </ol>

                </div>
                <div class="modal-window modal-window--3">
                    <h2 class="window__header">Логин STEAM</h2>
                    <ol class="modal-window__list">
                        <li class="modal-window__item">Только логин Steam</li>
                        <li class="modal-window__item">Что бы получить стоимпость предмета на баланс Steam, вам нужно указать в профиле нашего сайта свой логин Steam.</li>
                    </ol>
                    <p class="window__text" style="color:#f74f22;">Ваш логин - это не ваш никнейм!</p>    

                    <p class="window__text">  Логин — это то, что вы вводите при входе в аккаунт. Узнать его можно здесь, в правом верхнем углу - <a  class="window__link" href="">Узнать</a>.</p>   

                </div>
                <div class="modal-window modal-window--4">
                    <h2 class="window__header">Вывод баланса на STEAM</h2>
                    <ol class="modal-window__list">
                        <li class="modal-window__item">Пополнение баланса на Steam.</li>
                        <li class="modal-window__item">Через пару секунд после нажатия «Пополнить» вы получите баланс на свой Steam аккаунт и сможете купить выигранный вами предмет на Торговой площадке, или потратить баланс на покупку другого  понравившегося вам предмета, Battle Pass и даже Dota+.</li>
                        <li class="modal-window__item">Каждые 24 часа мы обновляем цены всех предметов на сайте,
                    что бы выведенный вами предмет всегда можно было купить
                    по его актуальной цене.</li>
                    </ol>


                </div>
            <div class="exchange__buttons">
            <button class="site-btn site-btn--orange exchange--prev">
                <p class="button-t">Назад</p>
            </button>
            <button class="site-btn site-btn--orange exchange--next">
                <p class="button-t">Далее</p>
            </button>

                </div>
            </div>
        </div>

    </div>
    <!--    exchange end-->






    <!-- sale -->
    <div class="modal fade" id="sale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="gradient modal-sale">
                <div class="modal-sale__wrapper">

                
                    <h2 class="sale__header">Выберите способ вывода *название предмета*<br>Вам предстоит выбрать самый удобный способ получения или продажи предмета!</h2>
                    <div class="sale__item">
                        <button class="site-btn site-btn--orange sale__btn">
                            <p class="button-t">Продать</p>
                        </button>
                        <p class="sale__text">Вы всегда можете продать предмет сайту с бонусом 15% от его цены в Steam. Средства будут мгновенно зачислены на ваш баланс DotaLoot.</p>
                    </div>


                    <div class="sale__item">
                        <button class="site-btn site-btn--orange sale__btn">
                            <p class="button-t">Забрать</p>
                        </button>
                        <p class="sale__text">Ваш предмет «название предмета» в данный момент отсутствует в продаже на всех сторонних торговых площадках или имеет ограничения на обмен в Steam. Вы можете воспользоваться другим способом вывода, продать этот предмет сайту с 15% бонусом или использовать в контракте.</p>
                    </div>


                    <div class="sale__item">
                        <button class="site-btn site-btn--orange sale__btn">
                            <p class="button-t">Пополнить Steam</p>
                        </button>

                        <p class="sale__text">Вы можете получить полную стоимость
                            предмета на баланс вашего аккаунта Steam.
                            За полученные средства
                            Вы сможете самостоятельно купить
                            «Цена продажи» на Торговой
                            Площадке Steam в несколько кликов.
                            Это гораздо быстрее и
                            надежнее, чем обычные трейды. 
                        </p>
                    </div>
                
                    </div>


                </div>
            </div>
        </div>

    </div>
    <!--    sale end-->




    <script src="js/modal.js">

    </script>


</body>

</html>
