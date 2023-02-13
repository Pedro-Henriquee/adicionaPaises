<?php

class Pais {

    private $codigoIso;
    private $nome;
    private $populacao;
    private $dimensao;
    private $aFronteira = [];

    public function __construct($codigoISO, $nome, $dimensao) {
        $this->codigoIso = $codigoISO;
        $this->nome = $nome;
        $this->dimensao = $dimensao;
    }

    public function getCodigoIso() {
        return $this->codigoIso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPopulacao() {
        return $this->populacao;
    }

    public function getDimensao() {
        return $this->dimensao;
    }

    public function setPopulacao($populacao): void {
        $this->populacao = $populacao;
    }

    public function setAFronteira($aFronteira): void {
        $this->aFronteira = $aFronteira;
    }

    public function getAFronteira() {
        return $this->aFronteira;
    }

    public function adicionaPaises($oPais) {
        if (count($this->aFronteira) <= 40) {
            $this->aFronteira[] = $oPais->getNome();
        } else {
            return "Um país pode ter no máximo 40 países com os quais ele faz fronteira";
        }
    }

    public function verificaFronteira($oPais) {
        $nome = $oPais->getNome();
        $aFronteira = $this->getAFronteira();
        for ($index = 0; $index < count($aFronteira); $index++) {
            if ($nome == $aFronteira[$index]) {
                return "Faz fronteira com $aFronteira[$index]";
            }
        }
        return "Não faz fronteira com $nome";
    }

    public function verificaPais($oPais) {
        $codigoIsoAtual = $this->getCodigoIso();
        $codigoIsoPais = $oPais->getCodigoIso();
        if ($codigoIsoPais == $codigoIsoAtual) {
            return "O país é igual!";
        } else {
            return "Os países não são iguais!";
        }
    }

    public function densidade() {
        $densidade = ($this->getPopulacao() / $this->getDimensao());
        return $densidade;
    }

    public function paisesComuns($oPais) {
        $aFronteiraAtual = $this->getAFronteira();
        $aFronteira = $oPais->getAFronteira();
        for ($index1 = 0; $index1 < count($aFronteiraAtual); $index1++) {
            for ($index = 0; $index < count($aFronteira); $index++) {
                if ($aFronteira[$index] == $aFronteiraAtual[$index1]) {
                    echo "Pais comum: $aFronteiraAtual[$index]";
                }
            }
        }
    }
}
?>
