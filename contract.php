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
                            <div class="start__stat-div start__stat-LB">
                                <p class="start__stat-text--white">LootBack</p>
                                <p class="start__stat-text--white">+ 3 000</p>
                            </div>
                        </div>
                        <div class="contract-button-cont">
                            <a class="start__button button-clear" href="">
                                <p class="start__button-text">Очистить</p>
                            </a>
                            <a class="start__button button-start" href="" data-toggle="modal" data-target="#contract">
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
                        <label class="question__label" for="hd-1"><span class="label-style">Что такое "контракт"?</span></label>
                        <div class="answer">
                            <p>Контракт — это удобный способ скрафтить новый скин, используя скины, выигранные на сайте.</p>
                        </div>
                    </div>
                    <!--Вопрос конец-->
                    <!--Вопрос-->
                    <div class="question">
                        <input type="checkbox" id="hd-2" class="hide" />
                        <label class="question__label" for="hd-2"><span class="label-style">Сколько вещей нужно иметь в инвентаре чтобы создать контракт?</span></label>
                        <div class="answer">
                            <p>Для того чтобы создать контракт необходимо иметь минимум 3 скина. Самый простой способ получить скины для контракта — открыть несколько понравившихся кейсов</p>
                        </div>
                    </div>
                    <!--Вопрос конец-->
                    <!--Вопрос-->
                    <div class="question">
                        <input type="checkbox" id="hd-3" class="hide" />
                        <label class="question__label" for="hd-3"><span class="label-style label-style--checked">Какой скин я получу при создании контракта?</span></label>
                        <div class="answer">
                            <p>После того как Вы внесли вещи в контракт, Вы увидите диапазон стоимости вещи, которую сможете получить. Чем выше сумма контракта, тем лучше дроп</p>
                        </div>
                    </div>
                    <!--Вопрос конец-->
                    <!--Вопрос-->
                    <div class="question">
                        <input type="checkbox" id="hd-4" class="hide" />
                        <label class="question__label" for="hd-4"><span class="label-style">Могу ли я использовать для контракта скины со своего инвентаря Steam?</span></label>
                        <div class="answer">
                            <p>Нет. Для создания контракта могут быть использованы только скины, полученные на сайте и находящиеся в Вашем инвентаре на сайте.</p>
                        </div>
                    </div>
                    <!--Вопрос конец-->




                </section>
				<!-- Modal-open -->
				<div class="modal fade" id="contract" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content  win__cont">
							<!--                <div class="modal-body ">-->

							<div class="bonus__header">ВАШ ВЫИГЫШ</div>
							<div class="win-item-cont win-item__cont">
								
								<div class="win-item win-item-img" style="background: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcUorA5OA1jVSvSoxNvsW1h4KEtNs6-2FAZy0PLGcHNHtIvhkdXZk_Xwa77SwWoFvsMl3rCRoImi3A3srxU_a2CiddOcJ1I-fxiOrSNeaGjR&quot;) center center no-repeat;"></div>
									<!-- <img class="" src="img/item2.png" alt="" class="win-item"> -->
									<p>Tempest Helm of the Thundergod</p>
								

							</div>
							<div class="win-item-price">
								<p class="win-item-price__header">Цена LB</p>
								<div class="win-item-price__platform"> <span>DotaLoot</span><span>Steam</span>	</div>
								<div class="win-item-price__value"> <span style="color:#e85b01;" >1800 руб</span><span>1500 руб</span>	</div>
							</div>
							<div class="win-battons-modal">
								
							<button class="win-batton-modal win-battons_sell-modal"><span class="button-t">Продать за 118 руб + 354 LB</span></button>
								<button class="win-batton win-battons_more-modal"><span class="button-t">Забрать</span></button>
								<button class="win-batton win-battons_take-modal"><span class="button-t">Еще Контракт </span></button>

							</div>
							<p class="win-text">Ваше решение никак не повлияет на <br>	получение бесплатного предмета. </p>
						</div>
					</div>

				</div>
				<!--    Modal-open end-->
            </div>
        </div>
        <?php include_once 'stat.php';?>
    </main>
    <?php include_once 'footer.php';?>
</body>

</html>
