#!/usr/bin/php
<?php
function ft_is_sort($tab)
{		
	$arrcpy = $tab;
	sort($tab);
	if (array_diff_assoc($tab, $arrcpy) == NULL)
		return true;
	return false;
}
?>
