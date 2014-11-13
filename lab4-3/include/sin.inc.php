<?php
function getSinTable($degreestep = 10, $minutesstep = 6)
{
    $html = "";
    for ($degree = 0; $degree <= 360; $degree += $degreestep)
    {
        $html .= '<tr>' ;
        $html .= '<td class="degree">' . $degree . '</td>';
        for ($Minutes = 0; $Minutes <= 60; $Minutes += $minutesstep)
        {
            $sin = sin($degree + $Minutes/60);
            $html .= "<td> {$sin} </td>";
        }
        $html .= '</tr>';
    }
    return $html;
}

function getSinTableHead($minutesstep = 6)
{   
    $html = '<tr><th>Degrees\Minutes</th>';
    for ($Minutes = 0; $Minutes <= 60; $Minutes += $minutesstep){
            $html .= "<th class=\"degree\">$Minutes</th>";
        }
    $html .= '</tr>';
	
    return  $html;
}

?>