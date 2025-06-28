<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $nota1 = str_replace(',', '.', $_POST['nota1']); 
            $nota2 = str_replace(',', '.', $_POST['nota2']);
            $nota3 = str_replace(',', '.', $_POST['nota3']);

            $media = null;
            $resultado = null;

            if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && 
                floatval($nota1) >= 0 && floatval($nota2) >= 0 && floatval($nota3) >= 0 &&
                floatval($nota1) <= 10 && floatval($nota2) <= 10 && floatval($nota3) <= 10) {
                $nota1 = floatval($nota1);
                $nota2 = floatval($nota2);
                $nota3 = floatval($nota3);
                $media = floatval($nota1 + $nota2 + $nota3) / 3;

                if ($media >= 7) {
                    $resultado = "Aprovado com média: " . number_format($media, 2, ',', '.');
                } elseif ($media <= 6.9 && $media >= 5) {
                    $resultado = "Recuperação com média: " . number_format($media, 2, ',', '.');
                } else {
                    $resultado = "Reprovado com média: " . number_format($media, 2, ',', '.');
                }
            } else {
                $media = null; // utilizar para validação ao apresentarna
            }
        }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Resultado - 03</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Calcular média e informar se o aluno está aprovado, em recuperação ou reprovado</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($media !== null && $resultado !== null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center"> 
                        <h4 class="text-success">Resultado</h4> 
                        <p><strong><?php echo $resultado; ?></strong></p> 
                    </div>
            <?php else: ?>
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Erro: o valor informado é inválido. Deve conter somente números maior ou igual a zero e menor ou igual a 10</p>
                </div>
            <?php endif; ?>

            <div class="text-center"> 
                <a href="atv-03.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-03/Atv-04/atv-04.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>