<footer>
    <div class="container flex-box-row">
        <div class="footer-column-1">
            <a class="logo__footer" href="index.php"><img class="logo logo--f" src="img/logo.png" alt=""></a>
            <a class="sogl" href="v_agree.php">Пользовательское соглашение</a>
            <p class="foo-text">Акции постоянно начинаются и заканчиваются. Но, не переживайте, мы всегда проводим уйму розыгрышей,<br> раздаем бесплатные вещи и Арканы! Просто следите за новостями в нашей группе вконтакте - <br><a href="https://vk.com/dotaloot">https://vk.com/dotaloot</a></p>

            <div class="nav-footer">
                <ul class="nav__menu--f  nav__menu-main-f">
                    <li class="nav__item-f ">
                        <a class="nav__link" href="index.php"><span>Главная</span></a>
                    </li>
                    <li class="nav__item-f">
                        <a class="nav__link" href="top.php"><span>Топ</span> </a>
                    </li>
                    <li class="nav__item-f">
                        <a class="nav__link" href="#"><span>Розыгрыш</span></a>
                    </li>
                </ul>
                <ul class="nav__menu--f nav__menu-dop--f">
                    <li class="nav__item-f">
                        <a class="nav__link flex-box-row" href="contract.php"><span>Контракты</span>
                        </a>
                    </li>
                    <li class="nav__item-f ">
                        <a class="nav__link" href="techis.php"><span>Течис</span></a>
                    </li>
                    <li class="nav__item-f">
                        <a class="nav__link" href="midas.php"><span>Мидас</span></a>
                    </li>
                    <li class="nav__item-f">
                        <a class="nav__link" href="modals.php"><span>Модалки</span></a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="footer-column-2">


            <img src="img/pay.png" alt="">

            <div>
                <script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
                <!-- 				<div class="col-2__block"></div>-->

                <div id="vk_groups"></div>
                <script type="text/javascript">
                    VK.Widgets.Group("vk_groups", {
                        mode: 3,
                        width: "300",
                        color3: 'F4441A'
                    }, 184785421);

                </script>


            </div>
        </div>
    </div>
    <!----------------


Разработка группа в ВК https://vk.com/disignir

Designer Paradox-ART https://vk.com/paradoxartone

Frontend Анна http://web-bik.ru/


---------------->
</footer>


            <!-- Modal-4 -->
            <div class="modal fade" id="Modal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content balance__cont gradient">
                        <!--                <div class="modal-body ">-->

                        <div class="balance__header">пополнение баланса</div>
                        <div class="balance__text">Введите необходимую сумму для пополнения счёта</div>
                        <form method="post" action="" class="form form-1 clearfix">
                            <input type="text" class="balance__input" placeholder="Поле ввода суммы">

                        </form>
                        <div class="balance__text">Есть промокод?</div>
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
                                <label class="balance__payment-system" for="mts">Другие</label>

                            </div>
                            <!-- <div class="balance__payment-system-item">
                                <input value="mega" name="pay" class="balance__payment-input" type="radio" id="mega" class="hide" />
                                <label class="balance__payment-system" for="mega"><img src="img/mega.png" alt=""></label>

                            </div>
                            <div class="balance__payment-system-item">
                                <input value="beeline" name="pay" class="balance__payment-input" type="radio" id="beeline" class="hide" />
                                <label class="balance__payment-system" for="beeline"><img src="img/beeline.png" alt=""></label>

                            </div> -->



                        </div>
                        <!--Вопрос конец-->
                        <div class="balance__buttons">
                        <button type="submit" class="balance-button flex-box-row">
                                <p class="button-t button-t-h">Пополнить</p>
                            </button>
                            <button type="submit" class="balance-button flex-box-row">
                                <p class="button-t button-t-h">Пополнить <br> предметами</p>
                            </button>
                        </div>


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
<script src="js/main.js"></script>