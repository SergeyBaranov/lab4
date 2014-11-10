<?php
    /*require_once("include/request.inc.php");
    require_once("include/sin.inc.php");
    include("template/head.html");
    //TODO: реализовать формирование таблицы
    include("template/foot.html");*/

function printsinTable()
    {
        $table = "<table>";
        $table = $table . getsinTableHead();
        $table = $table . getSinTable();
        $table = $table . "</table>";
        echo $table;
    }

function getsinTableHead()
{
    $html = "<tr>";
    $html .= "<th> Degree/Minutes</th>";
    $html .= "<th>0</th>";
    $html .= "<th>6</th>";
    $html .= "<th>12</th>";
    $html .= "<th>18</th>";
    $html .= "<th>24</th>";
    $html .= "<th>30</th>";
    $html .= "<th>36</th>";
    $html .= "<th>42</th>";
    $html .= "<th>48</th>";
    $html .= "<th>54</th>";
    $html .= "<th>60</th>";
    $html .= "</tr>";
    return $html;
}

function getSinTable()
{
    $html = "";
    for ($degree = 0; $degree <=360; $degree +=10)
    {
        $html .= '<tr>';
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

?>