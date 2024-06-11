<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les œuvres</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-title, .card-text, .btn {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <h2 class="text-center my-4">Les œuvres</h2>

    <div id="oeuvres-container" class="row row-cols-1 row-cols-md-3 g-4">

        <?php
        $oeuvres = array(
            array("Levieuxguitaristeaveugle.jpg", "Le vieux guitariste aveugle", "https://fr.wikipedia.org/wiki/Le_Vieux_Guitariste_aveugle"),
            array("Nudeinredarmchair.jpg", "Grand nu au fauteuil rouge", "https://www.museepicassoparis.fr/fr/grand-nu-au-fauteuil-rouge"),
            array("Femmeasise.jpeg", "Femme assise", "https://www.cineclubdecaen.com/peinture/peintres/picasso/premierecommunion.htm"),
            array("Jeunefilledevantunmiroir.jpg", "Jeune fille devant un miroir", "https://www.cineclubdecaen.com/peinture/peintres/picasso/jeunefemmeaumiroir.htm"),
            array("Lafemmelafleur.jpeg", "La femme à la fleur", "https://www.cineclubdecaen.com/peinture/peintres/picasso/premierecommunion.htm"),
            array("Lafemmequipleure.jpeg", "La femme qui pleure", "https://fr.wikipedia.org/wiki/La_Femme_qui_pleure_(Picasso)"),
            array("LeBaiser.jpg", "Le baiser", "https://www.museepicassoparis.fr/fr/le-baiser-1925"),
            array("Lereve.jpg", "Le rêve", "https://www.cineclubdecaen.com/peinture/peintres/picasso/reve.htm"),
            array("LesDemoisellesdAvignon.jpg", "Les demoiselles d'Avignon", "https://fr.wikipedia.org/wiki/Les_Demoiselles_d%27Avignon")
        );

        shuffle($oeuvres);

        foreach ($oeuvres as $oeuvre) {
            echo '
      <div class="col">
        <div class="card h-100">
          <img src="' . $oeuvre[0] . '" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">' . $oeuvre[1] . '</h5>
            <p class="card-text">Description de l\'œuvre...</p>
            <a href="' . $oeuvre[2] . '" class="btn btn-primary mt-auto">En savoir plus</a>
          </div>
        </div>
      </div>
    ';
        }
        ?>

    </div>
</div>

<?php include 'footer.php'; ?>

<script>
    var oeuvresContainer = document.getElementById("oeuvres-container");
    var oeuvres = Array.from(oeuvresContainer.children);
    oeuvres.sort(() => Math.random() - 0.5);
    oeuvres.forEach(oeuvre => oeuvresContainer.appendChild(oeuvre));
</script>

</body>
</html>
