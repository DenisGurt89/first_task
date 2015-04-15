<h3>Профиль</h3>
<div class="profile">
	<div class="row">
<?php if (!empty($avatar)): ?>
		<div class="span3"><img src="<?= base_url().'uploads/'.$avatar; ?>" alt="Avatar"></div>
<?php else: ?>
		<div class="span3"><img src="<?= base_url().'uploads/avatar.png'; ?>"></div>
<?php endif; ?>
		<div class="offset1 span5"><span class="profile_name"><?= $name.' '.$familyname; ?></span>
			<hr/>
			<div class="row">
				<div class="span5">Дата рождения: <?= $birthday; ?></div>
				<br/>
				<div class="span5"><h5>Контакты:</h5></div>
				<div class="span5"><i class="phone_icon"></i> <?= $phone; ?></div>
				<div class="span5"><i class="icon-envelope"></i> <?= $email ?></div>
			</div>
		</div>
	</div>
	<div class="edit_link">
<?= anchor('profile/show_edit_profile', 'Редактировать профиль', 'Редактировать профиль'); ?>
	</div>
</div>