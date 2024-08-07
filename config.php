<?php
	$autoload = function($class){
		if($class == 'Email'){
			include('classes/phpmailer');
		}
			include('classe/'.$class.'.php');
	};

	spl_autoload_register($autoload);



	define('INCLUDE_PATH','http://localhost/projeto-site/');

?>