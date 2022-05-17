<?php

use Model\Pedido;

    require_once '../vendor/autoload.php';

    $ped = new Pedido();   

    //se for enviado via get um campo com 'name' ingrediente...
    if( isset($_GET['ingrediente']) ) {
        //criamos a variável '$ingrediente' com o valor que foi enviado
        $ped->itens = $_GET['ingrediente'];
    } else {
        //senão criamos a variável '$ingrediente' com o valor null.
        $ped->itens = null;
    }
    
    //Recebendo qtde
    if( isset($_GET['qtde']) ) {
        $ped->quant = $_GET['qtde'];
    } else {
        $ped->quant = null;
    }

    //Recebendo pgto
    if( isset($_GET['pgto']) ) {
        $ped->pag = $_GET['pgto'];
    } else {
        $ped->pag = null;
    }

    //Recebendo entrega
    if( isset($_GET['entrega']) ) {
        $ped->local = $_GET['entrega'];
    } else {
        $ped->local = null;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de pedido</title>
</head>

<body>
    <?= $ped->gerarDesconto() ?>

    <h2>Itens:</h2><hr>
    <?php foreach($ped->itens as $item) : ?>
        <!-- Aqui será repetido quantas vezes necessário -->
        <h4 style="color: red;"> <?= $item ?> </h4>
    <?php endforeach ?>

    <h2>Quantidade:</h2><hr>
    <h4 style="color: blue;"> <?= $ped->quant ?> </h4>

    <h2>Pagamento:</h2><hr>
    <h4 style="color: purple;"> <?= $ped->pag ?> </h4>

    <h2>Entrega:</h2><hr>
    <h4 style="color: green;"> <?= $ped->local ?> </h4>
</body>