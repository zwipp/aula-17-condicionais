<?php
    $visitante = [
    'nome' => 'willian',
    'idade' => 28,
    'sexo' => 'm'
    ];

    $produtos_f = [
        'vestido' => 'vermelho',
        'sutia',
        'absorvente',
        'batom',
    ];

    $produtos_m = [
        'creme de barbear',
        'gravata',
        'machado',
        'juliet',
    ];

    $num1 = mt_rand(0,3);
    $num2 = mt_rand(0,3);

    if($visitante['sexo'] == 'm'){
        $sugestoes = [
            $produtos_m[$num1],
            $produtos_m[$num2],
        ];
    }
    else{
        $sugestoes = [
            $produtos_f[$num1],
            $produtos_f[$num2],  
        ];
    }

    $hora = 22;
    if($hora >=6 && $hora <12){
        $periodo ='manha';
    }
    elseif($hora >= 12 && $hora <18){
        $periodo = 'tarde';
    }
    else{
        $periodo = 'noite';
    }

    switch ($periodo) {
        case 'manha':
            $cor_de_fundo ='aqua';
            $cor_da_fonte ='black';
            break;

        case 'tarde':
            $cor_de_fundo ='yellow';
            $cor_da_fonte ='black';
            break;

        case 'noite':
            $cor_de_fundo ='black';
            $cor_da_fonte ='white';
            break;
        
        default:
            $cor_de_fundo ='white';
            break;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: <?php echo $cor_de_fundo ?>
        }

        p, h2{
            color: <?php echo $cor_da_fonte?>
        }
    </style>
</head>
<body>
    <h2>Bem vind<?= $visitante['sexo'] == 'm' ? 'o' : 'a'?>, <?php echo $visitante ['nome'] ?>!</h2>
    <p>
        Sugerimos para vc <?php echo $sugestoes[0] . ' e ' . $sugestoes[1]?> <!-- coloca o '.' como se fosse um + no js, para colocar tudo no mesmo php -->
    </p>
</body>
</html>