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

public function genererNumero() {
if (new Adherent()) {
    $nombre = rand(100000, 999999);
    $numeroAdherent = "AD-".$nombre;}
}
}