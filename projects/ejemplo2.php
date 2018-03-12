<?php
    #print_r($_SERVER);
    #dump_r($_SERVER);
    foreach ($_SERVER as $key => $value) {
        echo "$key" : "$value";
        echo "<br/>"
    }
?>