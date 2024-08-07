<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>JOKENPO - 3DS - FINAL FASE 1</title>
</head>
<body>
    
    <h1>RESULTADO FASE 1</h1>
    <?php
        $jogada=$_POST['jogada'];
        echo 'Humano = ' ,$jogada, '<br>';
        $jogadacomp = array ('pedra', 'papel', 'tesoura');
        $valor=rand(0,2);
        echo '<br>Computador = ',$jogadacomp[$valor];
        if($jogada =='pedra' && $jogadacomp[$valor] == 'pedra'){
            echo '<br><br>Empate!';
            echo'<img src=imagens/pedra.png  width=200>
                 <img src=imagens/vs.png  width=200>
                 <img src=imagens/pedra.png  width=200>';
        }
        if($jogada =='pedra' && $jogadacomp[$valor] == 'papel'){
            echo '<br><br>Perdeu!';
        }
        if($jogada =='pedra' && $jogadacomp[$valor] == 'tesoura'){
            echo '<br><br>Ganhou!';
        }
        if($jogada =='papel' && $jogadacomp[$valor] == 'papel'){
            echo '<br><br>Empate!';
        }
        if($jogada =='papel' && $jogadacomp[$valor] == 'pedra'){
            echo '<br><br>Ganhou!';
        }
        if($jogada =='papel' && $jogadacomp[$valor] == 'tesoura'){
            echo '<br><br>Perdeu!';
        }
        if($jogada =='tesoura' && $jogadacomp[$valor] == 'tesoura'){
            echo '<br><br>Empate!';
        }
        if($jogada =='tesoura' && $jogadacomp[$valor] == 'papel'){
            echo '<br><br>Ganhou!';
        }
        if($jogada =='tesoura' && $jogadacomp[$valor] == 'pedra'){
            echo '<br><br>Perdeu!';
        }
    ?>
</body>
</html>
