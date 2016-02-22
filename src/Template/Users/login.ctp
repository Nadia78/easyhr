<?php $this->layout = 'layoutAccueil'; ?>
<h1>Login</h1>
<?= $this->Form->create('User', array()); ?>
<!-- insérer les name et id -->
<?= $this->Form->input('email'); ?>
<?= $this->Form->input('password'); ?>
<?= $this->Form->button('Login'); ?>
<?= $this->Form->end(); ?>