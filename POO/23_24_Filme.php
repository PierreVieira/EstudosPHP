<?php

class Filme
{
    private $titulo;
    private $duracaoEmMinutos;

    /**
     * Livro constructor.
     * @param $titulo
     * @param $duracaoEmMinutos
     */
    public function __construct($titulo, $duracaoEmMinutos)
    {
        $this->titulo = $titulo;
        $this->duracaoEmMinutos = $duracaoEmMinutos;
    }

    public function exibirDuracaoEmHoras()
    {
        $minutos = $this->duracaoEmMinutos % 60;
        $horas = (int)($this->duracaoEmMinutos / 60);
        echo "O filme $this->titulo possui $horas horas e $minutos minutos de duração.\n";
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
    public function getDuracaoEmMinutos()
    {
        return $this->duracaoEmMinutos;
    }

    /**
     * @param mixed $duracaoEmMinutos
     */
    public function setDuracaoEmMinutos($duracaoEmMinutos): void
    {
        $this->duracaoEmMinutos = $duracaoEmMinutos;
    }
}

class TestarFilme
{
    public static function formulario()
    {
        $umFilmeQualquer = new Filme("Os Vingadores", 142);
        $umFilmeQualquer->exibirDuracaoEmHoras();
        $meuFilmeFavorito = new Filme("Homem Aranha", 100);
        $meuFilmeFavorito->setDuracaoEmMinutos(150);
        $meuFilmeFavorito->exibirDuracaoEmHoras();
        echo "Os filmes do catálogo são {$umFilmeQualquer->getTitulo()} e {$meuFilmeFavorito->getTitulo()}.\n";
    }
}

TestarFilme::formulario();