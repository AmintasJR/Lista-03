<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $idade = $_POST['idade'];
            $resultado = null;

            if ($idade !== null && is_numeric($idade))
            {
                if ($idade >= 18) 
                {
                    $resultado = "Acesso permitido. Você é maior de idade.";
                } 
                else 
                {
                    $resultado = "Acesso negado. Você é menor de idade.";
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
        <title>Resultado - 13</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Validador de idade para acesso ao sistem</h1>
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
                <a href="atv-13.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-03/Atv-14/atv-14.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>