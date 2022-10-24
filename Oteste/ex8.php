<?php

//Dado o array abaixo, imprima na tela a soma do campo ‘VR_PARC’ de todos os índices:

$array = [
    [
    "COD_CRED" => 310,
    "COD_TIT" => 25806183,
    "COD_DEV" => 10239966,
    "VR_PARC" => 132.02,
    "VCTO_PARC" => "3/18/1968 12:00:00 AM",
    "NOME_DEV" => "ALEXANDRE RICARDO BANDEIRA",
    "CPF_CNPJ" => "14983683607",
    "DESCRICAO_TIPC" => "COMBO VERO BLACK FRIDAY 2021 460MB + HBO ",
    "COD_TIPC" => 1638
    ],
    [
    "COD_CRED" => 310,
    "COD_TIT" => 25806183,
    "COD_DEV" => 10239966,
    "VR_PARC" => 132.02,
    "VCTO_PARC" => "20/06/2022",
    "NOME_DEV" => "ALEXANDRE RICARDO BANDEIRA",
    "CPF_CNPJ" => "14983683607",
    "DESCRICAO_TIPC" => "COMBO VERO BLACK FRIDAY 2021 460MB + HBO ",
    "COD_TIPC" => 1638
    ],
    [
    "COD_CRED" => 310,
    "COD_TIT" => 25806183,
    "COD_DEV" => 10239966,
    "VR_PARC" => 132.02,
    "VCTO_PARC" => "20/09/2022",
    "NOME_DEV" => "ALEXANDRE RICARDO BANDEIRA",
    "CPF_CNPJ" => "14983683607",
    "DESCRICAO_TIPC" => "COMBO VERO BLACK FRIDAY 2021 460MB + HBO ",
    "COD_TIPC" => 1638
    ],
    [
    "COD_CRED" => 310,
    "COD_TIT" => 25806183,
    "COD_DEV" => 10239966,
    "VR_PARC" => 132.02,
    "VCTO_PARC" => "25/12/2022",
    "NOME_DEV" => "ALEXANDRE RICARDO BANDEIRA",
    "CPF_CNPJ" => "14983683607",
    "DESCRICAO_TIPC" => "COMBO VERO BLACK FRIDAY 2021 460MB + HBO ",
    "COD_TIPC" => 1638
    ]
    ];

    $valores = [];


    foreach($array as $i => $value) { 

        $valores[$i] = $value['VR_PARC'];

        $somaTotal = array_sum($valores);
        

    }
    echo $somaTotal;