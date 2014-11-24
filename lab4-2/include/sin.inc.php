<?php

function printSinTable()
    {
        $degreestep = isset($_GET['degree']) ? $_GET['degree'] : 10;
        $minutesstep = isset($_GET['Minutes']) ? $_GET['Minutes'] : 10;
        $table = "<table>";
        $table .= getSinTableHead($minutesstep);
        $table .= getSinTable($degreestep, $minutesstep);
        $table .= "</table>";
        echo $table;
    }
