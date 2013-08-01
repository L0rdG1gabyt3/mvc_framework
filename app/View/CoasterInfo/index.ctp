<h2>Coaster Information</h2>

<?php

    foreach ($rollercoasters as $num => $rollercoaster){
        $c_id = $rollercoaster['Rollercoaster']['coasterId'];
        echo "</br><h3><a href='CoasterInfo'>{$rollercoaster['Rollercoaster']['coasterName']}</a></h2>";

    }
?>