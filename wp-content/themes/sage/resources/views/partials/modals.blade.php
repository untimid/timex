<div class="modal-question-cont modal" id="modalQ">
  <button class="close" type="button" id="modal-question-close">x</button>
  <div class="modal-question" id="modalquestion">
    <h2 class="modal-question-title modal-title">Задать вопрос</h2>
    <form class="modal-question-form modal-form" action="#" method="post" id="modal-question-form">
      <div class="question-cont1">
        <input class="modal-question-field modal-field" id="field-name" type="text" name="name" value="" placeholder="Имя*" required>
        <label class="visually-hidden" for="field-name">Введите ваше имя</label>
        <input class="modal-question-field modal-field" id="field-telephone" type="tel" name="telephone" value="" placeholder="Телефон*" required>
        <label class="visually-hidden" for="field-telephone">Введите ваш телефон</label>
        <input class="modal-question-field modal-field" id="field-email" type="email" name="email" value="" placeholder="E-mail">
        <label class="visually-hidden" for="field-email">Введите вашу электронную почту</label>
      </div>
      <p class="modal-question-subtitle">Интересуют услуги:</p>
      <div class="question-cont3">
        <div class="question-cont2">
          <div class="input-cont">
            <input class="modal-question-chk" type="checkbox" name="modal-question-customs" id="modal-question-customs">
            <label class="modal-question-label" for="modal-question-customs">Таможенное декларирование</label>
          </div>
          <div class="input-cont">
            <input class="modal-question-chk" type="checkbox" name="modal-question-forwarding" id="modal-question-forwarding">
            <label class="modal-question-label" for="modal-question-forwarding">Транспорт и экспедирование</label>
          </div>
          <div class="input-cont">
            <input class="modal-question-chk" type="checkbox" name="modal-question-keeping" id="modal-question-keeping">
            <label class="modal-question-label" for="modal-question-keeping">Хранение грузов</label>
          </div>
          <div class="input-cont">
            <input class="modal-question-chk" type="checkbox" name="modal-question-insurance" id="modal-question-insurance">
            <label class="modal-question-label" for="modal-question-insurance">Страхование грузов</label>
          </div>
          <div class="input-cont">
            <input class="modal-question-chk" type="checkbox" name="modal-question-certification" id="modal-question-certification">
            <label class="modal-question-label" for="modal-question-certification">Сертификация и лицензирование</label>
          </div>
          <div class="input-cont">
            <input class="modal-question-chk" type="checkbox" name="modal-question-сonsulting" id="modal-question-сonsulting">
            <label class="modal-question-label" for="modal-question-сonsulting">Консалтинг</label>
          </div>
        </div>
        <div class="area-cont">
          <textarea class="modal-question-area modal-area" name="modal-question-area" id="modal-question-area" placeholder="Сообщение" form="modal-question-form" rows="6"></textarea>
          <label class="visually-hidden" for="modal-question-area">Напишите ваше сообщение</label>
        </div>
      </div>
      <div class="question-cont4">
      <div class="g-recaptcha" data-sitekey="6LeNhYIUAAAAAPlI1xDOxNCl9hgBwsFAQPX9yHAW"></div>
        <div class="input-cont consent-cont">
          <input class="modal-question-consent" type="checkbox" name="modal-question-consent" id="modal-question-consent" required>
          <label class="modal-question-label" for="modal-question-consent">
            Согласен на <a class="modal-question-label-link" href="confidential.html">Обработку персональных данных</a>
          </label>
        </div>
      </div>
      <input class="modal-question-submit" type="submit" name="submit" value="Отправить">
    </form>
  </div>
</div>


<div class="modal-call-cont modal" id="modalC">
  <button class="close" type="button" id="modal-call-close">x</button>
  <div class="modal-call" id="modalcall">
    <h2 class="modal-call-title modal-title">Заказать звонок</h2>
    <form class="modal-call-form modal-form" action="#" method="post">
      <div class="call-cont1">
        <input class="modal-call-field modal-field" id="field-name-1" type="text" name="name" value="" placeholder="Имя*" required>
        <label class="visually-hidden" for="field-name-1">Введите ваше имя</label>
        <input class="modal-call-field  modal-field" id="field-telephone-1" type="tel" name="telephone" value="" placeholder="Телефон*" required>
        <label class="visually-hidden" for="field-telephone-1">Введите ваш телефон</label>
      </div>
      <textarea class="modal-call-area modal-area" name="modal-call-area" id="modal-call-area" placeholder="Сообщение" form="modal-question-form" rows="4"></textarea>
      <label class="visually-hidden" for="modal-call-area">Напишите ваше сообщение</label>
      <div class="question-cont4">
        <div class="g-recaptcha" data-sitekey="6LeNhYIUAAAAAPlI1xDOxNCl9hgBwsFAQPX9yHAW"></div>

        <div class="consent-cont">
          <input class="modal-call-consent" type="checkbox" name="modal-call-consent" id="modal-call-consent" required>
          <label class="modal-call-label" for="modal-call-consent">
            Согласен на <a class="modal-call-label-link" href="confidential.html">Обработку персональных данных</a>
          </label>
        </div>
      </div>
      <input class="modal-call-submit modal-submit" type="submit" name="submit" value="Отправить">
    </form>
  </div>
</div>
