<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos de Picasso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .video-container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .video-container iframe {
            width: 80%;
            max-width: 800px;
            height: 450px;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <h2 class="text-center my-4">A propos de Picasso</h2>

    <div class="row">
        <div class="col-md-6">
            <h3>Présentation de Pablo Picasso</h3>
            <p>
                Pablo Picasso, né le 25 octobre 1881 à Malaga, en Andalousie, Espagne, est décédé le 8 avril 1973 à Mougins, dans les Alpes-Maritimes, France. Il était un peintre, sculpteur, dessinateur et céramiste espagnol, considéré comme l'un des artistes les plus influents du XXe siècle.
            </p>
            <p>
                Il est l'un des fondateurs du cubisme, un mouvement artistique révolutionnaire qui a redéfini les notions de perspective et de représentation dans l'art. Ses œuvres se caractérisent par leur diversité stylistique et leur innovation constante.
            </p>
            <p>
                Picasso a commencé à montrer un talent artistique remarquable dès son plus jeune âge, entrant à l'école des Beaux-Arts de Barcelone à l'âge de 13 ans. Son père, également artiste, a reconnu son talent précoce et l'a encouragé à poursuivre ses études artistiques.
            </p>
            <p>
                L'œuvre de Picasso est souvent divisée en plusieurs périodes distinctes, notamment la période bleue, la période rose, la période africaine, le cubisme analytique et le cubisme synthétique. Chaque période reflète une évolution de son style et de ses préoccupations artistiques.
            </p>
            <p>
                Parmi ses œuvres les plus célèbres, on compte <em>Les Demoiselles d'Avignon</em> (1907), <em>Guernica</em> (1937) et <em>Le Vieux Guitariste aveugle</em> (1903). Ses sculptures, céramiques et dessins sont également très respectés dans le monde de l'art.
            </p>
            <p>
                En plus de ses contributions artistiques, Picasso a vécu une vie personnelle fascinante, marquée par ses relations avec de nombreuses femmes, ses amitiés avec d'autres artistes et intellectuels, et son engagement politique. Il a passé une grande partie de sa vie en France, où il a créé certaines de ses œuvres les plus célèbres.
            </p>
            <p>
                Picasso a laissé une empreinte indélébile sur l'art moderne. Son approche audacieuse et expérimentale a ouvert de nouvelles voies pour les artistes du XXe siècle et au-delà. Il est largement reconnu comme un génie créatif dont l'influence continue de se faire sentir dans le monde de l'art contemporain.
            </p>

        </div>
        <div class="col-md-6">
            <h3>Auto-portrait de Picasso</h3>
            <img src="picasso.jpg" alt="PicassoPortrait" class="img-fluid">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col text-center">
            <h3>Vidéo à ce sujet</h3>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/JVBwagvBkTc" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
