<?php
	
	function errorHandler ($message) {
		die(json_encode(array(
			'type'     => 'error',
			'response' => $message
		)));
	}

	function successHandler ($message) {
		die(json_encode(array(
			'type'     => 'success',
			'response' => $message
		)));
	}

	successHandler('Test 1 Complete');
?>