<?php
// Incluez la classe Club
include("Club.php");

// Créez un objet Club avec les données spécifiées
$club = new Club(1, "Club Robotique", "Test", "Esprit Ghazala", "Electromecanique");

// Appelez la méthode afficherClub pour afficher les informations du club
$club->afficherClub();
?>
