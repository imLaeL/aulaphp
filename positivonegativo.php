<?php

    $numero = $_REQUEST['numero'];

    if ($numero > 0) {
        echo "O número eh positivo";
    }
    else if ($numero < 0) {
        echo "O número eh negativo";
    }
    else {
        echo "O número eh zero";
    }

?>