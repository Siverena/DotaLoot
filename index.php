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
			<div class="bunner__gift">

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

					<div class="bunner__gift">
						<div>Войти через: <a href="" class="bunner__gift-vk" data-toggle="modal" data-target="#free-bonus" >VK</a> <a href="" class="bunner__gift-steam" data-toggle="modal" data-target="#free-bonus">STEAM</a></div>
					</div>








					<section class="cases">
						<div class="cases__cont cases__role"><div class="razd-name "><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYgAAAAmCAYAAADeIgwMAAAFLUlEQVR4nO2dTZLbNhBGmxQljePUeDfl3CE5Re5/iiySmlUyWaTGlsQsBi19bAIgZSs1UOq9KpZAsNEASLk/4YeebhxHAwCAd+CX7hZernWyOugPVzoGAID34SZqUvEzEw4EAgCgbWrC8K2ikRtFdPEaAgEA0C5RAHKCUMvLCcGYKaN2nZ8jEAAAbVIThzVpPS+tO4xiNxMJBAIAoD2WBCB+xnTOX0kMzKajirMdAgEA0D4lYagJhuICsLSDaXIdgQAAaIva6CEnCLl0ZLRlkZiNMBAIAIA2iYG/Jgo58XBUGNYsWp/tEQgAgPshCkJNPJw4etBDbWYgEAAA7VIThJpQRB+l0UMJppgAAO6QkjD0cl3x0cOp4K8oHAgEAEB75BanS6KwNIrw0UMvaRWL0ktzbHMFAGiI0q4lPV8jFIquOZzEV6xzjOcIBABA+5R2Lak4qEgoKg59+owCkd0C2xsAALRMaXurCkIcQfSFvJjO+T3DCAIAoF2WXoibjiaeHv/Ienl++Rzsx4X0aMYIAgDgnqi9JKe//v9KRyy35r2JM4P9+ukmrc4wm8/6Tttoc43/b6lHF25UXdXulLGPZWJenOuLCt6Z2bFQf5w7tFBG/fU2b4fX6fOQ/ukMUrdf93Lax5PYmuRrPdtkF/dfx3sS2+Vt1z55XboLQ+dSvW29Te9rrMf95p6bljvZdAju5/G74If2Vfupz3mT0huxHTK+3cbb4fV7+Z2ZHYKNp03sh9Qu7aPeoz7Z6DPupEyf/B7NbC/lBrE7iv02+dmm6zvp+wep+yHYD+l8n9KbdFjK8/RG2tSHNu2kP348pPu0T+W97Dbj0++V+/M+uC//ru3F5yjl9uleHO3yfNbNzjw9rjK7mueXn5P/31LOtfGys7RI/V8F2mtfyljyWfrfB7/nb6bG4JDzGwN1LrjEYKCBJQaqpX4cQ5lcm2Ow1vxo6z51tOjt0KCr7dUAebJpn2O7Y2Byu4NN75dej6Lo13QxzfN7M/sq7ddgaWLjYqJipgHX++v/cD3InqTcYNNnpAKo6ZwoeVA9Sp1+7zzQblK9WoeKjd6/r2LvweqY8jsz+2LTOWX3rz8m/L7pcx3E7yGU6ZPfXTo/hHt+tLdgPyY7v49bqeM1nR9SngrOwcz+sUuAd9+PZvZnqjfGJA/+GrS3ZvYS8l18/Bl/SP3/MbXJ+7S1i3i9mtnH1LcvZvYpldmnz4/Sr520fWdTUXa/Lh69+Pwh2TyY2d92ERNLbfQyr3b5bvo98Geq32+v139cKP5sb0bH36QGAHgn5n+TOv7o1B1KeuTznh5/T+V9eultiuj55Se7/AjRo5bHNlcAgDtCR8hjOJS4dhBtx5CfBYEAAGiXKAal9FuQf9utFNcd14hDTJsZAgEA0DolYdANDrqpxMto+jxtFNJ6PZZDIAAA7oAoEpof35COCxs6cjhZfUQxAYEAAGgH3aGY20mpn5pWcagJRO2I9ggEAECD5ITCMucqDH0oF+1Lo4eiUCAQAAD3RWnXUe59JS2zJAgzEAgAgHa55kW1+PKp5scF6VWjCAQCAOB+iGsFXThqU0y8BwEA8D9Bdy45tSmk+F/+xOu1ba3ZHU0IBABAW8QF6tJidbTPjR7UZs3nJI1AAAC0z9JaRG60UfNRE4gzCAQAQHuU3ofIbXnNjTZy/q5Jm7HNFQCgWWLAXzvdZAt2a/JYgwAAaJycSCi1Reklv4vXEAgAgLaJo4LctVvWcwaBAAC4D0piUPsLlNf4mfEvrUgArziD9ogAAAAASUVORK5CYII=" alt=""><p><span class="razd-name-change">Новый год и Diretide</span></p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYgAAAAmCAYAAADeIgwMAAAFc0lEQVR4nO2dzW7jNhSFj+TMFF003QVdtG8w7/8i7RsUKIrsGnQ649ixujAvfHxDUrKRmcjA9wGCaZKXomj5HvNPHqZPuoThotzSdGH+Or+/TTEAALCcu0b8pULQolUOHh8AYOVkgegJw7WiURODoZMGAAArwAUiC0BNEHpxNWc/VWw839CwAwCAdyYEoicOS8L+vuXwJ8uHSAAArJw7zQtAfs3hjDv8mvP3XkUvHwAAvCO1SeqWMPQEwwkBmHP4CAIAwIppzUEMqgtCLZyZNC8StZ4DvQgAgBWR5yAGtYVgaKQ7LgxLJq2X9jYAAOA709oHIb0WhJ54BLn34IfnAQCAlZOHmC49Mr3eQwsEAwBghfR6EFJbGEZLd6L3cGiUhxgAANwItWWuPVGY60VE72G0sItFa9Mc8xAAACvDJ6mvFQrH5xwOVpZSeOq8RygAAFbA3D6Ilji4SDguDmN5zQLByiUAgBtgTO9by1tdEHIPYmzE5XCtXAAAWCm1jXLL9kE83P9dLfHx6ZeUf5oJ05MAAFghuQfh9DbJ+a//f8qR7ZbsmwAAgJUyTJ9eDRGN6ajFjXq4/0uS9Pj0myTp4f7P71z3zF7HHtGzpE05tpJ2JW0o7+/Ka8yR7MsxlbyxTDfsDpJeyjleSvyLTpPwUeZXKyvsnq28rZWVy9xa+KXYb4vtvqRF3b4W+0nSl5I2lHPFNXj+XWmLXUmPtog6baxOg+ULMY82Ophd9Poms9nr/AfHVModLRyfz2BpSnm8dxlzWVHn0fJE+9X23kTeaIMh5fOyo67xvraAImxHtRdguN2hYhftF+kbnT7bjZXry8Rrw7H5OvO1ep54jXP59foPNr92r5es7vHq9cnt6SMCG73+XMJmTLYR7zZ5hCGPOuQ26T2lwT9XLyuff8mIxjWjHtnmrc/zzUZi5vZBXEM4OCe+5OEEpOPNEI4yboyw20v6QSfn+8VstpJ+0tFRStJ/kj7q5OTCJhyd7LzPJc+POjnUUdJnSR+K7Qcde0RR5udSl3DCUe5zif+32Hwp9d7o3InvdO589yn+udQxPuR9ifso6UmnL/XW8t/pJGI7a9+dzm/+OF+0wVDq6aKwt/whrgeLc0cc4hdfuHAaWTxedP75hkOMa76ztBCNO507yajzXidRCEfl4jrq3EF5/cdUpjssFxl3IC5Ift0bO+dg9tnZuAD4/Rf1jnJCuKP9pkr+KDvXP+4JF9BsK72+ZnciYRtHFoHcRvlpCJG/NiqQ2zZs5hyZ31s5bxab/CPF65HDuW1qqyZrdcuCew21ct9ahJbkvUrYQiCy+i6v0MP9H2cpj0+/6nQD+dGLa93ER/hParg9dgvi8w8p5+XKtCXpQd7Q2rOrbX7N+Wvf4VqZHpe/3IdGfCt/La7nMC7ZxLs0rsc1zutbOLyr6tHrQeRunh/Ozw27nL9mCwAAK8UFIotBK3x08sfVSt61qwlDTRz6vQUAAFgFuQfREgafxPLJvbDxcB42ypOaiAMAwA1QG2LKIuHxeYd0nrfwnsNB/R4FAACsGJ+kltrL5Dzs4tATiN6R8+dzAADAOxNLC1vLufKyOF93XVv55CJyqVAAAMCKmNsH0XLceVNMtpkTBAAAWDl5FdNSovfQGmLy8NJeBAAArIi5fRAezs9X6g0xsQ8CAODGyTup3YH3hpCGmfTeslZWNAEA3AC1jXIRruFC0no0R00Qaq+9MAAAvDOtfRA9ar2NXhk9gQAAgJXSWubaegJhfjRujSU9hN5yWgAAWAGtp7kuHW7STL4lcYgDAMAKac1BxHunNyndY+lQFAAArIjaw/qk+vDRWzpzhAEAYOW09kG0HPglfyrUKwcAAFbO/xihfiFazbIGAAAAAElFTkSuQmCC" alt=""></div>


						<a href="/case/34" class="case case-LB">
						<div class="case__cont">
							<div class="case__img-cont">
								<img src="https://dotaloot.pro/img/cases/новогодний io_1607779243311.png" class="case__img">
							</div>
							<div class="case__text">
								<div class="case__text-prise">
									<span class="case__text-new case__text-role">359</span><span class="rotate  case__prise-before">LB</span>
								</div>
								<!---->
								<p class="case__text-name">НОВОГОДНИЙ IO</p>
							</div>
							<div class="case__buy">
								<p class="button-t">Открыть</p>
							</div>
						</div>
						</a>
						<a href="/case/31" class="case case-LB">
						<div class="case__cont">
							<div class="case__img-cont">
								<img src="https://dotaloot.pro/img/cases/cyberpunk 2077_1605593517154.png" class="case__img">
							</div>
							<div class="case__text">
								<div class="case__text-prise">
									<p class="case__text-new case__text-role"> <span>3559</span> </p><p class="rotate  case__prise-before"> <span>LB</span> </p></div>
									<!---->
									<p class="case__text-name">DIRETIDE</p>
								</div>
								<div class="case__buy">
									<p class="button-t">Открыть</p>
								</div>
							</div>
						</a> 
						<a href="/case/33" class="case case-LB"><div class="case__cont"><div class="case__img-cont"><img src="https://dotaloot.pro/img/cases/аркана на windranger _1605593459764.png" class="case__img"></div><div class="case__text"><div class="case__text-prise"><span class="case__text-new case__text-role">135555555555599</span><span class="rotate  case__prise-before">LBgghbfghgfhgfhfgh</span></div><!----><p class="case__text-name">Hallowed Chest</p></div><div class="case__buy"><p class="button-t">Открыть</p></div></div>
						</a>
							

						</div>
	
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
