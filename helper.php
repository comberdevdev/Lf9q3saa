<?php
	function setSession($name, $value) {
		$_SESSION[$name] = $value;
	}

	function unsetSession($name) {
		unset($_SESSION[$name]);
	}
?>