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
                    <li class="nav__item-f">
                        <a class="nav__link" href="free-item.html"><span>Заглушка</span></a>
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
<div class="modal fade balance" id="balance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <!-- modal-body -->
      <div class="popup-recharge_box popup-recharge js-modal-container md-show">
         <div class="md-effect">

            <div class="popup-recharge_top">
               <div class="popup-recharge_info">
                  <div class="popup-recharge_title">Пополнение баланса</div>
                  <div class="popup-recharge_sale">
                     <span>Бонусная пассивка</span>
                     <p>
                     От 1000₽ - бонус +5%, от 3000₽ бонус +10%, от 5000₽ бонус +15%
                     </p>
                  </div>
               </div>
            </div>
            <div class="popup-recharge_bottom">
               <form class="form-recharge">
                  <div class="form-group form-recharge_amount">
                     <label for="amount_recharge">Отдадите</label>
                     <input id="amount_recharge" type="number" name="amount_recharge" placeholder="1000₽" required="" min="1" value="1000">
                  </div>
                  <div class="form-group form-recharge_feedback">
                     <label for="feedback_recharge">Получите</label>
                     <input id="feedback_recharge" type="text" name="feedback_recharge" value="1000" readonly="">
                     <span class="add-count" id="feedback-recharge-bonus">+100р</span>
                  </div>
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
                     <div class="form-group form-group_discount">
                        <label for="discount">Промокод (если есть)</label>
                        <input type="text" id="recharge-promo" name="discount" placeholder="Введите промокод" autocomplete="off">
                     </div>
                     <button class="form-group-btn" type="submit">
                     <span class="text">ПОПОЛНИТЬ БАЛАНС</span>
                     </button>
                  </div>
               </form>
            </div>
            <a href="javascript:" class="popup-recharge__close"><img src="https://dotaloot.pro/img/close.5a251131.png"></a>
            <div class="popup-recharge_warning">В случае ошибки платежа через первый способ оплаты, используйте второй способ или «Ещё»</div>
         </div>
      </div>
      <!-- modal-body end-->
   </div>
</div>
<!--    Modal-4 end-->
<script src="js/main.js"></script>