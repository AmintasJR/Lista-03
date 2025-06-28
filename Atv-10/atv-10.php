<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $nota1 = str_replace(',', '.', $_POST['nota1']); 
            $nota2 = str_replace(',', '.', $_POST['nota2']);
            $nota3 = str_replace(',', '.', $_POST['nota3']);
            $nota4 = str_replace(',', '.', $_POST['nota4']);
            $nota5 = str_replace(',', '.', $_POST['nota5']);

            $notas = null;

            if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4) && is_numeric($nota5) && 
                floatval($nota1) >= 0 && floatval($nota2) >= 0 && floatval($nota3) >= 0 && floatval($nota4) >= 0 && floatval($nota5) >= 0 &&
                floatval($nota1) <= 10 && floatval($nota2) <= 10 && floatval($nota3) <= 10 && floatval($nota4) <= 10 && floatval($nota5) <= 10);
            {
                $nota1 = floatval($nota1);
                $nota2 = floatval($nota2);
                $nota3 = floatval($nota3);
                $nota4 = floatval($nota4);
                $nota5 = floatval($nota5);
                $notas = [$nota1, $nota2, $nota3, $nota4, $nota5];

                for ($i = 0; $i < count($notas); $i++) 
                {
                    if ($notas[$i] >= 9) 
                    {
                        $notas[$i] = "$notas[$i] - Conceito: A";
                    } 
                    elseif ($notas[$i] < 9 && $notas[$i] >= 7) 
                    {
                        $notas[$i] = "$notas[$i] - Conceito: B";
                    } 
                    elseif ($notas[$i] < 7 && $notas[$i] >= 5) 
                    {
                        $notas[$i] = "$notas[$i] - Conceito: C";
                    } 
                    elseif ($notas[$i] < 5  && $notas[$i] >= 3) 
                    {
                        $notas[$i] = "$notas[$i] - Conceito: D";
                    } 
                    else 
                    {
                        $notas[$i] = "$notas[$i] - Conceito: E";
                    }
                }
            }
        }
        else 
        {
            $notas = null;
        }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 010</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Converter nota numérica em conceito</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($notas !== null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center"> 
                        <h4 class="text-success">Resultado</h4> 
                        <p><strong><?php echo $notas[0]; ?></strong></p> 
                        <p><strong><?php echo $notas[1]; ?></strong></p> 
                        <p><strong><?php echo $notas[2]; ?></strong></p> 
                        <p><strong><?php echo $notas[3]; ?></strong></p> 
                        <p><strong><?php echo $notas[4]; ?></strong></p> 
                    </div>
            <?php else: ?>
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: o valor informado é inválido. Deve conter somente números maior ou igual a zero e menor ou igual a 10</p>
                </div>
            <?php endif; ?>

            <div class="text-center"> 
                <a href="atv-10.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-03/Atv-11/atv-11.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>