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
    $_SESSION['redirecturl'] = "index.php";?>


    <main>
        <?php include_once 'live.php';?>

        <section class="l-k">
            <div class="container">
                <div class="page-name">
                    <div>профиль $name</div>

                </div>
                <div class="content content-lk">

                <div class="user">
                        <div class="user-avatar">
                            <img class="user__image" src="img/ava.png" alt="">
                        </div>
                        <div class="user__text-block user__text-block--name">
                            <span>Paradox-ART</span>
                        </div>
                        <div class="user__text-block user__text-block--quantity"> Открыто кейсов: 1200
                        </div>
                    </div>



















                    <div class="information information--lk">
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
                                            <button class="status-cont__link status-cont--status1"   href="">
                                                <span>V</span>
                                                <div class="status-cont__link--hover">Предмет забран</div>
                                            </button>
                                            <button class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Предмет продан</div>
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
                                            <button class="status-cont__link status-cont--status1"   href="">
                                                <span>V</span>
                                                <div class="status-cont__link--hover">Предмет забран</div>
                                            </button>
                                            <button class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Предмет продан</div>
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
                                            <button class="status-cont__link status-cont--status1"   href="">
                                                <span>V</span>
                                                <div class="status-cont__link--hover">Предмет забран</div>
                                            </button>
                                            <button class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Предмет продан</div>
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
</body>

</html>
