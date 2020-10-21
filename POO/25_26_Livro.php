<?php

class Livro
{
    private $titulo;
    private $qtdPaginas;
    private $paginasLidas;


    /**
     * Livro constructor.
     * @param $titulo
     * @param $qtdPaginas
     * @param $paginasLidas
     */
    public function __construct($titulo, $qtdPaginas = 0, $paginasLidas = 0)
    {
        /*
         * Deixei os últimos dois parâmetros como opcionais pois o PHP não suporta mais de um construtor na mesma
         * classe. Dessa forma eu consigo simular o comportamento de que existem 2 construtores para a classe Livro.
         */
        $this->titulo = $titulo;
        $this->qtdPaginas = $qtdPaginas;
        $this->paginasLidas = $paginasLidas;
    }

    public function verificarProgresso()
    {
        $porcentagem = $this->paginasLidas * 100 / $this->qtdPaginas;
        echo "Você já leu $porcentagem por cento do livro\n";
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getQtdPaginas()
    {
        return $this->qtdPaginas;
    }

    /**
     * @param mixed $qtdPaginas
     */
    public function setQtdPaginas($qtdPaginas): void
    {
        $this->qtdPaginas = $qtdPaginas;
    }

    /**
     * @return mixed
     */
    public function getPaginasLidas()
    {
        return $this->paginasLidas;
    }

    /**
     * @param mixed $paginasLidas
     */
    public function setPaginasLidas($paginasLidas): void
    {
        $this->paginasLidas = $paginasLidas;
    }
}

class TestarLivros
{
    public static function formulario()
    {
        $pequenoPrincipe = new Livro("O Pequeno Príncipe");
        $pequenoPrincipe->setQtdPaginas(98);
        echo "O livro {$pequenoPrincipe->getTitulo()} possui {$pequenoPrincipe->getQtdPaginas()} páginas\n";
        $pequenoPrincipe->setPaginasLidas(20);
        $pequenoPrincipe->verificarProgresso();
        $pequenoPrincipe->setPaginasLidas(50);
        $pequenoPrincipe->verificarProgresso();
        $meuLivro = new Livro("Ação Humana", 1223, 151);
        echo "O livro {$meuLivro->getTitulo()} possui {$meuLivro->getQtdPaginas()} páginas\n";
    }

}

TestarLivros::formulario();