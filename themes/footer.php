</main></div><footer class="footer _s"><div class="_container _row footer__container"><div class="footer__logo-box"><img class="footer__logo" src="/svg/logo2.svg" alt="Юр-Ком"><div class="footer__logo-text"><h3 class="footer__caption">Юридические услуги</h3><div class="footer__sup">Бухгалтерия. Аутсорсинг. Аудит.</div><div class="footer__copy">ЮР-КОМ &copy;&nbsp;2014-2019 Все права защищены</div></div></div><div class="_row footer__soc"><a class="footer__soc-link _fb" href="https://www.facebook.com/groups/2503882139737560/" title="Facebook"></a><a class="footer__soc-link _vk" href="https://vk.com/urcomkzn" title="Вконтакте"></a><a class="footer__soc-link _in" href="https://www.instagram.com/urcom_kazan" title="Instagram"></a><a class="footer__soc-link _vb" title="Telegram" href="https://tele.gg/Ur_com"></a><a class="footer__soc-link _wa" title="WhatsApp" href="https://wa.me/79872150703"></a></div><div class="_row footer__contacts"><div class="footer__cont-item _i1">Режим работы: ежедневно с 10.00 до 20.00</div><div class="footer__cont-item _i2">421001, Казань, ул. Чистопольская 77</div><div class="footer__cont-item _i4">Бесплатная парковка</div><div class="footer__cont-item _i5"><a class="link _s" href="tel:+78432150703">+7(843)215-07-03,</a>&nbsp;<a class="link _s" href="tel:+79872150703">+7(987)215-07-03</a>
</div><div class="footer__cont-item _i6"><a class="link _s" href="tomail:ur-com.kzn@yandex.ru">ur-com.kzn@yandex.ru</a></div></div><div class="_row footer__pages"><a class="link footer__link _s" href="/">Главная</a><a class="link footer__link _s" href="/yur-licam/">Юридические услуги юр. лицам</a><a class="link footer__link _s" href="/fiz-licam/">Юридические услуги физ. лицам</a><a class="link footer__link _s" href="/buhgalteriya/">ООО и ИП Бухгалтерия</a><a class="link footer__link _s" href="/registraciya/">ООО и ИП Регистрация</a><a class="link footer__link _s" href="/kontakty/">Контакты</a></div></div></footer><input class="modal__checkbox" id="modal-close" type="checkbox"><aside class="modal"><label class="modal__bg" for="modal-close"></label><div class="_row modal__list">
	<div class="feedback__item"><a class="link feedback__link _i1" href="tel:<?php block_field('phone') ?>">Звонок <?php block_field('phone') ?></a></div><div class="feedback__item"><div class="feedback__link _i2" onclick="document.querySelector('.b24-widget-button-openline_livechat').click()" style="cursor:pointer">Онлайн-консультант</div></div><div class="feedback__item"><div class="link feedback__link _i1 b24-web-form-popup-btn-4">Заказать звонок</div></div><div class="feedback__item"><a class="link feedback__link _i4" href="mailto:<?php block_field('email') ?>"><?php block_field('email') ?></a></div>
	</div><label class="modal__close" for="modal-close"></label></aside></div><script>function setSelectionRange(input, selectionStart, selectionEnd) {
    if (input.setSelectionRange) {
        input.focus();
        input.setSelectionRange(selectionStart, selectionEnd);
    } else if (input.createTextRange) {
        var range = input.createTextRange();
        range.collapse(true);
        range.moveEnd('character', selectionEnd);
        range.moveStart('character', selectionStart);
        range.select();
    }
}
function setCaretToPos(input, pos) {
    setSelectionRange(input, pos, pos);
}
function clickPhone(e) {
    let element = e.currentTarget;
    let mask = '+7(___)___-____';
    if (!element.value) {
        element.value = mask;
    }
    setCaretToPos(element, element.value.search("_"));
}
function blurPhone(e) {
    let element = e.currentTarget;
    let numberPhone = element.value.match(/(\d)/g);
    if (numberPhone && numberPhone.length <= 1) {
        element.value = '';
    }
}
function inputPhone(e) {
    let element = e.currentTarget;
    let mask = '+7(___)___-____',
        numberPhone = element.value.match(/(\d)/g);
    if (numberPhone && element.value.length != mask.length) {
        let reg1 = /\)/g,
            reg2 = /\-/g;
        numberPhone.splice(0, 1);
        if (!reg1.test(element.value)) {
            numberPhone.splice(2, 1);
        }
        if (!reg2.test(element.value)) {
            numberPhone.splice(5, 1);
        }
        while (numberPhone.length < 10) {
            numberPhone.push('_');
        }
        numberPhone.splice(10, numberPhone.length);
        numberPhone.splice(6, 0, '-');
        numberPhone.splice(3, 0, ')');
        numberPhone.splice(0, 0, '+7(');
        element.value = numberPhone.join('');
        setCaretToPos(element, element.value.search("_"));
    }
}
let phoneInput = document.querySelectorAll('input[type="tel"]');
for (let i of phoneInput) {
    i.addEventListener("click", clickPhone);
    i.addEventListener("focus", clickPhone);
    i.addEventListener("blur", blurPhone);
    i.addEventListener('input', inputPhone);
}
function priceCheck(e) {
    let element = e.currentTarget.querySelector('.services__show');
    if (e.target.classList.contains('_sh')) {
        element.checked = !element.checked;
    }
}

let price = document.querySelectorAll('.services__price-item._show');
for (let i of price) {
    i.addEventListener("click", priceCheck);
}</script><script type="text/javascript" src="/bundle.js"></script>

<script
  src="/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/culculator.js?v=2"></script>

<!- bitrix ->
<script>
(function(w,d,u){
var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
})(window,document,'http://cdn.bitrix24.ru/b12127054/crm/site_button/loader_2_nx47r4.js');
</script>

<script id="bx24_form_button" data-skip-moving="true">
(function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
(w[b].forms=w[b].forms||[]).push(arguments[0])};
if(w[b]['forms']) return;
var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
})(window,document,'https://ur-com.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

b24form({"id":"4","lang":"ru","sec":"z7hlwf","type":"button","click":""});
</script>

<?php wp_footer(); ?>

</body>
</html>
