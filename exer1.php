<?php

    $valor = $_REQUEST['valor'];

    if ($valor < 40000) {
        $preco = $valor + ($valor * 0.05);
        echo "O valor do produto eh R$ $preco";
    } else if ($valor >= 40000 && $valor <= 69999) {
        $preco = $valor + ($valor * 0.10) + ($valor * 0.15);
        echo "O valor do produto eh R$ $preco";
    } else if ($valor > 69999) {
        $preco = $valor + ($valor * 0.15) + ($valor * 0.20);
        echo "O valor do produto eh R$ $preco";
    }

?>