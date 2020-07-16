<?php
$date1 = new DateTime();
echo '<p>'.$date1->format('Y-m-d H:i:s').'</p>';

$date2 = new DateTime('2020-06-22 9:00:00');
echo '<p>'.$date2->format('Y-m-d H:i:s').'</p>';

$interval = $date2->diff($date1);
echo $interval->format('%R%a days');

$interval = $date2->diff($date1);
echo '<p>'.$interval->format('  %a days');
echo $interval->format('  %H hours');
echo $interval->format('  %i minutes').'</p>';
?>