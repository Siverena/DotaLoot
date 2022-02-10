<?php

include_once('m/auth.php');

?>
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
	<?php include_once 'header.php';?>

	<main>
		<?php include_once 'live.php';?>
        <div class="page-name">
			<div>Акции</div>
		</div>
	
			<section class="promotions">
			<div class="container--promo">
				<div class="doing">
					<div class="doing__wrap">
					<div class="doing__item deal frcase">
							<div class="deal__content frcase">
								<p class="deal__text">Получай бесплатные кейсы за выбранные заклинание!</p>
							</div>
						</div>
						<div class="doing__item deal mana">
							<div class="deal__content mana">
								<p class="deal__text">Копи манну и трать ее на особую серию магических кейсов!</p>
								<button data-toggle="modal"  data-target="#manna" class="deal__btn mana">манна?</button>
							</div>

						</div>
						<div class="doing__item deal promo">
							<div class="deal__content promo">
								<p class="deal__text">Хватай свежие промокоды и участвуй в ежедневных раздачах в нашей группе!</p>
								<a href="https://vk.com/dotaloot" class="deal__btn promo">Промокоды</a>
							</div>

						</div>
						<div class="doing__item call">
							<ul class="call__list">
								<li class="call__item call__item--balance">Пополняй баланс с умом!</li>
								<li class="call__item call__item--profit">Комбинируй уникальные предложения и получай выгоду!</li>
							</ul>

						</div>
					</div>
					<div class="doing__bg hero">
						<img class="hero__img hero__img--red" src="img/combo/sphere_red.png" alt="">
						<img class="hero__img hero__img--blue" src="img/combo/sphere_blue.png" alt="">
						<div class="hero__man"></div>
						<img class="hero__img hero__img--purple" src="img/combo/sphere_purple.png" alt="">
					</div>
				</div>
</div>
				<div class="promotions__wrapper">
					<div class="razd-name promotions__razd-name">
						<img src="img/left.png" alt="">
						<p><span class="razd-name-change">Актуальные </span> <span>комбинации</span></p>
						<img src="img/right.png" alt="">
						
					</div>
					<p class="promotions__header">Комбинации невозможно приобрести за уже имеющийся баланс!</p>
					<div class="container--promo">
					<div class="combinations">
						<article class="combinations__item combo sun" data-toggle="modal"  data-target="#sunstrike">
							<div class="combo__content sun">
								<div class="combo__marker">новое</div>
								<p class="combo__name sun">sun strike</p>
								<p class="combo__price">299 руб</p>
								<div class="combo__profit">
									Выгода 55 руб
								</div>
								<p class="combo__bonus">+5 бонусов</p>
								<p class="combo__balance">Осталось <span>1</span>\5</p>
								<div class="combo__button-wrap">
									<div class="combo__icon sun"></div>
									<button class="combo__button sun" data-toggle="modal"  data-target="#sunstrike">Подробнее</button>
								</div>
							</div>
						</article>
						<article class="combinations__item combo coldsnap" data-toggle="modal"  data-target="#sunstrike">
							<div class="combo__content coldsnap">
								<div class="combo__marker">от блогера</div>
								<p class="combo__name coldsnap">cold snap</p>
								<p class="combo__price">299 руб</p>
								<div class="combo__profit">
									Выгода 55 руб
								</div>
								<p class="combo__bonus">+5 бонусов</p>
								<p class="combo__balance">Осталось <span>2</span>\5</p>
								<div class="combo__button-wrap">
									<div class="combo__icon coldsnap"></div>
									<button class="combo__button coldsnap" data-toggle="modal"  data-target="#sunstrike">Подробнее</button>
								</div>
							</div>
						</article>
						<article class="combinations__item combo emp" data-toggle="modal"  data-target="#sunstrike">
							<div class="combo__content emp">
								<p class="combo__name emp">emp</p>
								<p class="combo__price">799 руб</p>
								<div class="combo__profit">Выгода 55 руб</div>
								<p class="combo__bonus">+5 бонусов</p>
								<p class="combo__balance">Осталось <span>3</span>\5</p>
								<div class="combo__button-wrap">
									<div class="combo__icon emp"></div>
									<button class="combo__button emp" data-toggle="modal"  data-target="#sunstrike">Подробнее</button>
								</div>
							</div>
						</article>
						<article class="combinations__item combo tornado" data-toggle="modal"  data-target="#sunstrike">
							<div class="combo__content tornado">
								<p class="combo__name tornado">tornado</p>
								<p class="combo__price">1499 руб</p>
								<div class="combo__profit">Выгода 55 руб</div>
								<p class="combo__bonus">+5 бонусов</p>
								<p class="combo__balance">Осталось <span>4</span>\5</p>
								<div class="combo__button-wrap">
									<div class="combo__icon tornado"></div>
									<button class="combo__button tornado" data-toggle="modal"  data-target="#sunstrike">Подробнее</button>
								</div>
							</div>
						</article>

						<article class="combinations__item combo chaosmeteor" data-toggle="modal"  data-target="#sunstrike">
							<div class="combo__content chaosmeteor">
								<p class="combo__name chaosmeteor">Chaos Meteor</p>
								<p class="combo__price">2999 руб</p>
								<div class="combo__profit">Выгода 780 руб</div>
								<p class="combo__bonus">+5 бонусов</p>
								<p class="combo__balance">Осталось <span>5</span>\5</p>
								<div class="combo__button-wrap">
									<div class="combo__icon chaosmeteor"></div>
									<button class="combo__button chaosmeteor" data-toggle="modal"  data-target="#sunstrike">Подробнее</button>
								</div>
							</div>
						</article>

					</div>
					<div>
				</div>
			</section>

		<?php include_once 'stat.php';?>
    </main>
	<?php include_once 'footer.php';?>

	<!--    sun strike  -->
	<div class="modal fade" id="sunstrike" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content sunstrike">
				<div class="sunstrike__top">    

					<div class="sunstrike__head">
						<h4 class="sunstrike__header">Sun&nbsp;Strike</h4>
						<p class="sunstrike__old-price">500</p>
					</div>
				</div>
				<div class="sunstrike__bottom">
						<div class="sunstrike__button" data-toggle="modal"  data-target="#promotion-pay">Купить за 300&nbsp;руб.</div>
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








<!-- promotion-pay -->
<div class="modal fade balance promotion-pay" id="promotion-pay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <!-- modal-body -->
      <div class="popup-recharge_box popup-recharge js-modal-container md-show">
         <div class="md-effect">

            <div class="popup-recharge_top">
               <div class="popup-recharge_info">
                  <div class="popup-recharge_title">Оплата выбранной <br> комбинации</div>

               </div>
            </div>
            <div class="popup-recharge_bottom">
               <form class="form-recharge">
                  <div class="form-recharge_methods">

                     <div class="form-recharge_method active">
                        <img src="img/icons/visa.svg">
                        <div class="form-recharge_method__info">
                           1
                        </div>
                      </div>

                     <div class="form-recharge_method">
                       
                        <img src="img/icons/visa.svg">
                        <div class="form-recharge_method__info">
                           2
                        </div>
                     </div>

                     <div class="form-recharge_method">
                      
                        <img src="img/icons/qiwi.svg">
                     </div>

                     <div class="form-recharge_method">
                      
                        <img src="img/icons/webmoney.svg">
                        <div class="form-recharge_method__info">
                           WMZ
                        </div>
                     </div>

                     <div class="form-recharge_method">
                       
                        <img src="img/icons/skinsback.svg">
                        <div class="form-recharge_method__info">
                           скины
                        </div>
                     </div>

                     <div class="form-recharge_method">
                       
                       <img src="img/icons/bitcoin.svg">
                    </div>

                    
                     <div class="form-recharge_method">
                       
                        <img src="img/icons/ethereum.svg">
                     </div>

                     <div class="form-recharge_method">
                       
                       <img src="img/icons/tron.png?v=312">
                    </div>

                     <div class="form-recharge_method">
                        
                        <img src="img/icons/tether.png?v=23">
                     </div>

                     <div class="form-recharge_method">
                       
                        <span class="payment_method__name">Еще</span>
                     </div>
                  </div>
                  <div class="form-recharge_inputs">
                                 <button class="form-group-btn" type="submit">
                     <span class="text">ПОПОЛНИТЬ БАЛАНС</span>
                     </button>
                  </div>
               </form>
            </div>
            <a href="javascript:" class="popup-recharge__close"><img src="https://dotaloot.pro/img/close.5a251131.png"></a>
           
         </div>
      </div>
      <!-- modal-body end-->
   </div>
</div>
<!--    promotion-pay end-->















</body>

</html>