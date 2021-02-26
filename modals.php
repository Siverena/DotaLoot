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
                <a href="gift.php">gift.php</a>
            </div>
        </div>
        <?php include_once 'stat.php';?>
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
            <div class="modal-free-bonus">
                <!-- <div class="modal-body ">-->
  

                <div class="free-bonus-window free-bonus-window--3">
					
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
				
						<div class="free__header">Забери свой бесплатный предмет и получи бонусы!</div>
						
						<div class="free__item">
							<div class="free__item-cont">
								<div class="free__image" style="background: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcUorA5OA1jVSvSoxNvsW1h4KEtNs6-2FAZy0PLGcHNHtIvhkdXZk_Xwa77SwWoFvsMl3rCRoImi3A3srxU_a2CiddOcJ1I-fxiOrSNeaGjR&quot;) center center no-repeat;"></div>

								<p class="free__item-name">Tempest Helm of the Thundergod</p>
								<p class="free__item-price">50 РУБ</p>
							</div>
							<p class="free__plus">+</p>
							<div class="free__item-cont">
								<div class="free__image" style="background: url(&quot;img/500p.png&quot;) center center no-repeat;"></div>

								<p class="free__item-name">на баланс рубли</p>
	
							</div>
							<p class="free__plus">+</p>
							<div class="free__item-cont">
								<div class="free__image" style="background: url(&quot;img/500lb.png&quot;) center center no-repeat"></div>

								<p class="free__item-name">на баланс LootBack</p>

							</div>
							<button class="site-btn site-btn--orange free__btn"><span class="button-t ">Получить <br>за 100 рублей</span></button>
						</div>
							
						
						
						<div class="free__item">
						<div class="free__header">ИЛИ</div>
							<div class="free__item-cont">
								<div class="free__image" style="background: url(&quot;https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcUorA5OA1jVSvSoxNvsW1h4KEtNs6-2FAZy0PLGcHNHtIvhkdXZk_Xwa77SwWoFvsMl3rCRoImi3A3srxU_a2CiddOcJ1I-fxiOrSNeaGjR&quot;) center center no-repeat;"></div>

								<p class="free__item-name">Tempest Helm of the Thundergod</p>
								<p class="free__item-price">50 РУБ</p>
							</div>
							<p class="free__plus">+</p>
							<div class="free__item-cont">
							<div class="free__image" style="background: url(&quot;img/500p.png&quot;) center center no-repeat;"></div>

							<p class="free__item-name">на баланс рубли</p>
							</div>
							<p class="free__plus">+</p>
							<div class="free__item-cont">
							<div class="free__image" style="background: url(&quot;img/500lb.png&quot;) center center no-repeat"></div>

								<p class="free__item-name">на баланс LootBack</p>
							</div>
							<p class="free__plus">+</p>
							<div class="free__item-cont">
								<div class="free__image free__image-last" style="background: url(&quot;img/Windranger.png&quot;) center center no-repeat;"></div>

							</div>
							<button class="site-btn site-btn--orange free__btn"><span class="button-t ">Получить <br> за 100 рублей</span></button>
						</div>
						<div class="free__content ">
						<p class="free__content-type-1">ВАША ВЫГОДА СОСТОВЛЯЕТ БОЛЕЕ 200%</p>
							<p class="free__content-type-3">Отлично, ты получил свой бесплатный предмет! Его стоимость и другие бонусы будут <br> зачислены на баланс, а вещь станет доступной для вывода в Steam сразу после пополнения. </p>
							<p class="free__content-type-4"> А еще мы немного увеличим твои шансы получить аркану и другие дорогие предметы!)  </p>
						</div>

						
                </div>
             </div>
        </div>
    </div>
    <!--    free-bonus w4 end-->










</body>

</html>
