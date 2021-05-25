 <header class="sticky-top">
    <div class="header__content-cont">
        <div class="container flex-box-row">
            <nav class="navbar navbar-expand-lg ">
                <!--                <a class="navbar-brand" href="#">Navbar</a>-->
                <div class="logo">
                    <a href="index.php"><img src="img/logo_2020.png" alt=""></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse nav nav-header" id="navbarSupportedContent">

                    <!--                   Содержимое меню-->
                    <div class="show-cont">
                    <ul class="nav__menu nav__menu-main">
                            <li class="nav__item">
                                <a class="nav__link" href="midas.php"><span>Мидас</span></a>
                            </li>
                            <li class="nav__item ">
                                <a class="nav__link" href="index.php"> <span>Кейсы</span> </a>
                            </li>
                            <li class="nav__item">
                                <a class="link-contract nav__link " href="contract.php"><span>Контракты</span><img class="nav_new" src="img/new.png" alt="">
                                </a>
                            </li>

                            <!-- <li class="nav__item">
                                <a class="nav__link" href="top.php"><span>Топ</span> </a>
                            </li> -->
                        </ul>
                        <ul class="nav__menu nav__menu-dop">
                        <li class="nav__item">
                                <a class="nav__link" href="techis.php"><span>TECHIES</span></a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="dota.html"><span>Группа VK</span></a>
                            </li>
                        </ul>

                        <div class="autorization">

                            <?php if(isAuth()){?>


                            <div class="login">

                                <div class="login__text">
                                    <div class="login__string-wrap login__string-wrap--first">
                                        <p id="login__name"><a class="login__link" href="lk.php">Paradox-Art</a></p>
                                        <a class="login__btn login__btn--exit" href="?logout=1"></a>
                                    </div>
                                    <div class="login__string-wrap">
                                    <button class="login-button login__link--bal" type="button" data-toggle="modal" data-target="#Modal-4"> 10 000 РУБ</button>  
                                    <button type="button" class="login__btn login__btn--to-up" data-toggle="modal" data-target="#Modal-4">+</button>
                                        <!-- <button class="login__btn login__btn--LB" type="button"> LB </button> -->
                                        <p class="login__link--bal-lb">8 000 LB</p>
                                        <button class="login__btn login__btn--question" type="button"> ? 

                                        <p class="login__btn--question__drop-text">При пополнении баланса, продаже предметов и создании контрактов ты получаешь LootBack бонусы! За них можно открывать дополнительные уникальные кейсы с топовыми предметами!</p>
                                        </button>
                                    </div>
                                </div>
                                <a class="login__ava-link" href="lk.php">
                                    <img class="login__ava-img" src="img/ava.png" alt="">
                                </a>
                                <div class="login__buttons">
                                    <a href="lk.php" class="site-btn site-btn--orange login__btn--prof"><p class="button-t">Мой профиль</p></a>


                                    <button class="site-btn site-btn--green login__btn--to-up-second" type="button" data-toggle="modal" data-target="#Modal-4"><p class="button-t">Пополнить баланс </p> </button>
                                </div>
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
