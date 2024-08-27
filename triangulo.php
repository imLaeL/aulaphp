<?php

    $base_maior = $_REQUEST['basemaior'];
    $base_menor = $_REQUEST['basemenor'];
    $altura = $_REQUEST['altura'];

    $area = ($base_maior + $base_menor) * $altura / 2;

    echo "A area do triangulo eh: $area";

?>