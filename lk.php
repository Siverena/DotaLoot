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

        <section class="l-k clearfix-1">
            <div class="container">
                <div class="page-name">
                    <div>Мой профиль</div>
                    <div>
                        <p class="page-name__description">Мой: баланс, инвентарь, информация.</p>
                    </div>
                </div>
                <div class="content content-lk">

                    <div class="lk-column-1">
                        <div class="user-avatar">
                            <img src="img/ava.png" alt="">
                        </div>
                        <div class="lk-column-1-div name">
                            <span>Paradox-ART</span>
                        </div>
                        <div class="lk-column-1-div lk-column-1__money ">
                            <p class="lk-column-1__balance">75 000Р</p>

                            <button class="lk-column-1__pay" type="button" data-toggle="modal" data-target="#Modal-4">
                                <p class="button-t button-t-b">+</p>
                            </button>




                        </div>
                        <div class="lk-column-1-div lk-column-1__quantity"> Открыто кейсов: 1200
                        </div>
                        <a href="partner.php">
                            <div class="lk-column-1-div lk-column-1__partner">
                                <p class="button-t">Партнёрка</p>
                            </div>
                        </a>
                        <a href="conclusion.php">
                            <div class="lk-column-1-div lk-column-1__partner">
                                <p class="button-t">Выводы</p>
                            </div>
                        </a>

                    </div>
                    <div class="lk-column-2">
                        <form class="link-form" action="" method="post">
                            <div class="strong-1">
                                <input readonly class="lk-column-2__adres" type="text" value="https://steamcommunity.com/tradeoffer/new/?artner=293023081=pHKFxQc9">
                                <a class="lk-column-2__link lk-column-2__link--save" href="">
                                    <p class="button-t">Сохранить</p>
                                </a>
                                <a class="lk-column-2__link lk-column-2__link--change" href="">
                                    <p class="button-t">Узнать ссылку на обмен </p>
                                </a>


                            </div>



                        </form>
                        <div class=" how-work">
                            <div class="strong-2 ">
                                <img src="img/link.png" alt="">
                                <img src="img/balance.png" alt="">
                                <img src="img/scin.png" alt="">
                            </div>
                            <div class="strong-3">
                                <p>Внимание!</p>
                                <p>Администраторы/Модераторы/Помощники <span style="color:#f74f22;">DOTA-LOOT</span> никогда не пишут в личку<br>
                                    и не просят у пользователей скины. <br>
                                    Все, кто так так делают - мошенники.</p>
                            </div>
                        </div>

                        <div class="strong-4">
                            <h3 class="strong-4__header">Ваши предметы</h3>
                            <div class="lk-nav">
                                <div class="lk-nav__page">
                                    <a href=""><img style="transform: scale(-1, 1) " src="img/double-r.png" alt=""></a><a style="margin-left: 7px;" href=""><img src="img/double-r.png" alt=""></a>
                                </div>
                                <div class="lk-nav__activ">
                                    <a class="lk-nav__activ-link lk-nav__activ-link-orage" href="">Активные</a><a class="lk-nav__activ-link" href="">Не активные</a>
                                </div>

                            </div>
                            <div class="strong-4__item-cont">
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
                                            <a class="status-cont__link status-cont--status1" href=""><span>V</span>

                                                <div class="status-cont__link--hover">Забрать предмет</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Продать предмет</div>
                                                </div>
                                            </a>
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
                                            <a class="status-cont__link status-cont--status1" href=""><span>V</span>

                                                <div class="status-cont__link--hover">Забрать предмет</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Продать предмет</div>
                                                </div>
                                            </a>
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
                                            <a class="status-cont__link status-cont--status1" href=""><span>V</span>

                                                <div class="status-cont__link--hover">Забрать предмет</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Продать предмет</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <!--predmet-item end-->
                                <!--predmet-item start-->
                                <div class="my-predmet-item lk-item--margin">
                                    <div class="my-predmet-item__img">
                                        <img src="img/item2.png" alt="">
                                    </div>
                                    <div class="line item-image-r2"></div>
                                    <div class="my-predmet-item__text">
                                        Название предмета
                                    </div>
                                    <div class="properties">
                                        <div class="my-predmet-item__price"> 159Р </div>
                                        <div class="status-cont">
                                            <a class="status-cont__link status-cont--status1" href=""><span>V</span>

                                                <div class="status-cont__link--hover">Забрать предмет</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Продать предмет</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <!--predmet-item end-->
                                <!--predmet-item start-->
                                <div class="my-predmet-item lk-item--margin">
                                    <div class="my-predmet-item__img">
                                        <img src="img/item2.png" alt="">
                                    </div>
                                    <div class="line item-image-r4"></div>
                                    <div class="my-predmet-item__text">
                                        Название предмета
                                    </div>
                                    <div class="properties">
                                        <div class="my-predmet-item__price"> 159Р </div>
                                        <div class="status-cont">
                                            <a class="status-cont__link status-cont--status1" href=""><span>V</span>

                                                <div class="status-cont__link--hover">Забрать предмет</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Продать предмет</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <!--predmet-item end-->
                                <!--predmet-item start-->
                                <div class="my-predmet-item lk-item--margin">
                                    <div class="my-predmet-item__img">
                                        <img src="img/item2.png" alt="">
                                    </div>
                                    <div class="line item-image-r3"></div>
                                    <div class="my-predmet-item__text">
                                        Название предмета
                                    </div>
                                    <div class="properties">
                                        <div class="my-predmet-item__price"> 159Р </div>
                                        <div class="status-cont">
                                            <a class="status-cont__link status-cont--status1" href=""><span>V</span>

                                                <div class="status-cont__link--hover">Забрать предмет</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Продать предмет</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <!--predmet-item end-->
                                <!--predmet-item start-->
                                <div class="my-predmet-item lk-item--margin">
                                    <div class="my-predmet-item__img">
                                        <img src="img/item2.png" alt="">
                                    </div>
                                    <div class="line item-image-r5"></div>
                                    <div class="my-predmet-item__text">
                                        Название предмета
                                    </div>
                                    <div class="properties">
                                        <div class="my-predmet-item__price"> 159Р </div>
                                        <div class="status-cont">
                                            <a class="status-cont__link status-cont--status1" href=""><span>V</span>

                                                <div class="status-cont__link--hover">Забрать предмет</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Продать предмет</div>
                                                </div>
                                            </a>
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
                                            <a class="status-cont__link status-cont--status1" href=""><span>V</span>

                                                <div class="status-cont__link--hover">Забрать предмет</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Продать предмет</div>
                                                </div>
                                            </a>
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
                                            <a class="status-cont__link status-cont--status1" href=""><span>V</span>

                                                <div class="status-cont__link--hover">Забрать предмет</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Продать предмет</div>
                                                </div>
                                            </a>
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
</body>

</html>
