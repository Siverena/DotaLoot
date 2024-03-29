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

    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/main.css.map">

</head>

<body>
    <?php include_once 'header.php';
    $_SESSION['redirecturl'] = "midas.php";
    ?>

    <main class="notif-main">
        <?php include_once 'live.php';?>
        <div class="container">

            <div class="content clearfix-1">
                <div class="page-name">Модалки</div>

                <button data-toggle="modal"  data-target="#free-item" class="site-btn" style="color: #000000; padding: 11px;">Получить бесплатный предмет</button>
                <button data-toggle="modal"  data-target="#free-bonus-w1" class="site-btn" style="color: #000000; padding: 11px;">free-bonus w-1</button>
                <button data-toggle="modal"  data-target="#free-bonus-w2" class="site-btn" style="color: #000000; padding: 11px;">free-bonus w-2</button>
                <button data-toggle="modal"  data-target="#free-bonus-w3" class="site-btn" style="color: #000000; padding: 11px;">free-bonus w-3</button>
                <button data-toggle="modal"  data-target="#free-bonus-w4" class="site-btn" style="color: #000000; padding: 11px;">free-bonus w-4</button>
                <button data-toggle="modal"  data-target="#another-thing" class="site-btn" style="color: #000000; padding: 11px;">Выбрать другую вещь</button>
                <button data-toggle="modal"  data-target="#lootback" class="site-btn" style="color: #000000; padding: 11px;">lootback</button>
                <button data-toggle="modal"  data-target="#sunstrike" class="site-btn" style="color: #000000; padding: 11px;">sunstrike</button>
                <button data-toggle="modal"  data-target="#manna" class="site-btn" style="color: #000000; padding: 11px;">manna</button>
                <a href="gift.php">gift.php</a>
                <a href="open-win.php">open-win.php</a>
            </div>
        </div>
        <?php include_once 'stat.php';?>






<!-- notif end -->
    </main>
    <?php include_once 'footer.php';?>



        <!-- free-item -->
        <div class="modal fade" id="free-item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-body modal__free-item">
                    <!-- <div class="modal-body ">-->
                    <div class="modal-window ">
                   <div class="free-item__content">
                   <h2 class="window__header">Не забудь забрать <br> свой бесплатный предмет</h2>
                        <img src="img/free-item.png" alt="" class=" window__image">
                        <div class="window__buttons">
                            <button class="site-btn window__button-take">
                                <p class="button-t">Забрать подарок</p>
                            </button>
                            <button class="site-btn window__button-close">
                            <p class="button-t">Закрыть</p>
                            </button>
                        </div>
                        <p class="window__text"> Вы всегда можете вернуться к этому предложению в вашем личном кабинете</p>
                   </div>
                       
                    </div>
                </div>
            </div>
        </div>
    <!--    free-item end-->


    <!-- free-bonus w-1-->
    <div class="modal fade" id="free-bonus-w1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-free-bonus">
                <!-- <div class="modal-body ">-->
                <div class="free-bonus-window free-bonus-window--1 ">
					


							<div class="free__header">ВАШ ВЫИГЫШ</div>
							<div class="free__item">
								
								<div class="free__image" style="background: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcUorA5OA1jVSvSoxNvsW1h4KEtNs6-2FAZy0PLGcHNHtIvhkdXZk_Xwa77SwWoFvsMl3rCRoImi3A3srxU_a2CiddOcJ1I-fxiOrSNeaGjR&quot;) center center no-repeat;"></div>

								<p class="free__item-name">Tempest Helm of the Thundergod</p>
								<p class="free__item-price">50 РУБ</p>
							</div>

							<div class="free__content ">
								<p class="free__content-type-1">Перед тем как забрать предмет <br> вам нужно указать ссылка на Steam trade и логин Steam </p>
								<p class="free__content-type-2">Это быстро</p>
							</div>
							
							
								
								<button class="site-btn site-btn--orange free__btn"><span class="button-t ">Забрать подарок</span></button>
                </div>

             </div>
        </div>
    </div>
    <!--    free-bonus w1 end-->

    <!-- free-bonus w2-->
    <div class="modal fade" id="free-bonus-w2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-free-bonus">
                <!-- <div class="modal-body ">-->

                <div class="free-bonus-window free-bonus-window--2 ">
					
						<div class="free__header">ВСЕГО НЕСКОЛЬКО КЛИКОВ</div>
						<div class="free__item">
								
								<div class="free__image" style="background: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcUorA5OA1jVSvSoxNvsW1h4KEtNs6-2FAZy0PLGcHNHtIvhkdXZk_Xwa77SwWoFvsMl3rCRoImi3A3srxU_a2CiddOcJ1I-fxiOrSNeaGjR&quot;) center center no-repeat;"></div>

								<p class="free__item-name">Tempest Helm of the Thundergod</p>
								<p class="free__item-price">50 РУБ</p>
							</div>

							<div class="free__content ">
								<p class="free__content-type-4">Введите вашу ссылка на обмен Steam, что бы мы могли выслать вам ваш предмет! </p>

								<p class="free__content-type-3">Узнать вашу ссылку на обмен можно нажав на кнопку <a href="" class="free__link">узнать</a> </p>
								<div class="free__link-change"> 
									<input class="free__input" type="text"> <button class="site-btn site-btn--orange free__link-change-btn"><span class="button-t ">Сохранить</span></button>
								</div>
							</div>
							
							
								
							<button class="site-btn site-btn--orange free__btn"><span class="button-t ">Далее</span></button>
					
                </div>

             </div>
        </div>
    </div>
    <!--    free-bonus w2 end-->

    <!-- free-bonus w3 -->
    <div class="modal fade" id="free-bonus-w3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <!-- <div class="modal-body ">-->
            <div class="free-bonus-window free-bonus-window--3">
                <div class="free-bonus-window__content">
                    <div class="free__header">ПОСЛЕДНИЙ ШАГ</div>
                    <div class="free__item">
                        
                        <div class="free__image" style="background: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcUorA5OA1jVSvSoxNvsW1h4KEtNs6-2FAZy0PLGcHNHtIvhkdXZk_Xwa77SwWoFvsMl3rCRoImi3A3srxU_a2CiddOcJ1I-fxiOrSNeaGjR&quot;) center center no-repeat;"></div>
                        <p class="free__item-name">Tempest Helm of the Thundergod</p>
                        <p class="free__item-price">50 РУБ</p>
                    </div>
                    <div class="free__content ">
                        <p class="free__content-type-1">Уведомления Dota-Loot </p>
                        <p class="free__content-type-1">Получать персональные промокоды, акции и системные уведомления?</p>
                    </div>					
                    <div class="free__buttons">
                        <button class="site-btn site-btn--orange free__btn"><span class="button-t ">Да</span></button>
                        <button class="site-btn site-btn--orange free__btn"><span class="button-t ">Нет</span></button>
                    </div>
                    <div class="free__content ">
                        <p class="free__content-type-3">Ваше решение никак не повлияет на получение бесплатного предмета. </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--    free-bonus w3 end-->


    <!-- free-bonus w4-->
    <div class="modal fade" id="free-bonus-w4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-free-bonus">
                <!-- <div class="modal-body ">-->


            <div class="free-bonus-window free-bonus-window--4">
            <div class="your__free_item">
                <div class="your__header">Твой бесплатный предмет</div>
                <div class="your__item">
            <div class="your__image" style="background: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcUorA5OA1jVSvSoxNvsW1h4KEtNs6-2FAZy0PLGcHNHtIvhkdXZk_Xwa77SwWoFvsMl3rCRoImi3A3srxU_a2CiddOcJ1I-fxiOrSNeaGjR&quot;) center center no-repeat;"></div>
            <div class="your__pay">
                <P class="your__old-cost">1200</P>
                <P class="your__now-cost">500</P>
                <button class="site-btn site-btn--orange your__btn"><p class="button-t">Пополнить</p></button>
            </div>
        </div>
        <div class="your__content">
            <p class="your__benefit">Выгоднее чем при покупке по отдельности на <span style="color:#e55301;padding: 0px 2px;">700</span>  </p>
            <ul class="your__list">
                <li  class="your__point">На баланс 500</li>
                <li class="your__point">Бесплатное открытие   <span style="color:#e55301;padding: 0px 2px;">   кейс 1</span> (150)</li>
                <li class="your__point">Бесплатное открытие   <span style="color:#e55301;padding: 0px 2px;">   кейс 2</span> (200)</li>
                <li class="your__point">Повышенный шанс получить Аркану</li>
            </ul>
        </div>
        </div>
        <div class="our__offer">
        <div class="our__header">Наше предложение</div>
        <div class="our__item">
            <div class="our__image" style="background: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcUorA5OA1jVSvSoxNvsW1h4KEtNs6-2FAZy0PLGcHNHtIvhkdXZk_Xwa77SwWoFvsMl3rCRoImi3A3srxU_a2CiddOcJ1I-fxiOrSNeaGjR&quot;) center center no-repeat;"></div>
            <div class="our__pay">
                <P class="our__old-cost">1200</P>
                <P class="our__now-cost">500</P>
                <button class="site-btn  our__btn"><p class="button-t">Пополнить</p></button>
            </div>
        </div>
        <div class="our__content">
            <p class="our__benefit">Выгоднее чем при покупке по отдельности на <span style="color:#7bec02;padding: 0px 2px;">700</span>  </p>
            <ul class="our__list">
                <li  class="our__point">На баланс 500</li>
                <li class="our__point">Бесплатное открытие    <span style="color:#7bec02;padding: 0px 2px;">   кейс 1</span> (150)</li>
                <li class="our__point">Бесплатное открытие    <span style="color:#7bec02;padding: 0px 2px;">   кейс 2</span> (200)</li>
                <li class="our__point">Повышенный шанс получить Аркану</li>
            </ul>
        </div>
        </div>
					
					

						
                </div>
            </div>
        </div>
    </div>
    <!--    free-bonus w4 end-->


    <!-- another-thing-->
    <div class="modal fade" id="another-thing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-another-thing">
                <div class="modal-body ">

                    <p class="another-thing__header">ВЫБРАТЬ ДРУГУЮ ВЕЩЬ</p>
                    <div class="another-thing__description">
                        <p>Вещь которую вы хотите вывести в данный момент не продается на сторонних площадках.  Мы уже давно не храним свои вещи в инвентарях ботов, т.к. Steam часто банит их, поэтому можем предложить вам несколько вариантов</p>
                    </div>
                    <div class="another-thing__content ">
                        <p>Вы можете получить предложение обмена в Steam и бот передаст скин напрямую в ваш инвентарь Steam. Для этого на вашем аккаунте должна быть возможность совершать обмены, а также вы должны открыть свой инвентарь в настройках приватности Steam.</p>
                        <div class="another-thing__item-cont ">
                           


                            <!--predmet-item start-->
                            <div class="my-predmet-item ">
                                <div class="my-predmet-item__img" style="background: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcU8rA1YXkHfVeHixMfSV1JjIw1SuL6aLwJt3P33dDxW6c74kYLYlK6gYb6HwTsAv8MhjLqRotnzilXk-0dqNmjzdoSQJwBvMlGB_E_-n7kPpm_e3A&quot;) center center no-repeat;"></div>

                                    <div class="my-predmet-item__text" style="border-top: 2px solid rgb(230, 93, 2);">
                                        Название предмета
                                    </div>
                                    <div class="properties">
                                        <div class="my-predmet-item__price"> 159Р </div>

                           
                                    </div>

                                </div>
                                <!--predmet-item end-->
                                <!--predmet-item start-->
                                <div class="my-predmet-item ">
                                <div class="my-predmet-item__img" style="background: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcUivB9aSQPZSumixdvSX2J1NwkYv7eoJBV00v_3cC9Poo7izNeJkaHyYuiIwTMI7Jdw2L6Yrduk0Q2wqRU9Zmz1JoLDcFQ_Yg7Oug_pN4EPgYc&quot;) center center no-repeat;"></div>
                            
                                    <div class="my-predmet-item__text" style="border-top: 2px solid rgb(75, 105, 255);">
                                    Shoulders of the Survivor
                                    </div>
                                    <div class="properties">
                                        <div class="my-predmet-item__price"> 159Р </div>

                 
                                    </div>

                                </div>
                                <!--predmet-item end-->

                                <!--predmet-item start-->
                                <div class="my-predmet-item ">
                                <div class="my-predmet-item__img" style="background: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcUwpg5TWFXvT_Gjw8rBHF98GhBe74WsJgpvwefJfQJV6d2mm47Elf_LJ7KIqWJc5cpjnujNypvwiUS7pV1sNm73ddXBcwE8YljS8gK_kr_nhMO76MybmiZh6SZ37XvcyxG20hoYcKUx0hwV6dJT&quot;) center center no-repeat;"></div>
                                    
                                    <div class="my-predmet-item__text" style="border-top: 2px solid rgb(75, 105, 255);">
                                    Комплект Feast of Abscession
                                    </div>
                                    <div class="properties">
                                        <div class="my-predmet-item__price"> 159Р </div>
      
                                    </div>

                                </div>
                                <!--predmet-item end-->

                                <!--predmet-item start-->
                                <div class="my-predmet-item ">
                                <div class="my-predmet-item__img" style="background: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcU4vBxaSV7eRvG5mMvBUlp7KztEobW3L0kygPDJImwR7ovvzdeNwPLyMb2Ew20BsMd0372Y8dj0jVfi80o_MGynOsbLJYGfipiA&quot;) center center no-repeat;"></div>
                                    
                                    <div class="my-predmet-item__text" style="border-top: 2px solid rgb(75, 105, 255);">
                                        Название предмета
                                    </div>
                                    <div class="properties">
                                        <div class="my-predmet-item__price"> 159Р </div>
           
                                    </div>

                                </div>
                                <!--predmet-item end-->





                        </div>
                    </div>
                    <button class="site-btn site-btn--green another-thing__btn"><span class="button-t ">Заменить</span></button>
        </div>

            </div>
        </div>
    </div>
    <!--    another-thing end-->

    <!-- notif start -->
    <div class="notif">
        <div class="notif__item ">
            <div class="notif__image notif__image--orange">            </div>
            <div class="notif__content">
                <p class="notif__text">Получать персональные промокоды, акции и системные уведомления?</p>
                <div class="notif__button-wrap">
                    <button class=" notif__button ">Отмена </button>
                    <button class=" notif__button notif__button--orange">Получать </button>
                </div>
            </div>
        </div>
        <div class="notif__item notif__item--like">
            <div class="notif__image notif__image--like">            </div>
            <div class="notif__content">
                <p class="notif__text notif__text--like">Нажмите разрешить <br> в верхнем левом углу экрана!</p>
                <div class="notif__button-wrap">
                    <a href="javascript:" class="notif__close"><img src="	https://dotaloot.pro/img/close.5a251131.png"></a>
                </div>
            </div>
        </div>
        <div class="notif__item notif__item--gal">
            <div class="notif__image notif__image--gal">            </div>
            <div class="notif__content notif__content--gal">
                <p class="notif__text notif__text--gal">Успех! <br>
            Активирован промокод: 777 (15%)
            </p>
                <div class="notif__button-wrap">
                    <a href="javascript:" class="notif__close"><img src="	https://dotaloot.pro/img/close.5a251131.png"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- notif end -->


    <!-- lootback-->
    <div class="modal fade" id="lootback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content lootback">
                <div class="lootback__top">    
                    <header class="lootback__head">
                        <p class="lootback__header">Что еще за LOOT BACK?</p>
                        <p class="lootback__description"><span>LOOt BACK</span>  - это дополнительные бонусы которые<br>
                            вы получаете за определенные  <br>
                            действияна сайте, их можно потратить на <br> 
                            особую серию кейсов! </p>
                    </header>
                </div>
                <div class="lootback__bottom">
                    <div class="lootback__section">
                        <p class="lootback__question">Как получить?</p>
                        <div class="lootback__item-wrap">
                            <div class="lootback__item">
                                <div class="lootback__item-head lootback__item--contract">
                                    Создавайте контракты и  получайте LOOT BACK
                                </div>
                            <div class="lootback__button">Создавать контракт</div>
                            </div>
                            <div class="lootback__item">
                                <div class="lootback__item-head lootback__item--inventory">
                                    Продавайте предметы из своего инвентаря
                                </div>
                            <div class="lootback__button lootback__button--green">Инвентарь</div>
                            </div>
                            <div class="lootback__item">
                                <div class="lootback__item-head  lootback__item--promotion">
                                    Покупайте наборы в разделе Акций
                                </div>
                            <div class="lootback__button">Акции</div>
                            </div>
                            </div>
                    </div>
                    <div class="lootback__section">
                        <p class="lootback__question">Как потратить?</p>
                        <div class="lootback__item-wrap">
                            <div class="lootback__item lootback__item--spend lootback__item--wide">

                            </div>
                        <div class="lootback__item lootback__item--spend">
                            <div class="lootback__item-head">
                                Открывайте кейсы за&nbsp;LOOT&nbsp;BACK
                            </div>
                            <div class="lootback__button lootback__button--green">Кейсы</div>
                        </div>
                    </div>
                </div>
                <a href="javascript:" class="lootback__close"><img src="https://dotaloot.pro/img/close.5a251131.png"></a>
            </div>

            </div>
        </div>
    </div>
    <!--    lootback end-->

    <!--    sun strike  -->
    <div class="modal fade" id="sunstrike" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content sunstrike">
                <div class="sunstrike__top">    
                    <header class="sunstrike__head">
                        <h4 class="sunstrike__header">Sun&nbsp;Strike</h4>
                        <p class="sunstrike__old-price">500</p>
                    </header>
                    
                </div>
                <div class="sunstrike__bottom">
                <div class="sunstrike__button">Купить за 300&nbsp;руб.</div>
                            <p class="sunstrike__profit">Выгоднее чем при покупке<wbr>по&nbsp;отдельности на&nbsp;<span class="sunstrike__profits-item--green">500&nbsp;руб.</span></p>
                            <ul class="sunstrike__profits-list">
                                <li class="sunstrike__profits-item"><span class="sunstrike__profits-item--green">500&nbsp;руб.</span> на ваш баланс</li>
                                <li class="sunstrike__profits-item"><span class="sunstrike__profits-item--blue">500&nbsp;манны</span> на ваш баланс</li>
                                <li class="sunstrike__profits-item">Бесплатное открытие: <a href="javascript:" class="sunstrike__case-link">Название&nbsp;кейса</a> <span class="sunstrike__profits-item--green">300&nbsp;руб.</span></li>
                            </ul>
                        <div class="sunstrike__item-wrap">
                            <div class="sunstrike__item sunstrike__item--rub">500</div>
                            <div class="sunstrike__item sunstrike__item--mana">1000</div>
                            <div class="sunstrike__item sunstrike__item--ny">1</div>
                    </div>
                </div>
                <a href="javascript:" class="sunstrike__close"><img src="https://dotaloot.pro/img/close.5a251131.png"></a>
            </div>

            </div>
        </div>
    </div>

    <!--  end  sun strike  -->

    <!-- manna -->
    <div class="modal fade" id="manna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content manna">
                <div class="manna__top">    
                    <header class="manna__head">
                        <p class="manna__header">Что еще за МАННА?</p>
                        <p class="manna__description"><span>МАННА</span> - это дополнительные бонусы, которые вы получаете за определенные действия на сайте, их можно потратить на особую серию кейсов!</p>
                    </header>
                </div>
                <div class="manna__bottom">
                    <div class="manna__section">
                        <p class="manna__question">Как получить?</p>
                        <div class="manna__item-wrap">
                            <div class="manna__item">
                                <div class="manna__item-head manna__item--contract">
                                    Создавайте контракты и  получайте МАННУ
                                </div>
                            <button class="manna__button">Создавать контракт</button>
                            </div>
                            <div class="manna__item">
                                <div class="manna__item-head manna__item--inventory">
                                    Продавайте предметы из своего инвентаря
                                </div>
                            <button class="manna__button manna__button--orange">Инвентарь</button>
                            </div>
                            <div class="manna__item">
                                <div class="manna__item-head  manna__item--promotion">
                                    Покупайте наборы в разделе Акций
                                </div>
                            <button class="manna__button">Акции</button>
                            </div>
                            </div>
                    </div>
                    <div class="manna__section">
                        <p class="manna__question">Как потратить?</p>
                        <div class="manna__item-wrap">
                            <div class="manna__item manna__item--wide">
                                <div class="manna__hero">
                                    <img src="./img/manna/phantom.jpg" alt="phantom" class="manna__hero-icon">
                                    <div class="manna__hero-name">phantom</div>
                                </div>
                                <div class="manna__hero">
                                    <img src="./img/manna/juggernaut.jpg" alt="juggernaut.jpg" class="manna__hero-icon">
                                    <div class="manna__hero-name">juggernaut</div>
                                </div>
                                <div class="manna__hero">
                                    <img src="./img/manna/lion.jpg" alt="lion" class="manna__hero-icon">
                                    <div class="manna__hero-name">lion</div>
                                </div>
                                <div class="manna__hero">
                                    <img src="./img/manna/zeus.jpg" alt="zeus" class="manna__hero-icon">
                                    <div class="manna__hero-name">zeus</div>
                                </div>
                                <div class="manna__hero">
                                    <img src="./img/manna/enigma.jpg" alt="enigma" class="manna__hero-icon">
                                    <div class="manna__hero-name">enigma</div>
                                </div>
                            </div>
                        <div class="manna__item manna__item--spend">
                            <div class="manna__item-head">
                                Открывайте кейсы за&nbsp;<span>МАННУ</span>
                            </div>
                            <button class="manna__button manna__button--orange">Кейсы</button>
                        </div>
                    </div>
                </div>
                <a href="javascript:" class="manna__close"><img src="https://dotaloot.pro/img/close.5a251131.png"></a>
            </div>

            </div>
        </div>
    </div>
    <!-- end manna -->
</body>

</html>
