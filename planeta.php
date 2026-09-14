<?php

class planeta {
    public $nome;
    public $tipo;
    public $temperatura;
    public $gravidade;
    public $luas;
    public $distanciaSol;
    public $velocidade;


    public function aumentarTemperatura() {
        echo $this->nome . " está aumentando a temperatura, ";
        $this->temperatura += 5;
        echo "temperatura do planeta é: " . $this->temperatura . "°C\n";
    }

    public function diminuirTemperatura() {
        echo $this->nome . " está diminuindo a temperatura, ";
        $this->temperatura -= 3;
        echo "temperatura do planeta é: " . $this->temperatura . "°C\n";
    }

    public function alterarVelocidade() {
        echo $this->nome . " está alterando a velocidade, ";
        $this->velocidade += 6.81;
        echo "velocidade do planeta é: " . $this->velocidade . "km/s\n";
    }

    public function mostrarFinal() {
        echo "Nome: " . $this->nome . "\n";
        echo "Tipo: " . $this->tipo . "\n";
        echo "Temperatura: " . $this->temperatura . "°C\n";
        echo "Gravidade: " . $this->gravidade . "m/s²\n";
        echo "Número de luas: " . $this->luas . "\n";
    }
}

$meuPlaneta = new planeta();
$meuPlaneta->nome = "Urano";
$meuPlaneta->tipo = "Gasoso";
$meuPlaneta->temperatura = -224;
$meuPlaneta->gravidade = 8.69;
$meuPlaneta->luas = 27;
$meuPlaneta->distanciaSol = 2870;
$meuPlaneta->velocidade = 6.81;
$meuPlaneta->aumentarTemperatura();
$meuPlaneta->diminuirTemperatura();
$meuPlaneta->alterarVelocidade();
$meuPlaneta->mostrarFinal();