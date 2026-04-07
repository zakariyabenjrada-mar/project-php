<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakaria Dev | Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #0f172a;
            color: white;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: #1e293b;
        }

        header h1 {
            color: #38bdf8;
        }

        nav a {
            color: white;
            margin-left: 15px;
            text-decoration: none;
        }

        nav a:hover {
            color: #38bdf8;
        }

        .hero {
            text-align: center;
            padding: 80px 20px;
        }

        .hero h2 {
            font-size: 2.5rem;
        }

        .hero p {
            margin: 15px 0;
            font-size: 1.2rem;
            color: #94a3b8;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #38bdf8;
            color: black;
            text-decoration: none;
            border-radius: 5px;
        }

        .section {
            padding: 50px 20px;
            text-align: center;
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background: #1e293b;
            padding: 20px;
            border-radius: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #1e293b;
            margin-top: 20px;
        }

        /* Responsive */
        @media(max-width: 600px) {
            .hero h2 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Zakaria Dev</h1>
    <nav>
        <a href="exercice.php">Accueil</a>
        <a href="php.php">Projets</a>
        <a href="gestion.php">Contact</a>
        
    </nav>
</header>

<section class="hero">
    <h2>Salut, je suis Zakaria 👋</h2>
    <p>Développeur débutant (1ère année) passionné par le web</p>
    <a href="#projects" class="btn">Voir mes projets</a>
</section>

<section id="projects" class="section">
    <h2>Mes Projets</h2>
    <div class="projects">
        <div class="card">
            <h3>Projet 1</h3>
            <p>Site HTML/CSS simple</p>
        </div>

        <div class="card">
            <h3>Projet 2</h3>
            <p>Application JavaScript</p>
        </div>

        <div class="card">
            <h3>Projet 3</h3>
            <p>Mini projet étudiant</p>
        </div>
    </div>
</section>

<section id="contact" class="section">
    <h2>Contact</h2>
    <p>Email : zakaria.dev@email.com</p>
</section>

<footer>
    <p>© 2026 Zakaria Dev - Tous droits réservés</p>
</footer>

</body>
</html>