<div class="form">
<h3>Авторизация</h3>
<br>
<form class="form-horizontal" action='log_in' method="POST">
    <div class="control-group">
        <label class="control-label" for="username">Логин</label>
        <div class="controls">
            <input type="text" id="username" name="username" placeholder="Введите логин" class="input-large" required>
            <p class="help-inline"></p>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="password">Пароль</label>
        <div class="controls">
            <input type="password" id="password" name="password" placeholder="Введите пароль" class="input-large" required>
            <p class="help-inline"></p>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <button class="btn btn-primary">Авторизация</button>
        </div>
    </div>
    
    <div class="control-group">
        <div class="controls">
            <?php echo anchor('register/show_register_form', 'Регистрация', 'Регистрация') ?>
        </div>
    </div>
</form>
</div>