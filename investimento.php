<?php

    $tipo = $_REQUEST['tipo'];
    $valor = $_REQUEST['valor'];


    switch($tipo) {
        case 1 :
            $valor = $valor * 1.03;
            echo "O valor do investimento após 1 mês será de R$ $valor ";
            break;
        
        case 2 :
            $valor = $valor * 1.04;
            echo "O valor do investimento após 1 mês será de R$ $valor ";
            break;
    }

?>