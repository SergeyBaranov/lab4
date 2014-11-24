<?php
function printSinTable()
    {
        $table = "<table>";
        $table = $table . getSinTableHead();
        $table = $table . getSinTable();
        $table = $table . "</table>";
        echo $table;
    }


?>