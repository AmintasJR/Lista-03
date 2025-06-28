<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $salario = str_replace(',', '.', $_POST['salario']);
        $resultado = null;
        $percentual = null;
        if (is_numeric($salario) && floatval($salario != 0)) 
        { 
            if ($salario <= 1500) 
            {
                $percentual = 20;
                $resultado = $salario + ($salario * $percentual / 100);
            } 
            elseif ($salario > 1500 && $salario <= 3000) 
            {
                $percentual = 15;
                $resultado = $salario + ($salario * $percentual / 100);
            }
            else
            {
                $percentual = 10;
                $resultado = $salario + ($salario * $percentual / 100);
            }
        } 
        else 
        {
            $resultado = null; // utilizar para validação ao apresentarna
        }
    }
?>  

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 09</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Calcular reajuste salarial com base em faixas</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($resultado <> null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center">
                        <h4 class="text-success">Resultado</h4> 
                        <p>Salário atual: <strong>R$<?php echo number_format($salario, 2, ',', '.'); ?></strong></p> 
                        <p>Percentual de reajuste: <strong><?php echo number_format($percentual, 2, ',', '.'); ?>%</strong></p>
                        <p><strong>Novo salário: R$<?php echo number_format($resultado, 2, ',', '.'); ?></strong></p> 
                    </div>
            <?php else: ?>
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: o valor informado é inválido. Não utilize letras, apenas números e eles devem ser maiores do que zero </p>
                </div>
            <?php endif; ?>
            

            <div class="text-center">
                <a href="atv-09.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-03/Atv-10/atv-10.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>