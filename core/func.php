<?php

session_start();

$logged = $_SESSION['logged'];
$usrid = $_SESSION['id'];
$usrnm = $_SESSION['user'];

function aft_log(){
	echo '<script>
	function rf_lt(){
		window.location.replace("/");
	}
	setTimeout(rf_lt,1500);
	</script>';
}

?>