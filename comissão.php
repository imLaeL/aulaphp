<?php

    $vendas = $_REQUEST['vendas'];
    $salario = $_REQUEST['salario'];

    $comissao = $vendas * 0.04;
    $salario_total = $salario + $comissao;

    echo "O valor de comissão eh: $comissao e o salario total eh: $salario_total";

?>