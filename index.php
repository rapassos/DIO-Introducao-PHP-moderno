<?php

$nome = 'Eduardo';
//var_dump($nome);

$idade = 18;
//var_dump($idade);

//Verificação direta da idade, sem vinculo com a lista de categorias
/*
if($idade >= 6 && $idade <=12){
    echo 'Infantil';
}else if($idade >= 13 && $idade <=18){
    echo 'Adolescente';
}else{
    echo 'Adulto';
}
*/

//Lista de categorias
$categorias = [
    [6,12,'Infantil'],
    [13,18,'Adolescente'],
    [19,59,'Adulto'],
    [60,1000,'Idoso']
    ];
//print_r($categorias);

//Verificação a partir da lista com as idades
$categoria = 'inválida';
for($i = 0; $i <= count($categorias); $i++){
    $cat = $categorias[$i];
    //var_dump($cat);
    if($idade >= $cat[0] && $idade <=$cat[1]){
        $categoria = $cat[2];
        break;
    }
}
//echo 'O competido '.$nome.' é da categoria: '.$categoria;


//Lista de categorias nomeada
$categorias2 = [
    'Infantil'      =>  [6,12],
    'Adolescente'   =>  [13,18],
    'Adulto'        =>  [19,59],
    'Idoso'         =>  [60,1000]
    ];
//print_r($categorias);

$categoria = 'inválida';
foreach($categorias2 as $cat => $idades){
    if($idade >= $idades[0] && $idade <=$idades[1]){
        $categoria = $cat;
        break;
    }
}
echo 'O competido '.$nome.' é da categoria: '.$categoria;