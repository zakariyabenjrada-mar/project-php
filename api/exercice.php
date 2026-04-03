<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakaria Dev | Projet Fellaha</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f0fdf4;
            color: #064e3b;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: #065f46;
            color: white;
        }

        nav a {
            color: white;
            margin-left: 15px;
            text-decoration: none;
        }

        nav a:hover {
            color: #a7f3d0;
        }

        .hero {
            text-align: center;
            padding: 80px 20px;
            background: url("https://images.unsplash.com/photo-1501004318641-b39e6451bec6") no-repeat center/cover;
            color: white;
        }

        .hero h2 {
            font-size: 2.5rem;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #22c55e;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .section {
            padding: 50px 20px;
            text-align: center;
        }

        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #065f46;
            color: white;
        }

        @media(max-width:600px){
            .hero h2{
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>🌱 Zakaria Fellaha</h1>
    <nav>
        <a href="#">Accueil</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section class="hero">
    <h2>Solutions Agricoles Modernes</h2>
    <p>Projet étudiant en développement web - agriculture intelligente</p>
    <a href="#services" class="btn">Découvrir</a>
</section>

<section id="services" class="section">
    <h2>Nos Services</h2>

    <div class="services">
        <div class="card">
            <h3>Irrigation intelligente</h3>
            <p>Gestion automatique de l’eau pour les cultures</p>
        </div>

        <div class="card">
            <h3>Suivi des cultures</h3>
            <p>Analyse des plantes et rendement agricole</p>
        </div>

        <div class="card">
            <h3>Conseils agricoles</h3>
            <p>Solutions modernes pour améliorer la production</p>
        </div>
    </div>
</section>

<section id="contact" class="section">
    <h2>Contact</h2>
    <p>Email : zakaria.dev@email.com</p>
</section>

<footer>
    <p>© 2026 Projet Fellaha - Zakaria Dev</p>
</footer>

</body>
</html>