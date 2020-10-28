<?php

class Tv
{
    private static int $volumeMaximo = 100;
    private static int $volumeMinimo = 0;
    private static int $canalMaximo = 50;
    private static int $canalMinimo = 1;
    private $canal;
    private $volume;

    /**
     * Tv constructor.
     * @param $canal
     * @param $volume
     */
    public function __construct($canal, $volume)
    {
        $this->canal = $canal;
        $this->volume = $volume;
    }

    public function mudarCanal($canal)
    {
        if (Tv::$canalMinimo <= $canal && Tv::$canalMaximo >= $canal) {
            $this->canal = $canal;
        }
    }

    public function aumentarVolume()
    {
        if ($this->volume < Tv::$volumeMaximo) {
            $this->volume++;
        }
    }

    public function diminuirVolume()
    {
        if ($this->volume > Tv::$volumeMinimo) {
            $this->volume--;
        }
    }
}
