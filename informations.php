<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations pratiques</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        /* Style pour le tableau des horaires d'ouverture */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <h2 class="text-center my-4">Informations pratiques</h2>

    <div class="row">
        <div class="col-md-6">
            <h3>Adresse de l'exposition</h3>
            <p>Musée du Film d'Animation<br>
                123 Rue de l'Exposition<br>
                75000 Paris, France</p>
        </div>
        <div class="col-md-6">
            <h3>Musée du film d'animation</h3>
            <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=2.3367%2C48.8605%2C2.352%2C48.8684&amp;layer=mapnik&amp;marker=48.8644%2C2.3438" style="border: 1px solid black;" width="100%" height="300" frameborder="0"></iframe>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3>Horaires d'ouverture</h3>
            <table>
                <tr>
                    <th>Jours</th>
                    <th>Heures d'ouverture</th>
                </tr>
                <tr>
                    <td>Du mardi au vendredi</td>
                    <td>10h00 - 12h00 et 14h00 - 18h30</td>
                </tr>
                <tr>
                    <td>Samedi et dimanche</td>
                    <td>10h00 - 19h00</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
