<?php
function getSinTable()
{
    $html = "";
    for ($degree = 0; $degree <= 360; $degree += 10)
    {
        $html .= '<tr>' ;
        $html .= '<td>' . $degree . '</td>';
        for ($minutes = 0; $minutes <= 60; $minutes += 6)
        {
            $sin = sin($degree + $minutes/60);
            $html .= "<td> {$sin} </td>";
        }
        $html .= '</tr>';
    }
    return $html;
}

function getSinTableHead()
{
    
    $html .= '<tr>';
     $html .= '<th>' . 'Degrees/Minutes' . $Minutes . '</th>';
    for ($Minutes = 0; $Minutes <= 60; $Minutes += 6)
        {
            $html .= "<th> $Minutes </th>";
        }
    $html .= '</tr>';
    return  $html;
}