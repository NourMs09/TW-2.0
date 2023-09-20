<?php
class Config {
    private static $instance = NULL;

    public static function getConnexion() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=clubEsprit', 'root', '');
            // Activez les erreurs PDO pour faciliter le débogage
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }

    public static function afficherClubs() {
        try {
            $conn = self::getConnexion();
            $query = "SELECT * FROM club";
            $stmt = $conn->query($query);
            
            // Récupérer tous les résultats sous forme de tableau associatif
            $clubs = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Afficher la liste des clubs
            foreach ($clubs as $club) {
                echo "ID: " . $club['id'] . "<br>";
                echo "Nom: " . $club['nom'] . "<br>";
                echo "Description: " . $club['description'] . "<br>";
                echo "Adresse: " . $club['adresse'] . "<br>";
                echo "Domaine: " . $club['domaine'] . "<br><br>";
            }
        } catch (PDOException $e) {
            echo "Erreur: " . $e->getMessage();
        }
    }
}
?>
