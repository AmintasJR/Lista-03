<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $idade = $_POST['idade'];
            $resultado = null;

            if ($idade !== null)
            {
                if ($idade > 0) {
                    if ($idade <= 12) 
                    {
                        $resultado = "$idade - Criança";
                    } 
                    elseif ($idade > 12 && $idade <= 17) 
                    {
                        $resultado = "$idade - Adolescente";
                    } 
                    elseif ($idade >= 18 && $idade <= 59) 
                    {
                        $resultado = "$idade - Adulto";
                    } 
                    else
                    {
                        $resultado = "$idade - Idoso";
                    }
                } else {
                    $resultado = null;
                }
                
            } else {
                $resultado = null; // utilizar para validação ao apresentarna
            }
        }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 07</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Classificar faixa etária</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($resultado !== null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center"> 
                        <h4 class="text-success">Resultado</h4> 
                        <p><strong><?php echo $resultado; ?></strong></p> 
                    </div>
            <?php else: ?>
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: Idade inválida. Deve ser um número entre maior do que zero</p>
                </div>
            <?php endif; ?>

            <div class="text-center"> 
                <a href="atv-07.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-03/Atv-08/atv-08.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>