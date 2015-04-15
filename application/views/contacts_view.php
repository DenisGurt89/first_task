<div class="contacts form">
	<h3>Напишите нам!</h3>
	<br>
	<form class="form-horizontal" method="post" action="contacts/send">

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
			<label class="control-label" for="subject">Тема сообщения</label>
			<div class="controls">
				<input type="text" id="subject" placeholder="Тема" name="subject"
    			value="<?= set_value('subject'); ?>" maxlength="50" required
    			data-validation-required-message="Обязательно для заполнения" >
    			<div class="server-check"><?= form_error('subject'); ?></div>
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
			<label class="control-label" for="text">Текст сообщения</label>
			<div class="controls">
				<textarea rows="5" name="text" id="text"></textarea>
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
				<input type="submit" name="ok" value="Отправить" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>

<script type="text/javascript" src="<?= base_url('bootstrap/js/bootstrap-datepicker.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('bootstrap/js/jqBootstrapValidation.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('bootstrap/js/script.js'); ?>"></script>