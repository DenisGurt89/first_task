<?php if(isset($info)): ?>
    <div class="alert alert-success"><?= $info; ?></div>
<?php endif; ?>
<?php if($this->session->flashdata('info')): ?>
    <div class="alert alert-success"><?= $this->session->flashdata('info'); ?></div>
<?php endif; ?>
<?php if(isset($error)): ?>
    <div class="alert alert-error"><?= $error; ?></div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
    <div class="alert alert-error"><?= $this->session->flashdata('error'); ?></div>
<?php endif; ?>
