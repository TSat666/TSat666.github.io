<html>
    <head>
        <title>Portfolio - Accueil</title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    </head>
    <body>
        <header>
            <?php include_once 'header.inc.php'; ?>
        </header>
        <h1>Bienvenue sur mon Portfolio :</h1>
        <div id="presentation">
            <div>
                <h2>Nom : Pupier</h2>
            </div>
            <div>
                <h2>Prénom : Tristan</h2>
            </div>
            <img src="Images/me.jpg" alt="Une photo de Moi">
            <h3>Qui suis-je ?</h3>
            <p>Bonjour et bienvenue sur mon Portfolio de mes deux années de BTS SIO (Services Informatiques aux Organisations) en option SLAM (Solutions Logicielles et Applications Métiers).</p>
            <p>Je suis un étudiant de 20 ans au Lycée Ella Fitzgerald à Saint-Romain-En-Gal qui a obtenu un baccalauréat général options Mathématiques et Numériques Sciences de l'Informatique (NSI).</p>
            <p>J'ai fait mes deux stages (Un en première année et un autre en deuxième année) de 6 semaines dans une entreprise se nommant SOFT&CO et se trouvant à Vienne.</p>
            <p>Depuis le plus loin que je puisse me souvenir, j'ai toujours aimé l'informatique ainsi que la logique qui en suit et je voulais toujours en apprendre plus dans ce domaine. C'est pour ça que j'ai décidé de faire ce BTS et cette option.</p>
            <p>Je vous présenterai dans une autre l'entreprise où j'ai fait mes deux <a href="stage.php">stages</a> et les <a href="projets.php">projets</a> que j'ai effectué durant mon stage ainsi que pendant mes deux années de BTS.</p>
            <p>Après ce BTS, je souhaite continuer mes études pour devenir Développeur Full-Stack.</p>
        </div>
        <div id="competences">
            <h2>Mes Compétences</h2>
            <div style="display:grid; grid-auto-flow:column;">
                <img src="Images/html.png" alt="Compétence HTML" width="300">
                <img src="Images/csharp.jpg" alt="Compétence CSharp" width="500">
                <img src="Images/php.jpg" alt="Compétence PHP" width="500">
            </div>
            <div style="display:grid; grid-auto-flow:column;">
                <img src="Images/sql.jpg" alt="Compétence SQL" width="500">
                <img src="Images/typescript.jpg" alt="Compétence TypeScript" width="500">
                <img src="Images/visual_studio.jpg" alt="Compétence Visual Studio" width="500">
            </div>
            <div style="display:grid; grid-auto-flow:column;">
                <img src="Images/vs_code.jpg" alt="Compétence Visual Studio Code" width="500">
                <img src="Images/postman.jpg" alt="Compétence PostMan" width="500">
                <img src="Images/linux_ubuntu.jpg" alt="Compétence Linux Ubuntu" width="500">
            </div>
            <div style="display:grid; grid-auto-flow:column;">
                <img src="Images/nestjs.jpg" alt="Compétence Nest JS" width="500">
                <img src="Images/next_js.jpg" alt="Compétence Next JS" width="500">
                <img src="Images/react.jpg" alt="Compétence React" width="500">
            </div>
        </div>
        <div id="veille">
            <h2>Sujets de Veille Informatique :</h2>
            <p>Je m'informe souvent sur les dernières mises à jours des différents systèmes d'exploitation comme les différentes versions de Linux ou Windows.</p>
            <p>Je m'informe également sur les dernières failles de sécurité et sur les dernières fuites de données.</p>
            <h2>Outils de Veille Informatique :</h2>
            <img src="Images/flipboard.png" alt="FlipBoard" width="300">
            <br>
            <img src="Images/feedly.png" alt="Feedly" width="300">
        </div>
    </body>
</html>