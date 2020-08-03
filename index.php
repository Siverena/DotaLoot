<?php
include_once('m/auth.php');

?>
<php>

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
		<?php

	include_once 'header.php';
	$_SESSION['redirecturl'] = "index.php";
	
	?>

		<main>

			<?php include_once 'live.php';?>
			<?php if(!isAuth()){?>
			<div class="banner-no-auth">
				<div class="container">
					<div class="row banner-no-auth-row">
						<p class="banner-no-auth-yamm">Самые вкусные кейсы</p>
						<img class="banner-no-auth-welcom" src="img/welcom.png" alt="">
					</div>
					<p class="banner-no-auth-about"> Мы предлагаем лучшие цены <br> самые интересные миниигры <br> абсолютную прозрачность<br> разные способы пополнения</p>
					<div class="but-bonus-regist">
						<img class="but-bonus_razd" src="img/left.png" alt="">
						<a href="">
							<p class="but-bonus-regist-p">Бонус при регистрации</p>
						</a><img class="but-bonus_razd" src="img/right.png" alt="">
					</div>

				</div>
			</div>

			<?php }?>
			<?php if(isAuth()){?>

			<?php include_once 'slider.php';?>

			<?php }?>

			<div class="container">

				<div class="content clearfix-1">


					<?php if(isAuth()){?>



					<section class="banners">
						<style>
							.banners {
								position: relative;
							}

							.raffle {
								width: 250px;
								height: 325px;
								position: absolute;
								top: 0;
							}

							.sund_back {
								background-image: url(img/shadow_back.png), url(img/sund_back.png);
								width: 202px;
								background-repeat: no-repeat;
								background-position: 47px 3px, center top;
								height: 105px;
								margin: 0 auto;
								position: relative;
								z-index: 10;

							}

							.sund_front {
								background-image: url(img/smoke_2.png), url(img/sund_front.png), url(img/smoke_1.png), url(img/hadow_front.png), url(img/strel.png);
								background-repeat: no-repeat;
								background-position: center 86px, center 106px, center -35px, center 91px, center 138px;
								height: 246px;
								position: relative;
								margin: 0 auto;
								width: 250px;
								top: -181px;
								z-index: 30;
							}

							.cont_item {
								z-index: 20;
								margin: 0 auto;
								width: 110px;
								top: -73px;
								position: relative;
								height: 75px;
							}

							.raffle-btn {
								position: absolute;
							}

							.sund_front p {
								color: #fff;
								font-family: Plumb-B;
								font-size: 22px;
								margin: 0 auto;
								display: inline-block;
								width: 250px;
								text-align: center;
								position: relative;
								top: 120px;
								text-shadow: 1px 1px 0px #000000, 0px 0px 16px #55a5e6, 0px 0px 18px #55a5e6;
							}

							.banners {
								padding-top: 52px;
								margin-top: 40px;
							}


							.banners-link {
								z-index: 100;
							}

							.num__p {
								color: #fff;
								font-family: Plumb-B;
								font-size: 19px;
							}

							.num {
								width: 65px;
								height: 25px;
								display: flex;
								align-items: center;
								justify-content: center;
								margin: 0 auto;
								position: relative;
								top: -181px;
							}

							.raffle-btn {
								width: 172px;
								height: 35px;
								background: #0184db;
								border-radius: 5px;
								display: flex;
								justify-content: center;
								align-items: center;
								text-transform: uppercase;
								color: #fff;
								font-family: Plumb-L;
								font-size: 16px;
								margin: 0 auto;
								position: relative;
								top: -161px;
								z-index: 200;
								cursor: pointer;
								background-image: linear-gradient(to top, #bbe9ff, #4bb7ff);
							}

							.raffle-btn p {
								width: calc(100% - 2px);
								height: calc(100% - 2px);
								border-radius: 5px;
								background-color: #15181b;
								display: -webkit-box;
								display: -ms-flexbox;
								display: flex;
								-webkit-box-align: center;
								-ms-flex-align: center;
								align-items: center;
								-webkit-box-pack: center;
								-ms-flex-pack: center;
								justify-content: center;
							}

							.raffle-btn p:hover {
								background: #0184db;
							}

							.raffle-info {
								width: 23px;
								height: 23px;
								position: absolute;
								background: url(img/info.png);
								right: 26px;
								top: -2px;
								z-index: 200;
							}

							.raffle-info:hover {
								background: url(img/info_2.png);
							}


							/* Tooltip text */
							.tooltips .tooltiptext {
								visibility: hidden;
								width: 120px;
								background-color: black;
								color: #fff;
								text-align: center;
								padding: 5px 0;
								border-radius: 6px;

								/* Position the tooltip text - see examples below! */
								position: absolute;
								z-index: 200;
							}

							/* Show the tooltip text when you mouse over the tooltip container */
							.tooltips:hover .tooltiptext {
								visibility: visible;
							}

							.tooltips .tooltiptext {
								top: -1px;
								left: 147%;
							}

							.tooltips .tooltiptext::after {
								content: " ";
								position: absolute;
								top: 50%;
								right: 100%;
								/* To the left of the tooltip */
								margin-top: -5px;
								border-width: 5px;
								border-style: solid;
								border-color: transparent black transparent transparent;
							}

							@media (max-width: 1200px) {
								.banners {
									padding-top: 320px;
								}
							}

							@media (max-width: 425px) {
								.tooltips .tooltiptext {

									width: 220px;
									top: 100%;
									left: 50%;
									margin-left: -220px;
								}


								.tooltips .tooltiptext {
									top: 36px;
									left: 147%;
								}

								.tooltips .tooltiptext::after {
									top: -5px;
									left: 88%;
									border-color: transparent transparent black transparent;

								}

								.raffle-btn {
									z-index: 10;
								}
							}

						</style>
						<div class="raffle">
							<div class="raffle-info tooltips">
								<span class="tooltiptext">Tooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip textTooltip text,Tooltip text</span>
							</div>
							<div class="sund_back"></div>
							<div class="cont_item"><img src="img/item.png" alt=""></div>
							<div class="sund_front">
								<p>РОЗЫГРЫШ</p>
							</div>
							<div class="num">
								<p class="num__p"><span style="color: #0184db;">13</span>\100</p>
							</div>
							<a href="" class="raffle-btn">
								<p>Участвовать</p>
							</a>

						</div>

						<a href="techis.php" class="banners-link">
							<img src="img/teches.png" alt="" class="banners-img banners-img-peace">
							<img src="img/teches2.png" alt="" class="banners-img banners-img-hover">
						</a>

						<a href="contract.php" class="banners-link">
							<img src="img/contract.png" alt="" class="banners-img banners-img banners-img-peace">
							<img src="img/contract3.png" alt="" class="banners-img banners-img-hover">
						</a>

					</section>

					<?php }?>



					<section class="cases">

						<div class="cases__cont  cases__free">
							<div class="razd-name">
								<img src="img/left.png" alt="">
								<p><span class="razd-name-change">Бесплатные </span> <span>Кейсы</span></p><img src="img/right.png" alt="">
							</div>
							<!--БП итем начало-->
							<a class="case case-free" href="open.php">
								<div class="case-free__cont">
									<div class="case-free__img-cont">
										<img class="case-free__img" src="img/free-1.png" alt="">
									</div>
									<div class="case-free__time">
										01:45:31
									</div>
									<div class="case-free__open">
										<div class=" button-t ">Открыть</div>
									</div>
								</div>
							</a>
							<!--БП итем конец-->
							<!--БП итем начало-->
							<a class="case case-free" href="open.php">
								<div class="case-free__cont">
									<div class="case-free__img-cont">
										<img class="case-free__img" src="img/free-2.png" alt="">
									</div>

									<div class="case-free__time">
										01:45:31
									</div>
									<div class="case-free__open">
										<p class="case-free__open-inner button-t ">Открыть</p>
									</div>
								</div>
							</a>
							<!--БП итем конец-->
							<!--БП итем начало-->
							<a class="case case-free" href="open.php">
								<div class="case-free__cont">
									<div class="case-free__img-cont">
										<img class="case-free__img" src="img/free-3.png" alt="">
									</div>
									<div class="case-free__time">01:46:00</div>
									<div class="case-free__open">
										<p class="case-free__open-inner button-t ">Открыть</p>
									</div>
								</div>
							</a>
							<!--БП итем конец-->
						</div>

						<div class="cases__cont cases__simple">
							<div class="razd-name ">
								<img src="img/left.png" alt="">
								<p><span class="razd-name-change">Название </span> <span>Кейсы</span></p><img src="img/right.png" alt="">
							</div>
							<!--simple итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">
									<div class="case__img-cont">
										<img class="case__img" src="img/simple-item/normal.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">hud-Gun of the Keen Machine</p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>
								</div>
							</a>
							<!--simple итем конец-->
							<!--simple итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">

									<div class="case__img-cont">
										<img class="case__img" src="img/simple-item/epic.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">Scythe of Ice</p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>

								</div>
							</a>
							<!--simple итем конец-->
							<!--simple итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">

									<div class="case__img-cont">
										<img class="case__img" src="img/simple-item/rare.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">Scorching Talon</p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>

								</div>
							</a>
							<!--simple итем конец-->
							<!--simple итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">

									<div class="case__img-cont">
										<img class="case__img" src="img/simple-item/heroic.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">Soul Diffuser</p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>
								</div>
							</a>
							<!--simple итем конец-->
							<!--simple итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">

									<div class="case__img-cont">
										<img class="case__img" src="img/simple-item/legendary.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">Soul Diffuser</p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>
								</div>
							</a>
							<!--simple итем конец-->
						</div>
						<div class="cases__cont cases__role">
							<div class="razd-name">
								<img src="img/left.png" alt="">
								<p><span class="razd-name-change">Название </span> <span>Кейсы</span></p><img src="img/right.png" alt="">
							</div>

							<!--role итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">

									<div class="case__img-cont">
										<img class="case__img" src="img/role-item/crystal.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new case__text-role">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">Crystal maiden</p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>
								</div>
							</a>
							<!--role итем конец-->


							<!--role итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">

									<div class="case__img-cont">
										<img class="case__img" src="img/role-item/centaur.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new case__text-role">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">Centaur Warrunner</p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>
								</div>
							</a>
							<!--role итем конец-->

							<!--role итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">

									<div class="case__img-cont">
										<img class="case__img" src="img/role-item/invoker.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new case__text-role">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">Invoker</p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>
								</div>
							</a>
							<!--role итем конец-->

							<!--role итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">

									<div class="case__img-cont">
										<img class="case__img" src="img/role-item/luna.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new case__text-role">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">Luna</p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>
								</div>
							</a>
							<!--role итем конец-->

						</div>

						<div class="cases__cont cases__rarity">
							<div class="razd-name">
								<img src="img/left.png" alt="">
								<p><span class="razd-name-change">Название </span> <span>Кейсы</span></p><img src="img/right.png" alt="">
							</div>

							<!--rarity итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">

									<div class="case__img-cont">
										<img class="case__img" src="img/rarity-item/bonesaw.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new case__text-rarity">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">Inscribed Insatiable Bonesaw </p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>
								</div>
							</a>
							<!--rarity итем конец-->
							<!--rarity итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">

									<div class="case__img-cont">
										<img class="case__img" src="img/rarity-item/arcan.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new case__text-rarity">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">Blades of Voth Domosh</p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>
								</div>
							</a>
							<!--rarity итем конец-->
							<!--rarity итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">

									<div class="case__img-cont">
										<img class="case__img" src="img/rarity-item/immortal.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new case__text-rarity case__text-rarity--immortal">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">Dragonclaw Hook</p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>
								</div>
							</a>
							<!--rarity итем конец-->
							<!--rarity итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">

									<div class="case__img-cont">
										<img class="case__img" src="img/rarity-item/Battlefury.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new case__text-rarity">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">Battlefury</p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>
								</div>
							</a>
							<!--rarity итем конец-->
							<!--rarity итем начало-->
							<a class="case" href="open.php">
								<div class="case__cont">

									<div class="case__img-cont">
										<img class="case__img" src="img/rarity-item/mifical.png" alt="">
									</div>
									<div class="case__text">
										<div class="case__text-prise">

											<span class="case__text-new case__text-rarity">340</span>
											<span class="rotate  case__prise-before">430</span>
										</div>
										<p class="case__text-name">Genuine Perceptions</p>
									</div>
									<div class="case__buy">
										<p class="button-t">Открыть</p>
									</div>
								</div>
							</a>
							<!--rarity итем конец-->

						</div>

					</section>



				</div>
			</div>

			<?php include_once 'stat.php';?>
		</main>
		<?php include_once 'footer.php';?>

		
	</body>

</php>
