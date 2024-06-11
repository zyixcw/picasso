<?php
$conn = mysqli_connect('localhost', 'root', '', 'picasso');

$nombre_limite = 100; // juste mettre ici le nombre de visiteurs limite
$nom = $_POST['nom'];
$email = $_POST['email'];
$date = $_POST['date'];
$nombre_places = 0;
$total_prix = 0;

$sql = "SELECT Catégorie, Prix FROM tarifs";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $categorie = $row['Catégorie'];
        $prix = floatval(str_replace('€', '', $row['Prix']));
        $name = str_replace(' ', '_', $categorie);
        $quantite = isset($_POST[$name]) ? $_POST[$name] : 0;
        $nombre_places += $quantite;
        $total_prix += $quantite * $prix;
    }
}

$sql = "SELECT SUM(nombre_places) AS total_places FROM reservations WHERE date='$date'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_places = $row['total_places'] ? $row['total_places'] : 0;

if (($total_places + $nombre_places) > $nombre_limite) {
    echo "Le nombre limite de visiteurs pour cette date est atteint ! Veuillez choisir une autre date";
} else {
    $sql = "INSERT INTO reservations (nom, email, date, nombre_places, total_prix) VALUES ('$nom', '$email', '$date', $nombre_places, $total_prix)";
    if (mysqli_query($conn, $sql)) {
        echo "Réservation effectuée avec succès";
        echo "<h3>Le tarif total est de : $total_prix €</h3>";
    } else {
        echo "Erreur: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
