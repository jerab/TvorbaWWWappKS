<?php
function automaticky_nacitac_trid($class) {
	if(is_file($class . '.php')) {
		require_once $class . '.php';
	}else {
		trigger_error("Soubor s třídou $class neexistuje!", E_USER_WARNING);
		//die();
	}
}

spl_autoload_register('automaticky_nacitac_trid');