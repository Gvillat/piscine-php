<?php
    function ft_is_sort($str)
    {
    	$tmp = $str;
    	sort($tmp);
		if (array_diff_assoc($tmp, $str) == true)
			return (false);
		return (true);
	}
?>