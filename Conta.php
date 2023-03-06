<?php

class Conta{
    private $num;
    private $nome;
    private $saldo;

    public function __construct($num,$nome){
        $this->num = $num;
        $this->nome = strtoupper($nome);
        $this->saldo = 0;
    }

    public function getNum(){
        return $this->num;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($novoSaldo){
        $this->saldo = $novoSaldo;

    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = strtoupper($nome);
    }



    public function sacar($valor){
        if($valor <= $this->getSaldo()){
            // $this->saldo -= $valor;
            $this->setSaldo($this->getSaldo()-$valor);
            echo "<h2>Valor sacado com sucesso!</h2>";
            // echo "Saldo: ".$this->getSaldo()."<br/><br/>";

        }else{
            echo "<h2>Saldo insuficiente!</h2>";
        }
    }

    public function depositar($valor){
        $this->setSaldo($this->getSaldo()+$valor);
        echo "<h2>Valor depositado com sucesso!</h2>";
        // echo "Saldo: ".$this->getSaldo()."<br/><br/>";
    }


}

?>