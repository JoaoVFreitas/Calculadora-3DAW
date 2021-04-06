<?php
    include("calculadora.html");

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacao = $_POST['operacao'];

    if(empty($valor1) || empty($valor2) || empty($operacao))
    {
        echo "Preencha os campos vazios!";
    }
    else
    {
        switch($operacao)
        {
            case "somar":
                $resultado = $valor1 + $valor2;
                echo "Resultado: $resultado";
            break;
            case "subtrair":
                $resultado = $valor1 - $valor2;
                echo "Resultado: $resultado";
            break;
            case "dividir":
                $resultado = $valor1 / $valor2;
                echo "Resultado: $resultado";
            break;
            case "multiplicar":
                $resultado = $valor1 * $valor2;
                echo "Resultado: $resultado";
            break;
        }
    }


?>