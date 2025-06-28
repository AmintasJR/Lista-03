<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $numero1 = str_replace(',', '.', $_POST['numero1']); 
            $numero2 = str_replace(',', '.', $_POST['numero2']);
            $operacao = $_POST['operacao'];

            $resultado = null;

            if (is_numeric($numero1) && is_numeric($numero2));
            {
                switch ($operacao) 
                {
                    case "+":
                        $resultado = "Resultado: " . ($numero1 + $numero2);
                        break;
                    case "-":
                        $resultado = "Resultado: " . ($numero1 - $numero2);
                        break;
                    case "*":
                        $resultado = "Resultado: " . ($numero1 * $numero2);
                        break;
                    case "/":
                        $resultado = "Resultado: " . ($numero1 / $numero2);
                        break;
                    default:
                        $resultado = null;
                    }
            }
        }
        else 
        {
            $resultado = null;
        }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 11</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Calculadora simples com operações básicas</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($resultado !== null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center"> 
                        <h4 class="text-success">Resultado</h4> 
                        <p>Numero 1: <strong><?php echo $numero1; ?></strong></p> 
                        <p>Numero 2: <strong><?php echo $numero2; ?></strong></p>
                        <p>Operação: <strong><?php echo $operacao; ?></strong></p>
                        <p><strong> <?php echo $resultado; ?></strong></p> 
                    </div>
            <?php else: ?>
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Operação inválida.</p>
                </div>
            <?php endif; ?>

            <div class="text-center"> 
                <a href="atv-11.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-03/Atv-12/atv-12.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>