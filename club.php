<?php
class Club {
    private $id;
    private $nom;
    private $description;
    private $adresse;
    private $domaine;

    public function __construct($id, $nom, $description, $adresse, $domaine) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->adresse = $adresse;
        $this->domaine = $domaine;
    }

    public function afficherClub() {
        echo "ID: " . $this->id . "<br>";
        echo "Nom: " . $this->nom . "<br>";
        echo "Description: " . $this->description . "<br>";
        echo "Adresse: " . $this->adresse . "<br>";
        echo "Domaine: " . $this->domaine . "<br>";
    }
}
?>
