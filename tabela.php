<?php

class tabela {
    public $nome;
    public $simbolo;
    public $numeroAtomico;
    public $massaAtomica;
    public $grupo;
    public $periodo;
    public $estadoFisico;
    public $quantidade;

    public function aumentarQuantidade() {
        echo $this->nome . "está aumentando a quantidade.";
        $this->quantidade += 3;
        echo "quantidade do elemento é:" . $this->quantidade;
    }

    public function diminuirQuantidade() {
        echo $this->nome . " está diminuindo a quantidade.";
        $this->quantidade -= 1;
        echo "quantidade do elemento é:" . $this->quantidade;
    }

    public function mostrarNome() {
        echo $this->nome;
    }

    public function mostrarSimbolo() {
        echo $this->simbolo;
    }

    public function mostrarFinal() {
        echo $this->simbolo . " - " . $this->numeroAtomico . " - " . $this->estadoFisico . " - " . $this->quantidade;
        //simbolo, nºatomico, estado, quantidade
    }
}

$meuElemento = new tabela();
$meuElemento->nome = "Hidrogênio";
$meuElemento->simbolo = "H";
$meuElemento->numeroAtomico = 1;
$meuElemento->massaAtomica = 1.008;
$meuElemento->grupo = 1;
$meuElemento->periodo = 1;
$meuElemento->estadoFisico = "Gasoso";
$meuElemento->quantidade = 10;
$meuElemento->aumentarQuantidade();
$meuElemento->diminuirQuantidade();
$meuElemento->mostrarFinal()
 ?>
