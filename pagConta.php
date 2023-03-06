<?php
    require_once 'Conta.php';
    session_start();
    $l=true;
    if (isset($_POST) and !empty($_POST['cx1']) and !empty($_POST['cx2']) and $l == true){
        $num = $_POST['cx1'];
        $nome = $_POST['cx2'];
        session_unset();
    }
    if(!isset($_SESSION['conta']) and isset($num)){
        $_SESSION['conta'] = new Conta($num,$nome); //Instanciando Objeto
    }
    if(isset($_POST['sair'])){
        session_unset();
        header('Location: index.php');
    }
?>

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

<form action="" method="post" class="main">
    <div class="formulario">
        <div class="corpo">
            <h1>Banco</h1>
            <h2>Bem vindo <?php echo $_SESSION['conta']->getNome();?></h2>
    
            <div class="textfield2">
                <input type="number" name='sacar' placeholder="Digite um valor para sacar">
                <button type="submit" class="acao">Sacar</button>
            </div>
            <div class="textfield2">
                <input type="number" name='depositar' placeholder="Digite um valor para depositar">
                <button type="submit" class="acao" >Depositar</button>
            </div>
            <?php
            if (isset($_POST) and !empty($_POST['sacar'])){
                $valorSaque = $_POST['sacar'];

                $_SESSION['conta']->sacar($valorSaque);

            }
            if (isset($_POST) and !empty($_POST['depositar'])){
                $valorDeposito = $_POST['depositar'];

                $_SESSION['conta']->depositar($valorDeposito);

            }
            ?>
            <h3>Seu Saldo: <?php echo "<h2>R$ ".number_format($_SESSION['conta']->getSaldo(),2,',','.')."</h2>";?></h3>
    
             <button name="sair" class="sair">Finalizar</button>
        </div>
    </div>
</form>
<div class="jvn">Desenvolvido por João Vitor Neves</div>

</body>
</html>