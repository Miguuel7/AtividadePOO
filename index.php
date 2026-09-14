<?php 

class  Gato {
    public $nome;
    public $idade;
    public $raca;
    public $sexo;
    public $cor;


    public function Dormir() {
    echo "$this->nome está dormindo.";
    }

    public function Comer() {
        echo "$this->nome está comendo.";
    }

    public function exibirInformacoes() {
        echo "Nome: $this->nome <br>";
        echo "Idade: $this->idade <br>";
        echo "Raça: $this->raca <br>";
        echo "Sexo: $this->sexo <br>";
        echo "Cor: $this->cor <br>";
    }
}

$objGato = new Gato();
$objGato->nome = "Mimi";
$objGato->idade = 2;
$objGato->raca = "Siamês";
$objGato->Vocalizar("Miado");

$objGato->sexo = "Fêmea";
$objGato->cor = "Cinza";



class Aluno {
    public $nome;
    public $idade;
    public $curso;
    public $altura;
}

$objAluno = new Aluno();
$objAluno->nome = "João";
$objAluno->idade = 20;
$objAluno->curso = "Engenharia de Software";
$objAluno->altura = 1.82;

echo '<pre>';
print_r($objGato);
print_r($objAluno);
echo '</pre>';