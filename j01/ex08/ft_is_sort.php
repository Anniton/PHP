#!/usr/bin/php
<?php
function ft_is_sort($tab)
{		
	$arrcpy = $tab;
	sort($tab);
	if (array_diff_assoc($arrcpy, $tab) == NULL)
		return true;
	return false;
}
?>
