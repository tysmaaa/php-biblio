<?php

namespace src;

class Emprunt
{
private string $dateEmprunt;
private string $dateRetour;
private string $dureeEmprunt;

    /**
     * @return string
     */
    public function getDateEmprunt(): string
    {
        return $this->dateEmprunt;
    }

    /**
     * @return string
     */
    public function getDateRetour(): string
    {
        return $this->dateRetour;
    }

    /**
     * @return string
     */
    public function getDureeEmprunt(): string
    {
        return $this->dureeEmprunt;
    }


}
