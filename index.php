<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exposition Picasso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'header.php'; ?>

<section id="accueil" class="py-5 text-center">
    <div class="container">
        <h1 class="display-4">Bienvenue à l'exposition Picasso !</h1>
        <p class="lead mt-3">Découvrez les œuvres fascinantes de l'un des plus grands artistes du 20e siècle.</p>

        <!-- Carrousel -->
        <div class="carousel-container mt-5">
            <div id="picassoCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/picasso.jpg" class="d-block w-100" alt="Oeuvre 1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Femmeasise.jpeg" class="d-block w-100" alt="Oeuvre 2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Levieuxguitaristeaveugle.jpg" class="d-block w-100" alt="Oeuvre 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#picassoCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#picassoCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Citation -->
        <p class="lead mt-5">"L'art est un mensonge qui nous permet de dévoiler la vérité." - Pablo Picasso</p>
    </div>
</section>

<section id="infos" class="py-5">
    <div class="container">
        <h2 class="text-center">Informations</h2>
        <p class="text-center">Profitez de notre exposition du mardi au dimanche, de 10h à 18h. Découvrez les œuvres emblématiques de Picasso et explorez ses contributions révolutionnaires à l'art moderne.</p>
    </div>
</section>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
