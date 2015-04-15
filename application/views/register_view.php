<div class="form">
<h3>Регистрация</h3>
<br>
<form class="form-horizontal" method="post" action="register_user">
  <div class="control-group">
    <label class="control-label" for="familyname">Фамилия</label>
    <div class="controls">
      <input type="text" id="familyname" placeholder="Фамилия" name="familyname"
      value="<?= set_value('familyname'); ?>" maxlength="50" required
      data-validation-regex-regex="^[a-zA-Zа-яА-Я]+$"
      data-validation-regex-message="Фамилия должна содержать только буквы"
      data-validation-required-message="Обязательно для заполнения" >
      <div class="server-check"><?= form_error('familyname'); ?></div>
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="name">Имя</label>
    <div class="controls">
      <input type="text" id="name" placeholder="Имя" name="name"
      value="<?= set_value('name'); ?>" maxlength="50" required
      data-validation-regex-regex="^[a-zA-Zа-яА-Я]+$"
      data-validation-regex-message="Имя должно содержать только буквы"
      data-validation-required-message="Обязательно для заполнения" >
      <div class="server-check"><?= form_error('name'); ?></div>
    </div>
  </div>

  <div class="control-group">
  <label class="control-label" for="username">Логин</label>
    <div class="controls">
      <input type="text" id="username" placeholder="Логин" name="username"
      value="<?= set_value('username'); ?>" minlength="6" required
      data-validation-minlength-message="Минимальная длина 6 символов"
      data-validation-regex-regex="^[a-zA-Z]+$"
      data-validation-regex-message="Логин должен содержать только буквы латинского алфавита"
      data-validation-required-message="Обязательно для заполнения" >
      <div class="server-check"><?= form_error('username');?></div>
    </div>
  </div>

  <div class="control-group">
  <label class="control-label" for="password">Пароль</label>
    <div class="controls">
      <input type="password" id="password" placeholder="Пароль" name="password"
      minlength="6" maxlength="16" required
      data-validation-minlength-message="Минимальная длина 6 символов"
      data-validation-required-message="Обязательно для заполнения" >
      <div class="server-check"><?= form_error('password'); ?></div>
    </div>
  </div>

  <div class="control-group">
  <label class="control-label" for="password-confirm">Повторите пароль</label>
    <div class="controls">
      <input type="password" id="password-confirm" placeholder="Повторите пароль" name="password-confirm"
      maxlength="16" required
      data-validation-match-match="password"
      data-validation-match-message="Пароли не совпадают"
      data-validation-required-message="Обязательно для заполнения" >
      <div class="server-check"><?= form_error('password-confirm'); ?></div>
    </div>
  </div>

  <div class="control-group">
  <label class="control-label" for="email">E-mail</label>
    <div class="controls">
      <input type="text" id="email" placeholder="E-mail" name="email"
      value="<?= set_value('email'); ?>" maxlength="50" required
      data-validation-validemail-message="Неправильный формат e-mail"
      data-validation-required-message="Обязательно для заполнения" >
      <div class="server-check"><?= form_error('email'); ?></div> 
    </div>
  </div>

  <div class="control-group">
  <label class="control-label" for="birthday">Дата рождения</label>
    <div class="controls">
      <div class="input-append">
        <input type="text" id="birthday" placeholder="Выберите дату" name="birthday" class="birthday"
        value="<?= set_value('birthday'); ?>" maxlength="10" required readonly
        data-validation-regex-regex="^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])"
        data-validation-regex-message="Формат даты гггг-мм-дд"
        data-validation-required-message="Обязательно для заполнения" >
        <span class="add-on"><i class="icon-calendar"></i></span>
        <div class="server-check"><?= form_error('birthday'); ?></div>
      </div>
    </div>
  </div>

  <div class="control-group">
  <label class="control-label" for="phone">Мобильный телефон</label>
    <div class="controls">
      <input type="text" id="phone" placeholder="***-*******" name="phone"
      value="<?= set_value('phone'); ?>" maxlength="11" required
      data-validation-regex-regex="^[0-9]{3}-[0-9]{7}"
      data-validation-regex-message="Формат номера ***-*******"
      data-validation-required-message="Обязательно для заполнения" >
      <div class="server-check"><?= form_error('phone'); ?></div>
    </div>
  </div>

  <div class="control-group">
  <label class="control-label" for="captcha">Введите символы с картинки</label>
    <div class="controls">
      <input type="text" id="captcha" name="captcha">
      <div class="captcha"><?= $captcha['image']; ?></div>
    </div>
  </div>
  
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary" name="submit">Зарегистрироваться</button>
    </div>
  </div>
</form>
</div>

<script type="text/javascript" src="<?= base_url('bootstrap/js/bootstrap-datepicker.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('bootstrap/js/jqBootstrapValidation.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('bootstrap/js/script.js'); ?>"></script>