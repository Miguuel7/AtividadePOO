<?php

class bicicleta {
    public $marca;
    public $modelo;
    public $cor;
    public $marchas;
    public $velocidade;
    public $marchaAtual;
    public $roda;
    public $freio;

    public function acelerar() {
        echo "$this->marca está acelerando.\n";
        $this->velocidade += 20;
        echo "velocidade da bicicleta é: " . $this->velocidade . "km/h\n";
    }

    public function frear() {
        if ($this->freio == true) {
            echo $this->velocidade . "km/h - " . $this->marca . " está diminuindo.\n";
            return $this->velocidade -= 5;
            echo "Velocidade da bicicleta é\n:" . $this->velocidade . "km/h";
        }
    }

    public function trocarMarcha() {
        echo "$this->marca está trocando de marcha.\n";
        $this->freio += 3;
        echo "Quantidade de marchas da bicicleta é:" . $this->freio;
    }

    public function mostrarFinal() {
        echo "Quantidade final de velocidade: " . $this->velocidade . "km/h\n";
        echo "Quantidade final de marchas: " . $this->freio . "\n";
    }
}

$minhaBicicleta = new bicicleta();
$minhaBicicleta->marca = "Caloi";
$minhaBicicleta->modelo = "Elite";
$minhaBicicleta->cor = "Preta";
$minhaBicicleta->marchas = 21;
$minhaBicicleta->velocidade = 0;
$minhaBicicleta->marchaAtual = 1;
$minhaBicicleta->roda = 26;
$minhaBicicleta->freio = true;
$minhaBicicleta->acelerar();
$minhaBicicleta->frear();
$minhaBicicleta->trocarMarcha();
$minhaBicicleta->mostrarFinal();