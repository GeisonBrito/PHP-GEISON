<?php

class ContaCorrente {
    private $numeroConta;
    private $nomeCorrentista;
    private $saldo;

    public function __construct($numeroConta, $nomeCorrentista, $saldo = 0) {
        $this->numeroConta = $numeroConta;
        $this->nomeCorrentista = $nomeCorrentista;
        $this->saldo = $saldo;
    }

    public function alterarNome($novoNome) {
        $this->nomeCorrentista = $novoNome;
        echo "Nome do correntista alterado para $novoNome.\n". '<br>';
    }

    public function deposito($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$" . number_format($valor, 2, ',', '.') . " realizado com sucesso.\n". '<br>';
        } else {
            echo "Valor de depósito deve ser positivo.\n". '<br>';
        }
    }

    public function saque($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$" . number_format($valor, 2, ',', '.') . " realizado com sucesso.\n". '<br>';
        } else {
            echo "Saldo insuficiente ou valor de saque inválido.\n". '<br>';
        }
    }

    public function consultarSaldo() {
        return $this->saldo;
    }

    public function __toString() {
        return "Conta Corrente {$this->numeroConta}, Correntista: {$this->nomeCorrentista}, Saldo: R$" . number_format($this->saldo, 2, ',', '.');
    }
}

// Exemplo de uso:
$conta = new ContaCorrente("12345-6", "João da Silva");
echo $conta . "\n". '<br>';
$conta->alterarNome("João Silva");
$conta->deposito(500);
$conta->saque(200);
echo "Saldo atual: R$" . number_format($conta->consultarSaldo(), 2, ',', '.') . "\n". '<br>';


