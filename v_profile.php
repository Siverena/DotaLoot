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
                    <div>провиль $name</div>

                </div>
                <div class="content content-lk">

                    <div class="lk-column-1">
                        <div class="user-avatar">
                            <img src="img/ava.png" alt="">
                        </div>
                        <div class="lk-column-1-div name">
                            <span>Paradox-ART</span>
                        </div>

                        <div class="lk-column-1-div lk-column-1__quantity"> Открыто кейсов: 1200
                        </div>


                    </div>
                    <div class="lk-column-2">



                        <div class="strong-4">

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

                                                <div class="status-cont__link--hover">Предмет забран</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Предмет продан</div>
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

                                                <div class="status-cont__link--hover">Предмет забран</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Предмет продан</div>
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

                                                <div class="status-cont__link--hover">Предмет забран</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Предмет продан</div>
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

                                                <div class="status-cont__link--hover">Предмет забран</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Предмет продан</div>
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

                                                <div class="status-cont__link--hover">Предмет забран</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Предмет продан</div>
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

                                                <div class="status-cont__link--hover">Предмет забран</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Предмет продан</div>
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

                                                <div class="status-cont__link--hover">Предмет забран</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Предмет продан</div>
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

                                                <div class="status-cont__link--hover">Предмет забран</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Предмет продан</div>
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

                                                <div class="status-cont__link--hover">Предмет забран</div>

                                            </a>
                                            <a class="status-cont__link status-cont--status2" href=""><span>P</span>
                                                <div style="" class="status-cont__link--hover">
                                                    <div>Предмет продан</div>
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
