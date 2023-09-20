<?php

$Id="vide";
$Nom="vide";
$Description="vide";
$Adresse="vide";
$Domaine="vide";
if (
    !empty($_GET['Id']) &&
    !empty($_GET["Nom"]) &&
    !empty($_GET["Description"]) &&
    !empty($_GET["Adresse"])&&
    !empty($_GET["Domaine"])
){
    $Id=$_GET["Id"];
    $Nom=$_GET["Nom"];
    $Description=$_GET["Description"];
    $Adresse=$_GET["Adresse"];
    $Domaine=$_GET["Domaine"];

?>
<table border="2">
    <tr>
    <th>
    Id
    </th>
    <th>
    Nom
    </th>
    <th>
    Description
    </th>
    <th>
    Adresse
    </th>
    <th>
    Domaine
    </th>
</tr>
    <tr>
        <td>
        <?php echo $Id ?>

        </td>
        <td>
        <?php echo $Nom ?>

        </td>
        <td>
        <?php echo $Description ?>

        </td>
        <td>
        <?php echo $Adresse ?>

        </td>
        <td>
        <?php echo $Domaine ?>

        </td>
    </tr>
</table>
<?php
}
else{
echo "Champs manquants";
}

?>




