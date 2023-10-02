<?php

namespace src;

class Livre extends Medias
{
private string $isbn;
private string $titre;
private string $auteur;
private int $nombrePages;

    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @return string
     */
    public function getAuteur(): string
    {
        return $this->auteur;
    }

    /**
     * @return int
     */
    public function getNombrePages(): int
    {
        return $this->nombrePages;
    }


}