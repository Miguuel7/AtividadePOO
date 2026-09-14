<?php
class animal {
    public $nome;
    public $especie;
    public $cor;
    public $peso;
    public $idade;
    public $alimento;
    public $agua;

    public function comer() {
        echo "$this->nome está comendo.";
        $this->alimento += 150;
        echo "quantidade de alimento do animal é:" . $this->alimento . "g";
       
    }

    public function beber() {
        echo "$this->nome está bebendo.";
        $this->agua += 500;
        echo "quantidade de água do animal é:" . $this->agua . "ml";
    }

    public function ganhar() {
        echo "$this->nome está ganhando peso.";
        $this->alimento += 2000;
        echo "quantidade de alimento do animal é:" . $this->alimento . "g";
    }

    public function mostrarFinal() {
        echo "Quantidade final de alimento: " . $this->alimento . "g\n";
        echo "Quantidade final de água: " . $this->agua . "ml\n";
        echo "Quantidade final de peso: " . $this->peso . "kg\n";
    }

}

    $meuAnimal = new animal();
    $meuAnimal->nome = "Wolf";
    $meuAnimal->especie = "Pastor Belga";
    $meuAnimal->cor = "Marrom";
    $meuAnimal->peso = 45;
    $meuAnimal->idade = 5;
    $meuAnimal->alimento = 1000;
    $meuAnimal->agua = 2000;
    $meuAnimal->comer();
    $meuAnimal->beber();
    $meuAnimal->mostrarFinal();

    ?>
