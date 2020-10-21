<?php

class Contato
{
    private $nome;
    private $telefone;

    /**
     * Contato constructor.
     * @param $nome
     * @param $telefone
     */
    public function __construct($nome, $telefone)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone): void
    {
        $this->telefone = $telefone;
    }

}

abstract class Agenda
{
    public static $contatos = [];

    public static function formulario()
    {
        do {
            do {
                echo "1) Cadastrar Contato\n";
                echo "2) Buscar Contato\n";
                echo "3) Excluir Contato\n";
                echo "4) Imprimir Agenda\n";
                echo "5) Sair\n";
                echo "-----------------------\n";
                echo "Escolha uma opção: ";
                $opcao = readline();
                echo "-----------------------\n";
            } while ($opcao < 1 || $opcao > 5);
            switch ($opcao) {
                case 1:
                    echo "Informe o nome do contato que deseja inserir: ";
                    $nome = readline();
                    echo "Informe o telefone do contato que deseja inserir: ";
                    $telefone = readline();
                    $contato = new Contato($nome, $telefone);
                    array_push(self::$contatos, $contato);
                    echo "-----------------------\n";
                    break;
                case 2:
                    echo "Informe o nome do contato que deseja buscar: ";
                    $nome = readline();
                    for ($i = 0; $i < count(self::$contatos); ++$i) {
                        if ($nome == self::$contatos[$i]->getNome()) {
                            echo "Número do contato informado: " . self::$contatos[$i]->getTelefone() . "\n";
                        }
                    }
                    echo "-----------------------\n";
                    break;
                case 3:
                    echo "Informe o nome do contato que deseja buscar: ";
                    $nome = readline();
                    for ($i = 0; $i < count(self::$contatos); ++$i) {
                        if (self::$contatos[$i] != null) {
                            if ($nome == self::$contatos[$i]->getNome()) {
                                unset(self::$contatos[$i]);
                            }
                        }
                    }
                    echo "-----------------------\n";
                    break;
                case 4:
                    echo "======== IMPRIMINDO INFORMAÇÕES DA AGENDA ========\n";
                    for ($i = 0; $i < count(self::$contatos); ++$i) {
                        if (self::$contatos[$i] != null) {
                            $nome = self::$contatos[$i]->getNome();
                            $telefone = self::$contatos[$i]->getTelefone();
                            echo "Nome do contato $nome | Telefone do contato $telefone\n";
                        }
                    }
                    echo "-----------------------\n";
                    break;
                case 5:
                    break;
            }
        } while ($opcao != 5);
    }
}

Agenda::formulario();