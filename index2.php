<?php

function sinOut($start, $end, $stepDegrees = 10, $stepMinutes = 6) {
	$step = $stepDegrees + $stepMinutes/60;
	$output = '<table><tr><th>Градусы</th><th>Результат</th></tr>';

	while ($start < $end) {
		$output .= '<tr><td>sin(' . $start .')</td><td>' . sin($start) . '</td></tr>';
		$start += $step;
	}

	$output .= '</table>';
 
	return $output;
}
?>

<html>
	<head>
		<title>lab4.2</title>
        <meta charset="utf-8">
	</head>
	<body>
	<form>
		<input name="degrees" type="number" placeholder="Градусы"/>
		<input name="minutes" type="number" placeholder="Минуты"/>
		<input type="submit" value="Пересчитать">
	</form>
	<?php
        $stepDegrees = null;
        if ($_GET['degrees'] && is_numeric($_GET['degrees']))
            $stepDegrees = $_GET['degrees'];
        $stepMinutes = null;
        if ($_GET['minutes'] && is_numeric($_GET['minutes']))
            $stepMinutes = $_GET['minutes'];
		echo sinOut(0, 180, $stepDegrees, $stepMinutes);
	?>
	</body>
</html>