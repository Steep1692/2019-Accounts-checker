<div id='menu'>
    <details><summary>Поля ввода?</summary>
    "с" - строка в вашем документе, с которой начнеться считывание данных(пример - "100").</br>
    "до" - строка в вашем документе, на которой закончиться считывание данных(пример - "150").</br>
    "таргет" - ссылка на личный кабинет без капчи by alexdnepro(пример - "https://shop.pw-steep.com").</br>
  </details>
    <details><summary>Загрузка своей базы?</summary>
      Файл должен иметь расширение текстового документа,
      а его данные вида:</br>login:password</br>login2:password2</br>и так далее...</details>
      <details><summary>О загрузке(важно)</summary>
        Максимальное число аккаунтов в базе для стабильной работы<100.</br>
        Для загрузки аккаунтов, которые, к примеру, находятся
        на 50+ строке в вашем документе,</br>
        нужно указать в поле ввода "от" значение "50",
      а в поле "до", например, - "100".</br>
      Результатом будет запись в БД
      50 аккаунтов, начиная со строки "50" вашего документа.</details>
        <details><summary>Как чекать?</summary>
          1.Загрузить аккаунты в БД.</br>
        2.Нажать кнопку "Загрузить аккаунты".</br>
      3.Нажать кнопку "Начать проверку".</details>
      <details><summary>Обрисовка процесса чека?</summary>
        На сайт ЛК по-очереди отправляються логин и пароль с базы.</br>
      Если ответ сайта содержит > 5500 символов,</br>
      аккаунт - верный.</details>
</div>
