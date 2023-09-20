<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données du formulaire
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $adresse = $_POST["adresse"];
    $domaine = $_POST["domaine"];

    // Incluez la classe Club
    include("Club.php");

    // Créez un objet Club à partir des données du formulaire
    $club1 = new Club($id, $nom, $description, $adresse, $domaine);

    // Affichez les informations du club avec var_dump()
    var_dump($club1);
}
?>
