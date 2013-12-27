<?php
	echo $this->Form->create('User', array('id' => 'login-form'));
	echo $this->Form->input('username', [
		'class'       => 'form-control',
		'placeholder' => 'Username',
		'label'       => false
		]
	);
	echo $this->Form->input('password', [
		'class'       => 'form-control',
		'placeholder' => 'Password',
		'label'       => false
		]
	);
	echo $this->Form->button('Login', ['class' => 'btn btn-lg btn-primary btn-block']);
?>
