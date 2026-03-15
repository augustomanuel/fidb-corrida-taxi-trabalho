<?php

const TAXA_FIXA_KM = 100;
const TAXA_FIM_SEMANA = 0.05;

$nomeDoMotorista =  "Augusto";
$nomeDoPassageiro = "Fernando";

$pontoPartida = "Bairro Dunga";
$pontoChegada = "Bairro Sonangol";

$distancia_Km = 4.6;
$fimDaSemana = true;

function CalcularCorrida(float $distancia_Km, $fimDaSemana ):float
{
    if($fimDaSemana===false)
        {
            $valorCorrida = $distancia_Km * TAXA_FIXA_KM;
        }
    else{
        $valorCorrida = $distancia_Km * TAXA_FIXA_KM;
        $valorCorrida = $valorCorrida + ($valorCorrida * TAXA_FIM_SEMANA);
    }

    return $valorCorrida;
}