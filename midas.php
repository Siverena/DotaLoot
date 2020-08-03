<?php

include_once('m/auth.php');

?>
<html>

<head>
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
    $_SESSION['redirecturl'] = "midas.php";
    ?>

    <main>
        <?php include_once 'live.php';?>
        <div class="container">

            <div class="content clearfix-1">
                <div class="page-name">МИДАС</div>
                <div class="bonuses">





                    <button class="midas-button" type="button" data-toggle="modal" data-target="#Modal-1">

                        <div class="bonuses__bonus">
                            <img src="img/500-1.png" alt="Хомячки сгрызли холст" class="bonuses__img bonuses__img-peace">
                            <img src="img/500-h.png" alt="Хомячки сгрызли холст" class="bonuses__img bonuses__img-hover">
                            <div class="bonuses__text">
                                <p class="bonuses__name bonuses__name-b1">Бонус 1</p>
                                <p class="bonuses__text--contains">Кейс содержит</p>
                                <p class="bonuses__description">Валюта 500
                                    <br>Дополнительное открытие двух кейсов<br>+10 к карме</p>
                            </div>
                        </div>
                        <div class="bonuses__button bonuses__button-b1 ">
                            <p class="bonuses__button-text">Купить</p>
                        </div>
                    </button>

                    <button class="midas-button" type="button" data-toggle="modal" data-target="#Modal-2">


                        <div class="bonuses__bonus">
                            <img src="img/1000-1.png" alt="Еноты стащили картинку" class="bonuses__img bonuses__img-peace">
                            <img src="img/1000-h.png" alt="Еноты стащили картинку" class="bonuses__img bonuses__img-hover">
                            <div class="bonuses__text">
                                <p class="bonuses__name bonuses__name-b2">Бонус 2</p>
                                <p class="bonuses__text--contains">Кейс содержит</p>
                                <p class="bonuses__description">Валюта 1000<br>Дополнительное открытие двух кейсов<br>+10 к карме</p>
                            </div>
                        </div>
                        <div class="bonuses__button bonuses__button-b2 ">
                            <p class="bonuses__button-text">Купить</p>
                        </div>
                    </button>

                    <button class="midas-button" type="button" data-toggle="modal" data-target="#Modal-3">


                        <div class="bonuses__bonus">
                            <img src="img/1500-1.png" alt="Муравьи унесли все карандаши" class="bonuses__img bonuses__img bonuses__img-peace">
                            <img src="img/1500-h.png" alt="Муравьи унесли все карандаши" class="bonuses__img bonuses__img-hover">
                            <div class="bonuses__text">
                                <p class="bonuses__name bonuses__name-b3">Бонус 3</p>
                                <p class="bonuses__text--contains">Кейс содержит</p>
                                <p class="bonuses__description">Валюта 1500<br>Дополнительное открытие двух кейсов<br>+10 к карме</p>
                            </div>



                            <div class="bonuses__button bonuses__button-b3 ">
                                <p class="bonuses__button-text">Купить</p>
                            </div>
                        </div>

                    </button>
                </div>
            </div>
        </div>
        <?php include_once 'stat.php';?>
    </main>
    <?php include_once 'footer.php';?>



    <!-- Modal-1 -->
    <div class="modal fade" id="Modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bonus__cont gradient">
                <!--                <div class="modal-body ">-->

                <div class="bonus__header">Бонус 1</div>
                <div class="bonus-modal__image-cont">
                    <img src="img/500-h.png" class="bonus-modal__img">
                    <div class="bonus__pay">
                        <p class="bonus__price-old">1200</p>
                        <form action="" method="post" class="bonus__pay-form">
                            <input class="bonus__price-new" readonly value="500">
                            <button type="submit" class="bonus-button">
                                <p class="bonus-button__text">пополнить</p>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="bonus__text-cont">
                    <p class="bonus__text bonus__text-first">Выгоднее чем при покупке по отдельности на<span style="color:e55301;"> 700</span></p>
                    <p class="bonus__text bonus__text-ul">На баланс 500</p>
                    <p class="bonus__text bonus__text-ul">Бесплатное открытие<span class="bonus__text-orange"> кейс 1</span>(150)</p>
                    <p class="bonus__text bonus__text-ul">Бесплатное открытие<span class="bonus__text-orange"> кейс 2</span>(200)</p>
                    <p class="bonus__text bonus__text-ul">Повышенный шанс получить Аркану</p>
                </div>

            </div>
        </div>

    </div>
    <!--    Modal-1 end-->








    <!-- Modal-2 -->
    <div class="modal fade" id="Modal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bonus__cont gradient">
                <!--                <div class="modal-body ">-->

                <div class="bonus__header">Бонус 2</div>
                <div class="bonus-modal__image-cont">
                    <img src="img/1000-h.png" class="bonus-modal__img">
                    <div class="bonus__pay">
                        <p class="bonus__price-old">1200</p>
                        <form action="" method="post" class="bonus__pay-form">
                            <input class="bonus__price-new" readonly value="1000">
                            <button type="submit" class="bonus-button">
                                <p class="bonus-button__text">пополнить</p>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="bonus__text-cont">
                    <p class="bonus__text bonus__text-first">Выгоднее чем при покупке по отдельности на<span style="color:e55301;"> 700</span></p>
                    <p class="bonus__text bonus__text-ul">На баланс 1000</p>
                    <p class="bonus__text bonus__text-ul">Бесплатное открытие<span class="bonus__text-orange"> кейс 1</span>(150)</p>
                    <p class="bonus__text bonus__text-ul">Бесплатное открытие<span class="bonus__text-orange"> кейс 2</span>(200)</p>
                    <p class="bonus__text bonus__text-ul">Повышенный шанс получить Аркану</p>
                </div>

            </div>
        </div>

    </div>
    <!--    Modal-2 end-->


    <!-- Modal-3 -->
    <div class="modal fade" id="Modal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bonus__cont gradient">
                <!--                <div class="modal-body ">-->

                <div class="bonus__header">Бонус 3</div>
                <div class="bonus-modal__image-cont">
                    <img src="img/1500-h.png" class="bonus-modal__img">
                    <div class="bonus__pay">
                        <p class="bonus__price-old">1200</p>
                        <form action="" method="post" class="bonus__pay-form">
                            <input class="bonus__price-new" readonly value="1500">
                            <button type="submit" class="bonus-button">
                                <p class="bonus-button__text">пополнить</p>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="bonus__text-cont">
                    <p class="bonus__text bonus__text-first">Выгоднее чем при покупке по отдельности на<span style="color:e55301;"> 700</span></p>
                    <p class="bonus__text bonus__text-ul">На баланс 1500</p>
                    <p class="bonus__text bonus__text-ul">Бесплатное открытие<span class="bonus__text-orange"> кейс 1</span>(150)</p>
                    <p class="bonus__text bonus__text-ul">Бесплатное открытие<span class="bonus__text-orange"> кейс 2</span>(200)</p>
                    <p class="bonus__text bonus__text-ul">Повышенный шанс получить Аркану</p>
                </div>

            </div>
        </div>

    </div>
    <!--    Modal-3 end-->







</body>

</html>
