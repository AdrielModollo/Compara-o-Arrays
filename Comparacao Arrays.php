<?php


$myArray = [

    'Araraquara' => [
        'Nomes' => [
        'Rafael',
        'Matheus',
        'Lucas',
        'Rafael'
        ],
    ],

    'Matao' => [
        'Nomes' =>[
        'Felipe',
        'Rafael',
        'Fernanda',
        'Junior',
        'Junior'
        ],
    ],

];

//Exibe todos elementos repetidos dentro de um array. 
foreach($myArray as $cidades => $valores){
    foreach($valores as $valor => $nomes){
        foreach (array_count_values($nomes) as $nome => $teste){
            if($teste > 1){
                echo 'Valor repetido em todos array: '. $nome .'<br>';
             } 
        }
    }
}


/* outro modo de fazer, para melhor entendimento de como acessar a matriz e mostrar elementos especificos
$nomesAraraquara = ($myArray['Araraquara']['Nomes']);
$nomesMatao = ($myArray['Matao']['Nomes']);
$arrayAraraquara = array_count_values($nomesAraraquara);
$arrayMatao = array_count_values($nomesMatao);


foreach($arrayAraraquara as $chave => $valor){
    if($valor > 1){
        echo 'valor repetido Araraquara: '. $chave .'<br>';
    } 
}
foreach($arrayMatao as $chave => $valor){
    if($valor > 1){
        echo 'valor repetido Matão: '. $chave .'<br>';
    } 
}


*/
/* Exemplo básico
$cursos = array('2020', 'teste', 'teste2', 'boa', 'teste3', 'teste', 'boa');
$meuArray = array_count_values($cursos);
//A função array_count_values() retorna um array utilizando os valores do parâmetro array como chaves e suas respectivas frequências em array como valores.

foreach($meuArray as $chave => $valor){
    if($valor > 1){
        echo 'valor repetido: '. $chave .'<br>';
    }
}
*/

