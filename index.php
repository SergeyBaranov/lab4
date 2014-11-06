<?php

function sinOut($start, $end, $stepDegrees, $stepMinutes) {
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
		<title>lab4.1</title>
        <meta charset="utf-8">
	</head>
	<body>

	<?php
		echo sinOut(0, 180, 10, 6);
	?>
	</body>
</html>