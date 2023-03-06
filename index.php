
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>

    
    <form action="pagConta.php" method="post" class="main">
        <div class="formulario">
            <div class="corpo">
                <h1>Banco</h1>
                <div class="textfield">
                    <label for="cx1">Insira sua conta</label>
                    <input type="number" name='cx1' placeholder="Insira o número da conta" required>
                </div>
                <div class="textfield">
                    <label for="cx2">Insira seu nome</label>
                    <input type="text" name='cx2' placeholder="Insira seu nome" required>
                </div>
                <input type="submit" class="enviar">
                
            </div>
        </div>
    </form>
    <div class="jvn">Desenvolvido por João Vitor Neves</div>
</body>
</html>