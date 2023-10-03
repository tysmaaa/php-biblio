<?php

namespace src;

class Adherent
{
    private string $numeroAdherent;
    private string $prenom;
    private string $nom;
    private string $email;
    private string $dateAdhesion;

    /**
     * @param string $numeroAdherent
     * @param string $prenom
     * @param string $nom
     * @param string $email
     * @param string $dateAdhesion
     */
    public function __construct(string $prenom, string $nom, string $email, string $dateAdhesion)
    {
        $this->numeroAdherent = $this->genererNumero();
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email = $email;
        $this->dateAdhesion = $dateAdhesion;
    }


    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @param string $dateAdhesion
     */
    public function setDateAdhesion(string $dateAdhesion): void
    {
        $this->dateAdhesion = $dateAdhesion;
    }

    public function genererNumero()
    {
        $nombre = rand(100000, 999999);
        $numeroAdherent = "AD-" . $nombre;
    }

    public function renouvelerAdhesion()
    {
        $this->dateAdhesion = $this->dateAdhesion * 2;
    }

    public function getAdherent(): string
    {
        return $this->numeroAdherent;
    }

    public function isAdhesionValable(): bool
    {
        $msgSucces = "L'adhesion est valable";
        $msgErreur = "L'adhesion n'est pas valable";
        $dateAdhesion = $this->dateAdhesion;
        if ($this->dateAdhesion < $dateAdhesion * 2) {
            $date = strtotime($dateAdhesion);
        return $msgSucces;
        } else {
            return $msgErreur;
    }

        }
}