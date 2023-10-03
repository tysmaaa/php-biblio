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

    public function isEmpruntInProgress() : bool {

    }

    public function isEmpruntOnAlert() : bool {
        $msgSucces = "L'adhesion est en alerte";
        $msgErreur = "L'adhesion n'est pas en alerte";
        $dateAdhesion = $this->dateAdhesion;
        if ($this->dateAdhesion <= $dateAdhesion+1) {
            $date = strtotime($dateAdhesion);
            return $msgSucces;
        } else {
            return $msgErreur;
        }

    }

    public function isEmpruntOutdated() : bool {

    }
}
