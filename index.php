<?php

require 'src\Sorteio.php';
session_start();
$_SESSION['sorteio'] = [];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Bingo</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <?php
    
    $sorteio = new Sorteio();
    // while($count <= 75)
    // {
        $sorteio->sorteiaNumero();
        $_SESSION['sorteio'] = $sorteio->getUltimoSorteado();
        echo 'Número sorteado: ' . $sorteio->getUltimoSorteado();
        $table = '<table>';
            for ($i = 0; $i <= 4; $i++) {
                $table .= '<tr>';
                for ($y = 1; $y <=15; $y++) {
                    $numeroCartela = $i * 15 + $y;
                    $numerosSorteados[] = $_SESSION['sorteio']; 
                    if (in_array($numeroCartela,$numerosSorteados)) {
                        $table .= '<td class="blue">' . $numeroCartela . '</td>';  
                    } else {
                        $table .= '<td>' . $numeroCartela . '</td>';    
                    }                    
                }
                $table .='</tr>';
            }           
        $table .= '</table>';
        echo $table;
    // }
        
    ?>
</body>
</html>