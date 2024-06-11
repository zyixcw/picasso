<?php
$conn = mysqli_connect('localhost', 'root', '', 'picasso');


$sql = "SELECT Catégorie, Prix FROM tarifs";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $tarifs = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $tarifs[$row['Catégorie']] = $row['Prix'];
    }
} else {
    echo "Aucun tarif trouvé";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarifs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <h2 class="text-center my-4">Tarifs</h2>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Catégorie</th>
            <th scope="col">Prix</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($tarifs)) {
            foreach ($tarifs as $categorie => $prix) {
                echo "<tr>";
                echo "<td>$categorie</td>";
                echo "<td>$prix</td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center mb-4">Calcul du tarif total</h3>
            <form method="post" action="calcul_tarif.php">
                <?php
                if (!empty($tarifs)) {
                    foreach ($tarifs as $categorie => $prix) {
                        $name = str_replace(' ', '_', $categorie);
                        echo "<div class='mb-3'>";
                        echo "<label for='$name'>$categorie</label>";
                        echo "<input type='number' class='form-control' id='$name' name='$name' min='0' value='0'>";
                        echo "</div>";
                    }
                }
                ?>
                <button type="submit" class="btn btn-primary btn-block">Calculer le tarif total</button>
            </form>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>

</body>
</html>
