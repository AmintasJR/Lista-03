<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $avaliacao = intval($_POST['avaliacao']);
            $resposta = null;

            if (is_numeric($avaliacao) && $avaliacao >= 1 && $avaliacao <= 5) 
            {
                if ($avaliacao == 5) 
                { 
                    $resposta = "$avaliacao - Excelente"; 
                }
                elseif ($avaliacao == 4) 
                { 
                    $resposta = "$avaliacao - Excelente"; 
                }
                elseif ($avaliacao == 3) 
                { 
                    $resposta = "$avaliacao - Bom"; 
                }
                elseif ($avaliacao == 2) 
                { 
                    $resposta = "$avaliacao - Regular"; 
                }
                elseif ($avaliacao == 1) 
                { 
                    $resposta = "$avaliacao - Ruim"; 
                }
                else 
                { 
                    $resposta = null; 
                }
            } 
            else 
            {
                $resposta = null; // Se não for válido, definir como nulo
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
        <title>Resultado - 14</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Sistema de avaliação por estrelas</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($resposta !== null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center"> 
                        <h4 class="text-success">Resultado</h4> 
                        <p><strong> <?php echo $resposta; ?></strong></p> 
                    </div>
            <?php else: ?>
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Avaliação inválida.</p>
                </div>
            <?php endif; ?>

            <div class="text-center"> 
                <a href="atv-14.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-03/Atv-15/atv-15.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>