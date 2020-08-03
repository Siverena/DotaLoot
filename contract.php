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
	$_SESSION['redirecturl'] = "contract.php";
	?>

    <main>
        <?php include_once 'live.php';?>
        <div class="section-2 clearfix-1">
            <div class="container">
                <div class="page-name">
                    <div>Контракт</div>


                </div>


                <div class="start-contract-container">
                    <section class="start">
                        <div class="start__stat-cont">
                            <div class="start__stat-div start__stat-quant">
                                <p class="start__stat-text--white"><span style="color: #f74f22;">0</span>/10</p>
                                <p class="start__stat-text--gray">Кол-во предметов</p>
                            </div>
                            <div class="start__stat-div start__stat-summ">
                                <p class="start__stat-text--white">2 300</p>
                                <p class="start__stat-text--gray">Общая сумма</p>
                            </div>
                            <div class="start__stat-div start__stat-many">
                                <p class="start__stat-text--gray">Вы можете получить</p>
                                <p class="start__stat-text--white">570 - 15 600</p>
                            </div>
                        </div>
                        <div class="contract-button-cont">
                            <a class="start__button button-clear" href="">
                                <p class="start__button-text">Очистить</p>
                            </a>
                            <a class="start__button button-start" href="">
                                <p class="start__button-text">Старт</p>
                            </a>
                        </div>
                    </section>
                    <section class="contract-items">
                        <!--predmet-item start-->

                        <div class="contract-item">

                            <div class="my-predmet-item__img">
                                <img src="img/item.png" alt="">
                            </div>
                            <div class="line item-image-r8"></div>
                            <div class="my-predmet-item__text text-height">
                                Название предмета
                            </div>
                            <div class="properties--contr">
                                <div class="my-predmet-item__price--contr"> 560 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>

                        <!--predmet-item end-->
                        <!--predmet-item start-->

                        <div class="contract-item">

                            <div class="my-predmet-item__img">
                                <img src="img/item.png" alt="">
                            </div>
                            <div class="line item-image-r8"></div>
                            <div class="my-predmet-item__text text-height">
                                Название предмета
                            </div>
                            <div class="properties--contr">
                                <div class="my-predmet-item__price--contr"> 560 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>

                        <!--predmet-item end-->
                        <!--predmet-item start-->

                        <div class="contract-item">

                            <div class="my-predmet-item__img">
                                <img src="img/item.png" alt="">
                            </div>
                            <div class="line item-image-r8"></div>
                            <div class="my-predmet-item__text text-height">
                                Название предмета
                            </div>
                            <div class="properties--contr">
                                <div class="my-predmet-item__price--contr"> 560 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>

                        <!--predmet-item end-->
                        <!--predmet-item start-->

                        <div class="contract-item">

                            <div class="my-predmet-item__img">
                                <img src="img/item.png" alt="">
                            </div>
                            <div class="line item-image-r8"></div>
                            <div class="my-predmet-item__text text-height">
                                Название предмета
                            </div>
                            <div class="properties--contr">
                                <div class="my-predmet-item__price--contr"> 560 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>

                        <!--predmet-item end-->

                        <!--predmet-item start-->

                        <div class="contract-item">

                            <div class="my-predmet-item__img">
                                <img src="img/item.png" alt="">
                            </div>
                            <div class="line item-image-r8"></div>
                            <div class="my-predmet-item__text text-height">
                                Название предмета
                            </div>
                            <div class="properties--contr">
                                <div class="my-predmet-item__price--contr"> 560 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>

                        <!--predmet-item end-->
                        <!--predmet-item start-->
                        <div class="contract-item">

                            <p class="none__nomber">6</p>

                        </div>
                        <div class="contract-item">

                            <p class="none__nomber">7</p>

                        </div>
                        <div class="contract-item">

                            <p class="none__nomber">8</p>

                        </div>


                        <div class="contract-item">

                            <p class="none__nomber">9</p>

                        </div>
                        <div class="contract-item">

                            <p class="none__nomber">10</p>

                        </div>

                        <!--predmet-item end-->



                    </section>
                </div>

                <section class="my-items">

                    <div class="my-items__nav__page">

                        <h3 class="my-items__header">Ваши предметы</h3><a href=""><img style="transform: scale(-1, 1) " src="img/double-r.png" alt=""></a><a style="margin-left: 7px;" href=""><img src="img/double-r.png" alt=""></a>
                    </div>

                    <div class="my-items__cont">



                        <!--predmet-item start-->
                        <div class="my-predmet-item my-items--margin">
                            <div class="my-predmet-item__img">
                                <img src="img/item2.png" alt="">
                            </div>
                            <div class="line item-image-r1"></div>
                            <div class="my-predmet-item__text">
                                Название предмета
                            </div>
                            <div class="properties">
                                <div class="my-predmet-item__price"> 159 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>
                        <!--predmet-item end-->

                        <!--predmet-item start-->
                        <div class="my-predmet-item my-items--margin">
                            <div class="my-predmet-item__img">
                                <img src="img/item2.png" alt="">
                            </div>
                            <div class="line item-image-r1"></div>
                            <div class="my-predmet-item__text">
                                Название предмета
                            </div>
                            <div class="properties">
                                <div class="my-predmet-item__price"> 159 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>
                        <!--predmet-item end-->

                        <!--predmet-item start-->
                        <div class="my-predmet-item my-items--margin">
                            <div class="my-predmet-item__img">
                                <img src="img/item2.png" alt="">
                            </div>
                            <div class="line item-image-r1"></div>
                            <div class="my-predmet-item__text">
                                Название предмета
                            </div>
                            <div class="properties">
                                <div class="my-predmet-item__price"> 159 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>
                        <!--predmet-item end-->

                        <!--predmet-item start-->
                        <div class="my-predmet-item my-items--margin">
                            <div class="my-predmet-item__img">
                                <img src="img/item2.png" alt="">
                            </div>
                            <div class="line item-image-r1"></div>
                            <div class="my-predmet-item__text">
                                Название предмета
                            </div>
                            <div class="properties">
                                <div class="my-predmet-item__price"> 159 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>
                        <!--predmet-item end-->

                        <!--predmet-item start-->
                        <div class="my-predmet-item my-items--margin">
                            <div class="my-predmet-item__img">
                                <img src="img/item2.png" alt="">
                            </div>
                            <div class="line item-image-r1"></div>
                            <div class="my-predmet-item__text">
                                Название предмета
                            </div>
                            <div class="properties">
                                <div class="my-predmet-item__price"> 159 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>
                        <!--predmet-item end-->

                        <!--predmet-item start-->
                        <div class="my-predmet-item my-items--margin">
                            <div class="my-predmet-item__img">
                                <img src="img/item2.png" alt="">
                            </div>
                            <div class="line item-image-r1"></div>
                            <div class="my-predmet-item__text">
                                Название предмета
                            </div>
                            <div class="properties">
                                <div class="my-predmet-item__price"> 159 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>
                        <!--predmet-item end-->

                        <!--predmet-item start-->
                        <div class="my-predmet-item my-items--margin">
                            <div class="my-predmet-item__img">
                                <img src="img/item2.png" alt="">
                            </div>
                            <div class="line item-image-r1"></div>
                            <div class="my-predmet-item__text">
                                Название предмета
                            </div>
                            <div class="properties">
                                <div class="my-predmet-item__price"> 159 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>
                        <!--predmet-item end-->

                        <!--predmet-item start-->
                        <div class="my-predmet-item my-items--margin">
                            <div class="my-predmet-item__img">
                                <img src="img/item2.png" alt="">
                            </div>
                            <div class="line item-image-r1"></div>
                            <div class="my-predmet-item__text">
                                Название предмета
                            </div>
                            <div class="properties">
                                <div class="my-predmet-item__price"> 159 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>
                        <!--predmet-item end-->

                        <!--predmet-item start-->
                        <div class="my-predmet-item my-items--margin">
                            <div class="my-predmet-item__img">
                                <img src="img/item2.png" alt="">
                            </div>
                            <div class="line item-image-r1"></div>
                            <div class="my-predmet-item__text">
                                Название предмета
                            </div>
                            <div class="properties">
                                <div class="my-predmet-item__price"> 159 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>
                        <!--predmet-item end-->

                        <!--predmet-item start-->
                        <div class="my-predmet-item my-items--margin">
                            <div class="my-predmet-item__img">
                                <img src="img/item2.png" alt="">
                            </div>
                            <div class="line item-image-r1"></div>
                            <div class="my-predmet-item__text">
                                Название предмета
                            </div>
                            <div class="properties">
                                <div class="my-predmet-item__price"> 159 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>
                        <!--predmet-item end-->

                        <!--predmet-item start-->
                        <div class="my-predmet-item my-items--margin">
                            <div class="my-predmet-item__img">
                                <img src="img/item2.png" alt="">
                            </div>
                            <div class="line item-image-r1"></div>
                            <div class="my-predmet-item__text">
                                Название предмета
                            </div>
                            <div class="properties">
                                <div class="my-predmet-item__price"> 159 </div>
                            </div>
                            <a class="my-items__add" href="">Добавить в контракт </a>

                        </div>
                        <!--predmet-item end-->

                    </div>

                </section>
                <section class="questions">
                    <h3 class="questions__header">Правила игры</h3>
                    <div class="question">
                        <input type="checkbox" id="hd-1" class="hide" />
                        <label class="question__label" for="hd-1"><span class="label-style">Как играть?</span></label>
                        <div class="answer">
                            <p>При первом заходе на сайт необходимо перейти в раздел Аккаунт, далее вам необходимо указать ссылку для обмена торговыми предложениями. Обязательно проверьте, что у вас
                                открыт инвентарь в Steam и активирован мобильный аутентификатор. Аккаунт, далее вам необходимо указать ссылку для обмена торговыми предложениями. Обязательно проверьте,
                                что у вас открыт инвентарь в Steam и активирован мобильный аутентификатор.</p>
                        </div>
                    </div>
                    <!--Вопрос конец-->
                    <!--Вопрос-->
                    <div class="question">
                        <input type="checkbox" id="hd-2" class="hide" />
                        <label class="question__label" for="hd-2"><span class="label-style">Как играть?</span></label>
                        <div class="answer">
                            <p>При первом заходе на сайт необходимо перейти в раздел Аккаунт, далее вам необходимо указать ссылку для обмена торговыми предложениями. Обязательно проверьте, что у вас
                                открыт инвентарь в Steam и активирован мобильный аутентификатор. Аккаунт, далее вам необходимо указать ссылку для обмена торговыми предложениями. Обязательно проверьте,
                                что у вас открыт инвентарь в Steam и активирован мобильный аутентификатор.</p>
                        </div>
                    </div>
                    <!--Вопрос конец-->
                    <!--Вопрос-->
                    <div class="question">
                        <input type="checkbox" id="hd-3" class="hide" />
                        <label class="question__label" for="hd-3"><span class="label-style label-style--checked">Как играть?</span></label>
                        <div class="answer">
                            <p>При первом заходе на сайт необходимо перейти в раздел Аккаунт, далее вам необходимо указать ссылку для обмена торговыми предложениями. Обязательно проверьте, что у вас
                                открыт инвентарь в Steam и активирован мобильный аутентификатор. Аккаунт, далее вам необходимо указать ссылку для обмена торговыми предложениями. Обязательно проверьте,
                                что у вас открыт инвентарь в Steam и активирован мобильный аутентификатор.</p>
                        </div>
                    </div>
                    <!--Вопрос конец-->
                    <!--Вопрос-->
                    <div class="question">
                        <input type="checkbox" id="hd-4" class="hide" />
                        <label class="question__label" for="hd-4"><span class="label-style">Как играть?</span></label>
                        <div class="answer">
                            <p>При первом заходе на сайт необходимо перейти в раздел Аккаунт, далее вам необходимо указать ссылку для обмена торговыми предложениями. Обязательно проверьте, что у вас
                                открыт инвентарь в Steam и активирован мобильный аутентификатор. Аккаунт, далее вам необходимо указать ссылку для обмена торговыми предложениями. Обязательно проверьте,
                                что у вас открыт инвентарь в Steam и активирован мобильный аутентификатор.</p>
                        </div>
                    </div>
                    <!--Вопрос конец-->




                </section>

            </div>
        </div>
        <?php include_once 'stat.php';?>
    </main>
    <?php include_once 'footer.php';?>
</body>

</html>
