<?php

namespace src;

abstract class Media
{
protected string $nomMedia;
protected string $dureeEmprunt;

    /**
     * @return string
     */
    public function getNomMedia(): string
    {
        return $this->nomMedia;
    }

    /**
     * @return string
     */
    public function getDureeEmprunt(): string
    {
        return $this->dureeEmprunt;
    }


}