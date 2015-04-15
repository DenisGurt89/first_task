<div class="form">
<h3>Редактировать профиль</h3>
<br>
<form class="form-horizontal" name="update" action="update" enctype="multipart/form-data" method="POST">
  <div class="control-group">
      <label class="control-label" for="familyname">Фамилия</label>
      <div class="controls">
          <input type="text" id="familyname" name="familyname" placeholder="Фамилия" class="input-large"
                 value="<?= $familyname; ?>" maxlength="50" required
                 data-validation-regex-regex="^[a-zA-Zа-яА-Я]+$"
                 data-validation-regex-message="Фамилия должна содержать только буквы"
                 data-validation-required-message="Обязательно для заполнения" >
          <div class="server-check"><?= form_error('familyname'); ?></div>
      </div>
  </div>

  <div class="control-group">
      <label class="control-label" for="name">Имя</label>
      <div class="controls">
          <input type="text" id="name" name="name" placeholder="Имя" class="input-large"
                 value="<?= $name; ?>" maxlength="50" required
                 data-validation-regex-regex="^[a-zA-Zа-яА-Я]+$"
                 data-validation-regex-message="Имя должно содержать только буквы"
                 data-validation-required-message="Обязательно для заполнения" >
          <div class="server-check"><?= form_error('name'); ?></div>
      </div>
  </div>

  <div class="control-group">
      <label class="control-label" for="username">Логин</label>
      <div class="controls">
          <input type="text" id="username" placeholder="Логин" class="input-large"
                 value="<?= $username; ?>" minlength="6" required readonly
                 data-validation-minlength-message="Минимальная длинна 6 символов"
                 data-validation-regex-regex="^[a-zA-Z]+$"
                 data-validation-regex-message="Логин должен содержать только буквы латинского алфавита"
                 data-validation-required-message="Обязательно для заполнения" >
          <div class="server-check"><?= form_error('username'); ?></div>
      </div>
  </div>

  <div class="control-group">
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
          <input type="email" id="email" name="email" placeholder="E-mail" class="input-large"
                 value="<?= $email; ?>" maxlength="50" required
                 data-validation-validemail-message="Неправильный формат e-mail"
                 data-validator-required-message="Обязательно для заполнения" >
          <div class="server-check"><?= form_error('email'); ?></div>
      </div>
  </div>

  <div class="control-group">
      <label class="control-label" for="birthday">Дата рождения</label>
      <div class="controls">
          <div class="input-append">
              <input class="birthday" name="birthday" type="text" placeholder="Выберите дату" maxlength="10"
                     value="<?= $birthday; ?>" required readonly
                     data-validation-regex-regex="^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])"
                     data-validation-regex-message="Формат даты гггг-мм-дд"
                     data-validation-required-message="Обязательно для заполнения" >
              <span class="add-on"><i class="icon-calendar"></i></span>
              <div class="server-check"><?= form_error('birthday'); ?></div>
          </div>
      </div>
  </div>

  <div class="control-group">
      <label class="control-label" for="phone">Телефон</label>
      <div class="controls">
          <input type="text" id="phone" name="phone" placeholder="***-*******" class="input-large"
                 value="<?= $phone; ?>" maxlength="11" required
                 data-validation-regex-regex="^[0-9]{3}-[0-9]{7}"
                 data-validation-regex-message="Формат номера ***-*******"
                 data-validation-required-message="Обязательно для заполнения" >
          <div class="server-check"><?= form_error('phone'); ?></div>
      </div>
  </div>

  <div class="control-group">
      <label class="control-label" for="file">Выберите фото</label>
      <div class="controls">
          <input type="file" id="file" name="userfile" placeholder="" class="input-large" >
      </div>
  </div>

  <div class="control-group">
      <div class="controls">
          <button class="btn btn-primary">Сохранить</button>
      </div>
  </div>
</form>
</div>
<hr>
<?= anchor('profile/remove', 'Удалить профиль', 'class="btn btn-inverse"'); ?>

<script type = "text/javascript" src = "<?= base_url('bootstrap/js/bootstrap-datepicker.js'); ?>"></script>
<script type = "text/javascript" src = "<?= base_url('bootstrap/js/jqBootstrapValidation.js'); ?>"></script>
<script type = "text/javascript" src = "<?= base_url('bootstrap/js/script.js'); ?>"></script>
