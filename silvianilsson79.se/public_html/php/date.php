<?php
$d = getdate();
$days = array('sön', 'mån', 'tis', 'ons', 'tors', 'fre', 'lör');
$months = array('jan', 'feb', 'mars', 'april', 'maj', 'juni', 'juli', 'aug', 'sept', 'okt', 'nov', 'dec');
$month=$d[mon] - 1;
$wday=$d[wday];
$mday=$d[mday];
echo "$days[$wday] $d[mday] $months[$month]";

?>
