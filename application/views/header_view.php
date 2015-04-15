<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="content-style-type" content="text/css">
	<meta http-equiv="content-language" content="ru">
	<title>Gurtovenko</title>
	<link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap-responsive.min.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?= base_url('bootstrap/css/datepicker.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?= base_url('bootstrap/css/style.css'); ?>" type="text/css">
	<script type = "text/javascript" src = "<?= base_url('bootstrap/js/jquery-1.10.2.min.js'); ?>"></script>
</head>
<body>
<div class="wrapper">
<div class="container">
<div class="header">
	<div class="row">
		<div class="logo span4"><span>Тестовое задание для </span><img src="http://my_test/uploads/logo_smk.png" alt=""></div>
		<div class="user-menu span2">
		
<?php 
if (isset($name, $familyname, $avatar))
{
	echo '<span>'.$name.' '.$familyname.' <img src="'.$avatar.'" style="max-height:70px; max-width:80px;"></span>';
}
?>
		</div>
	</div>
</div>
