<?php
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

	echo "<pre>";
	var_dump($dados);
	echo "<pre>";

	die;