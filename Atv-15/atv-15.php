<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $valorVendido = str_replace(',', '.', $_POST['valorVendido']);
        $comissao = null;
        $percentual = null;
        if (is_numeric($valorVendido) && floatval($valorVendido != 0)) 
        { 
            if ($valorVendido <= 1000) 
            {
                $percentual = 5;
                $comissao = $valorVendido * $percentual / 100;
            } 
            elseif ($valorVendido > 1000 && $valorVendido <= 5000) 
            {
                $percentual = 10;
                $comissao = $valorVendido * $percentual / 100;
            }
            else
            {
                $percentual = 15;
                $comissao = $valorVendido * $percentual / 100;
            }
        } 
        else 
        {
            $comissao = null; // utilizar para validação ao apresentarna
        }
    }
?>  

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>comissao - 15</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Cálculo de comissão por faixa de venda</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($comissao <> null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center">
                        <h4 class="text-success">Resultado</h4> 
                        <p>Valor vendido: <strong>R$<?php echo number_format($valorVendido, 2, ',', '.'); ?></strong></p> 
                        <p>Percentual de comissão: <strong><?php echo number_format($percentual, 2, ',', '.'); ?>%</strong></p>
                        <p><strong>comissão atual: R$<?php echo number_format($comissao, 2, ',', '.'); ?></strong></p> 
                    </div>
            <?php else: ?>
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: o valor informado é inválido. Não utilize letras, apenas números e eles devem ser maiores do que zero </p>
                </div>
            <?php endif; ?>
            

            <div class="text-center">
                <a href="atv-15.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-03/Atv-01/atv-01.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>