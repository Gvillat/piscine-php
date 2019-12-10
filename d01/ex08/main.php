#!/usr/bin/php
<?php 
	include("ft_is_sort.php");

	$tab = array("!/@#;^", "42", "Hello World", "salut", "zZzZzZz");
	$tb = array("d", "e");
	$tab[] = "Et qu’est-ce qu’on fait maintenant ?";
	if (ft_is_sort($tb))
		echo "Le tableau est trie\n";
	else
		echo "Le tableau n’est pas trie\n";

?>