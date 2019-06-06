<?php
if (isset($_POST['data'])) {
	$data = $_POST['data'];
	$data = explode('_0.0_', $data);

	echo 'The data has been added in database successfully.';
}
?>