<?php

class planta {
    public $nome;
    public $especie;
    public $cor;
    public $altura;
    public $idade;
    public $folhas;
    public $agua; 

       public function crescer() {
            echo "$this->nome está sendo crescendo.";
            $this->altura += 10;
            echo "altura da planta é:" . $this->altura;
        }

        public function regar() {
            echo "$this->nome está sendo regada.";
            $this->agua += 100;
            echo "quantidade de água da planta é:" . $this->agua;
        }

        public function criarFolhas() {
            echo "$this->nome está criando folhas.";
            $this->folhas += 4;
            echo "quantidade de folhas da planta é:" . $this->folhas;
        }

        public function mostrarFinal() {
            echo "Quantidade final de água: " . $this->agua . "ml\n";
            echo "Quantidade final de folhas: " . $this->folhas . "\n";;
            echo "Quantidade final de altura: " . $this->altura . "m\n";
        }
    
}
     
    $minhaPlanta = new planta();
    $minhaPlanta->nome = "Rosa";
    $minhaPlanta->especie = "Rosa gallica";
    $minhaPlanta->cor = "Vermelha";
    $minhaPlanta->altura = 0.5;
    $minhaPlanta->idade = 2;
    $minhaPlanta->folhas = 20;
    $minhaPlanta->agua = 500;
    $minhaPlanta->crescer();
    $minhaPlanta->regar();
    $minhaPlanta->criarFolhas();
    $minhaPlanta->mostrarFinal();

    ?>
        




