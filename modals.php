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
                <div class="page-name">Модалки</div>

                <button data-toggle="modal"  data-target="#free-item" class="site-btn" style="color: #000000; padding: 11px;">Получить бесплатный предмет</button>
                <button data-toggle="modal"  data-target="#free-bonus-w1" class="site-btn" style="color: #000000; padding: 11px;">free-bonus w-1</button>
                <button data-toggle="modal"  data-target="#free-bonus-w2" class="site-btn" style="color: #000000; padding: 11px;">free-bonus w-2</button>
                <button data-toggle="modal"  data-target="#free-bonus-w3" class="site-btn" style="color: #000000; padding: 11px;">free-bonus w-3</button>
                <button data-toggle="modal"  data-target="#free-bonus-w4" class="site-btn" style="color: #000000; padding: 11px;">free-bonus w-4</button>
                <button data-toggle="modal"  data-target="#another-thing" class="site-btn" style="color: #000000; padding: 11px;">Выбрать другую вещь</button>
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
        </div>





</body>

</html>
