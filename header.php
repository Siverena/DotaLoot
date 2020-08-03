<header class="sticky-top">
    <div class="header__content-cont">
        <div class="container flex-box-row">
            <nav class="navbar navbar-expand-lg ">
                <!--                <a class="navbar-brand" href="#">Navbar</a>-->
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png" alt=""></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse nav nav-header" id="navbarSupportedContent">

                    <!--                   Содержимое меню-->
                    <div class="show-cont">
                        <ul class="nav__menu nav__menu-main">
                            <li class="nav__item ">
                                <a class="nav__link" href="index.php"> <span>Главная</span> </a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="top.php"><span>Топ</span> </a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="#"><span>Розыгрыш</span></a>
                            </li>
                        </ul>
                        <ul class="nav__menu nav__menu-dop">
                            <li class="nav__item">
                                <a class="link-contract nav__link " href="contract.php"><span>Контракты</span><img class="nav_new" src="img/new.png" alt="">
                                </a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="techis.php"><span>Тeчис</span></a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="midas.php"><span>Мидас</span></a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="dota.html"><span>18+</span></a>
                            </li>
                        </ul>


                        <div class="autorization">

                            <?php if(isAuth()){?>


                            <div class="login">

                                <div class="login__text">
                                    <p id="login__name"><a class="login__link" href="lk.php">Paradox-Art</a></p>
                                    <button class="login-button login__link--bal" type="button" data-toggle="modal" data-target="#Modal-4"> 10 000 </button>

                                </div>
                                <a class="login__ava-link" href="lk.php">
                                    <img class="login__ava-img" src="img/ava.png" alt="">
                                </a>
                                <a class="login__exit" href="?logout=1">
                                </a>

                            </div>


                            <?php }else{?>



                            <ul class="nav__menu nav__menu--auth">
                                <li class="nav__item nav__item--auth">Войти через</li>
                                <li class="nav__item nav__item--auth"><a class="nav__link nav__link-vk" href="?auth=true">vk</a></li>
                                <li class="nav__item nav__item--auth"><a class="nav__link nav__link-steam" href="?auth=true">steam</a></li>

                            </ul>



                            <?php }?>

                        </div>


                    </div>
                    <!--                   Содержимое меню конец-->










                </div>
            </nav>










            <!-- Modal-4 -->
            <div class="modal fade" id="Modal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content balance__cont gradient">
                        <!--                <div class="modal-body ">-->

                        <div class="balance__header">пополнение баланса</div>
                        <div class="balance__text">Введите необходимую сумму для пополнения счёта</div>
                        <form method="post" action="" class="form form-1 clearfix">
                            <input type="text" class="balance__input">
                            <button type="submit" class="balance-button flex-box-row">
                                <p class="button-t button-t-h">Пополнить</p>
                            </button>
                        </form>
                        <div class="balance__text">У меня есть промокод!</div>
                        <form method="post" action="" class="form form-2">
                            <input type="text" class="balance__input balance__input-promocode">
                            <button type="submit" class="balance-button flex-box-row">
                                <p class="button-t button-t-h">Активировать</p>
                            </button>
                        </form>
                        <div class="balance__text">
                            Выберите платежную систему
                        </div>


                        <!--Вопрос-->
                        <div class="balance__payment-systems">
                            <div class="balance__payment-system-item">
                                <input value="webmoney" name="pay" class="balance__payment-input" type="radio" id="webmoney" class="hide" />
                                <label class="balance__payment-system" for="webmoney"><img src="img/webmoney.png" alt=""></label>

                            </div>
                            <div class="balance__payment-system-item">
                                <input value="yandex" name="pay" class="balance__payment-input" type="radio" id="yandex" class="hide" />
                                <label class="balance__payment-system" for="yandex"><img src="img/ya.png" alt=""></label>

                            </div>
                            <div class="balance__payment-system-item">
                                <input value="qiwi" name="pay" class="balance__payment-input" type="radio" id="qiwi" class="hide" />
                                <label class="balance__payment-system" for="qiwi"><img src="img/qivi.png" alt=""></label>

                            </div>
                            <div class="balance__payment-system-item">
                                <input value="sber" name="pay" class="balance__payment-input" type="radio" id="sber" class="hide" />
                                <label class="balance__payment-system" for="sber"><img src="img/sber.png" alt=""></label>

                            </div>
                            <div class="balance__payment-system-item">
                                <input value="tele" name="pay" class="balance__payment-input" type="radio" id="tele" class="hide" />
                                <label class="balance__payment-system" for="tele"><img src="img/tele.png" alt=""></label>

                            </div>
                            <div class="balance__payment-system-item">
                                <input value="mts" name="pay" class="balance__payment-input" type="radio" id="mts" class="hide" />
                                <label class="balance__payment-system" for="mts"><img src="img/mts.png" alt=""></label>

                            </div>
                            <div class="balance__payment-system-item">
                                <input value="mega" name="pay" class="balance__payment-input" type="radio" id="mega" class="hide" />
                                <label class="balance__payment-system" for="mega"><img src="img/mega.png" alt=""></label>

                            </div>
                            <div class="balance__payment-system-item">
                                <input value="beeline" name="pay" class="balance__payment-input" type="radio" id="beeline" class="hide" />
                                <label class="balance__payment-system" for="beeline"><img src="img/beeline.png" alt=""></label>

                            </div>



                        </div>
                        <!--Вопрос конец-->


                        <div class="balance__text">Бонусы при пополнении</div>
                        <div class="bonuses-pay">
                            <div class="bonus-pay">
                                <p class="bonus-pay__pay">1000 Р</p>
                                <p class="bonus-pay__gift">подарок<span style="color:f74f22 ;"> 150 </span>Р</p>
                            </div>
                            <div class="bonus-pay">
                                <p class="bonus-pay__pay">3000 Р</p>
                                <p class="bonus-pay__gift">подарок<span style="color:f74f22 ;"> 500 </span>Р</p>
                            </div>
                            <div class="bonus-pay">
                                <p class="bonus-pay__pay">5000 Р</p>
                                <p class="bonus-pay__gift">подарок <span style="color:f74f22 ;">1000 </span>Р</p>
                            </div>
                        </div>

                        <!--           modal-body end-->


                    </div>
                </div>

            </div>
            <!--    Modal-4 end-->


        </div>




<!----------------


Разработка группа в ВК https://vk.com/disignir

Designer Paradox-ART https://vk.com/paradoxartone

Frontend Анна http://web-bik.ru/


---------------->


    </div>

</header>

<script src="js/header.js">
</script>
