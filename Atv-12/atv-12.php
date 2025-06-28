<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $telefone = $_POST['telefone']; 
            $resultado = null;

            if(strlen($telefone) == 11 && is_numeric($telefone)) 
            {
                if( substr($telefone, 0, 2) == '27' || substr($telefone, 0, 2) == '11' || substr($telefone, 0, 2) == '21')
                    {
                        $resultado = "Telefone válido: (" . substr($telefone, 0, 2) . ") " . substr($telefone, 2, 5) . "-" . substr($telefone, 7);
                    } 
            }
            else 
            {
                $resultado = null;
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
        <title>Resultado - 12</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div>
            <h1 class="text-center my-5" style="color: lightskyblue;">Validador de número de telefone</h1>
        </div>
        
        <div class="container border p-4" style="max-width: 400px; border-radius: 10px;"> 
            <?php 
                if ($resultado !== null): ?> 
                    <div class="mt-2 p-3 border bg-light rounded text-center"> 
                        <h4 class="text-success">Resultado</h4> 
                        <p><strong> <?php echo $resultado; ?></strong></p> 
                    </div>
            <?php else: ?>
                <div class="mt-2 p-3 border bg-light rounded text-center">
                    <h4 style="color: red"; >Falha</h4>
                    <p style="color: red";>Número ou DDD inválido.</p>
                </div>
            <?php endif; ?>

            <div class="text-center"> 
                <a href="atv-12.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightcoral; border-color: black; color: black;">Voltar</a>
                <a href="/Lista-03/Atv-13/atv-13.html" class="btn btn-secondary mt-2 col-sm-5" style="background-color: lightskyblue; border-color: black; color: black;">Próximo</a>
            </div> 
        </div>
    </body>
</html>