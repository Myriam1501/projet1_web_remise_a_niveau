<!-- LIU HAOYUE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Activite</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <style>
        .logo{
            border-radius: 100%;
            width: 90px;
            height: 90px;

        }
        * {
            box-sizing: inherit;
        }

        html {
            box-sizing: border-box;
        }

        .sticky {
            position: sticky;
            will-change: transform;
        }

        .sticky--top {
            top: 0;
        }

        .header {
            padding-block: 0em;
        }
        .header::after {
            bottom: 0;
            box-shadow: 0 0.0625em 0.5em rgba(0, 0, 0, 0.3);
            content: '';
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: opacity 0.3s;
            z-index: -1;
        }

        h1 {
            margin-block: 0 0.5em;
        }

        .navigation__list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .navigation__list--inline {
            display: flex;
            gap: 1.5em;
        }

        .navigation__link {
            font-family: 'Helvetica', sans-serif;
            color: black;
            display: block;
            padding-inline: 1em;
            text-decoration: none;
            cursor: pointer;

        }
        .image{
            text-align:center;
            color:black;
            background-image: url("https://zupimages.net/up/22/43/vdsr.jpg");
            background-size: 100%;
            background-repeat: no-repeat;
            font-family:'Hoefler Text';
            font-weight:600;
            font-size:39px;
            padding-top:10%;
            height: 400px;
            overflow: hidden;
            -webkit-backface-visibility: hidden;
            -webkit-perspective: 1000;
            -webkit-transform: translate3d(0,0,0);
        }

        .text2 {
            display:inline-block;
            overflow:hidden;
            white-space:nowrap;
        }

        .text2:first-of-type {
            animation: showup 7s infinite;
        }

        .text2:last-of-type {
            width:0px;
            animation: reveal 7s infinite;
        }

        .text2:last-of-type span {
            margin-left: -355px;
            animation: slidein 7s infinite;
        }
        @keyframes showup {
            0% {opacity:0;}
            20% {opacity:1;}
            80% {opacity:1;}
            100% {opacity:0;}
        }

        @keyframes slidein {
            0% { margin-left:-800px; }
            20% { margin-left:-800px; }
            35% { margin-left:0px; }
            100% { margin-left:0px; }
        }

        @keyframes reveal {
            0% {opacity:0;width:0px;}
            20% {opacity:1;width:0px;}
            30% {width:355px;}
            80% {opacity:1;}
            100% {opacity:0;width:355px;}
        }
        body{
            background-color:#eee
        }
        .sous_titre{
            margin:50px auto 0 auto;
            max-width:1200px;
            font-family: "Hoefler Text";
            font-size: 40px;
            color: black;
        }
        .sous_titre1{
            margin:50px auto 0 auto;
            max-width:1200px;
            font-family: "Hoefler Text";
            font-size: 20px;
            color: black;
        }
        .wrap
        {
            margin:50px auto 0 auto;
            width:100%;
            display:flex;
            align-items:space-around;
            max-width:1200px;
        }
        .tile
        {
            width:300px;
            height:300px;
            border-radius: 10%;
            margin:10px;
            background-color:#99aeff;
            display:inline-block;
            background-size:cover;
            position:relative;
            cursor:pointer;
            transition: all 0.4s ease-out;
            box-shadow: 0px 35px 77px -17px rgba(0,0,0,0.44);
            overflow:hidden;
            color:white;
            font-family:'Hoefler Text';

        }
        .tile img
        {
            height:100%;
            width:100%;
            position:absolute;
            top:0;
            left:0;
            z-index:0;
            transition: all 0.4s ease-out;
        }
        .tile .text
        {
            position:absolute;
            padding:20px;
            height:calc(100% - 60px);
        }
        .tile h4
        {

            font-weight:300;
            margin:0;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }
        .tile h5
        {
            font-weight:100;
            margin:20px 0 0 0;
            font-style:italic;
            transform: translateX(200px);
        }
        .tile p
        {
            font-weight:300;
            margin:20px 0 0 0;
            line-height: 25px;
            /*   opacity:0; */
            transform: translateX(-200px);
            transition-delay: 0.2s;
        }
        .animate-text
        {
            opacity:0;
            transition: all 0.6s ease-in-out;
        }
        .tile:hover
        {
            /*   background-color:#99aeff; */
            box-shadow: 0px 35px 77px -17px rgba(0,0,0,0.64);
            transform:scale(1.05);
        }
        .tile:hover img
        {
            opacity: 0.2;
        }
        .tile:hover .animate-text
        {
            transform:translateX(0);
            opacity:1;
        }


        .tile:hover span
        {
            opacity:1;
            transform:translateY(0px);
        }
        .part5 {
            position: relative;
            font-family: "Helvetica";
            color: black;
            font-size: 30px;
            line-height: 1.4;
        }

        .texte_centrer {
            position: absolute;
            top: 50%;
            left: 30%;
            transform: translate(-50%, -50%);
        }
        .choix{
            position: absolute;
            top: 50%;
            left: 75%;
            transform: translate(-50%, -50%);
        }
        .don-box{
            border-radius: 5%;
            font-family: Helvetica;
            font-weight: bold;
            background: white;
            border: 1px solid white;
            color: black;
            padding: 5px;
            font-size: 20px;
            margin: 24px 0 12px;
            cursor: pointer;
        }
        .don-box1{
            border-radius: 5%;
            font-family: Helvetica;
            font-weight: bold;
            background: dodgerblue;
            border: 10px solid dodgerblue;
            color: white;
            padding: 5px;
            font-size: 20px;
            margin: 24px 0 12px;
            cursor: pointer;
        }
        .partie7{
            position: relative;
            font-family: "Hoefler Text";
            color: white;
            font-size: 20px;
            line-height: 1.4;
        }
        .text-P7{
            position: absolute;
            top: 50%;
            left: 40%;
            transform: translate(-50%, -50%);
        }
        .logo4{
            border-radius: 100%;
            width: 30px;
            height: 30px;
        }



    </style>

    </head>
<body>
<header class="header sticky sticky--top js-header">
    <table>
        <div class="grid">
            <tr>
                <td><a href=""> <img src="https://zupimages.net/up/22/43/pnqu.png" class="logo"> </a></td>
                <td>
                    <nav class="navigation">
                        <ul class="navigation__list navigation__list--inline">
                            <li>   </li>
                            <li>   </li>
                            <li class="navigation__item"><a href="" class="navigation__link">ACCUEIL </a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">TRANSPORT</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">NOURRITURE</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">MONUMENT</a></li>

                            <li>   </li>
                            <li>   </li>


                        </ul>
                    </nav>
                </td>
            </tr>
        </div>
    </table>
</header>
<?php
if (isset($_GET['abonn_erreur'])){  // Si dans l'en-tête HTTP possède 'Mail_erreur' :
    $erreur = $_GET['abonn_erreur'];  // la variable récupère la contenue de 'Mail_erreur' en utilisant $_GET.
    if ($erreur == 'mail_vide'){  // Premier cas: si 'Mail_erreur' = 'mail_vide', alors on affiche le message suivant.
        ?>
        <div class="alert alert-danger">
            <strong>Erreur </strong> Votre Mail est Vide !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
    }
    ?>
    <?php
    if ($erreur == 'deja_abonne'){ // Le cas suivant : si 'Mail_erreur' = 'deja_abonne', alors on affiche le message suivant.
        ?>
        <div class="alert alert-warning">
            <strong> Attention </strong> vous êtes déjà abonné(e) à notre newsletter !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
    }
    ?>
    <?php
    if ($erreur == 'mail_non_valide'){ // Le cas suivant : si 'Mail_erreur' = 'mail_non_valide', alors on affiche le message suivant.
        ?>
        <div class="alert alert-danger">
            <strong>Erreur </strong> Le format de Votre Mail est non valide !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
    }
    ?>
    <?php
    if ($erreur == 'succes'){ // Le cas suivant : si 'Mail_erreur' = 'succes', alors on affiche le message suivant.
        ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="alert-heading">Félicitation !</h4>
            <p> Merci  <?php echo $_SESSION['Nom']?>, vous êtes abonné(e) à notre newsletter</p>
        </div>
        <?php
    }
    ?>
    <?php
    if($erreur == 'mail_non_existant'){ // Le cas suivant : si 'Mail_erreur' = 'mail_non_existant', alors on affiche le message suivant.
        ?>
        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="alert-heading"> Oups Oups !</h4>
            <p> Pour abonner à notre newsletter, Veilliez connecter avec ce login !! </p>
            <hr>
            <p><a href="" class="btn btn-success"> Connexion </a></p>

        </div>
        <?php
    }

}
?>
<div class="image">
    <div class="text2">TOUS VOTRE ACTIVITES </div>
    <div class="text2">
        <span>A PARIS</span>
    </div>
</div>
<div class="sous_titre">
    Paris : nos visites et activités préférées
</div>

<div class="wrap">
    <div class="tile">
        <img src='https://zupimages.net/up/22/43/7pui.jpg'/>
        <div class="text">
            <h4><a href="reserver.php" style="color:white;"> Versailles : visite du château avec coupe-file et jardins </a></h4>
            <h5 class="animate-text"> </h5>
            <p class="animate-text"> Apprenez-en plus sur les personnages importants
                de la monarchie française, dont Louis XVI et son épouse, Marie-Antoinette.
            </p>
        </div>
    </div>

    <div class="tile">
        <img src='https://zupimages.net/up/22/43/wvgj.jpg'/>
        <div class="text">
            <h4><a href="reserver.php" style="color:white;">  Paris : croisière d'1 h sur la Seine </a></h4>
            <h5 class="animate-text"></h5>
            <p class="animate-text"> Embarquez au pied de la tour Eiffel et commencez votre
                croisière aller-retour sur la Seine. Voguez sous les ponts de Paris, écoutez
                les commentaires sur la ville et les sites qui défilent devant vous.</p>
        </div>
    </div>

    <div class="tile">
        <img src='https://zupimages.net/up/22/43/7143.jpg'/>
        <div class="text">
            <h4> <a href="reserver.php" style="color:white;"> Disneyland Paris : billet d'entrée 1 jour </a></h4>
            <h2 class="animate-text"></h2>
            <p class="animate-text">Venez vous amuser au cœur des différents pays magiques !
                Plongez dans vos univers Disney préférés en revivant leurs histoires.
                Découvrez le lieu où les contes de fées deviennent réalité.  </p>
        </div>
    </div>

    <div class="tile">
        <img src='https://zupimages.net/up/22/43/n5lz.jpg'/>
        <div class="text">
            <h4> <a href="reserver.php" style="color:white;"> Musée du Louvre : billet à entrée programmée </a></h4>
            <h5 class="animate-text"></h5>
            <p class="animate-text">Contemplez des œuvres d'art incontournables et
                emblématiques telles que la Joconde ou la Vénus de Milo. Admirez
                des chefs-d'œuvre de la Renaissance et des reliques égyptiennes
                antiques. </p>
        </div>
    </div>
</div>
<div class="sous_titre">
    Paris de nuit
</div>
<div class="wrap">
    <div class="tile">
        <img src='https://zupimages.net/up/22/43/1ijf.jpg'/>
        <div class="text">
            <h4><a href="reserver.php" style="color:white;"> Paris : visite guidée du cimetière hanté du Père Lachaise </a></h4>
            <h5 class="animate-text"> </h5>
            <p class="animate-text">Découvrez le macabre en explorant le cimetière hanté du Père Lachaise
                avec votre guide. Découvrez les tombes de célébrités et écoutez des histoires fascinantes
                sur les fantômes du cimetière pendant votre exploration.
            </p>
        </div>
    </div>

    <div class="tile">
        <img src='https://zupimages.net/up/22/43/n8d5.jpg'/>
        <div class="text">
            <h4><a href="reserver.php" style="color:white;"> Paris : visite en bus à impériale des illuminations de Noël  </a></h4>
            <h5 class="animate-text"></h5>
            <p class="animate-text"> Vivez la magie de Noël parisienne lors de cette visite en bus à impériale
                découverte. Admirez les bâtiments et les rues de la capitale scintiller aux couleurs de Noël.
            </p>
        </div>
    </div>

    <div class="tile">
        <img src='https://zupimages.net/up/22/43/i75n.jpg'/>
        <div class="text">
            <h4> <a href="reserver.php" style="color:white;">Paris : visite nocturne de 2 h en bus à impériale découverte  </a></h4>
            <h2 class="animate-text"></h2>
            <p class="animate-text">Obtenez un siège au premier rang pour profiter au mieux des attractions
                incontournables telles que la tour Eiffel ou Notre-Dame.
            </p>
        </div>
    </div>

    <div class="tile">
        <img src='https://zupimages.net/up/22/43/8cve.jpg'/>
        <div class="text">
            <h4> <a href="reserver.php" style="color:white;"> Paris : la ville de nuit à bord d’une voiture d’époque  </a></h4>
            <h5 class="animate-text"></h5>
            <p class="animate-text"> Découvrez Paris comme vous ne l’avez jamais vue, vêtue de ses lumières
                nocturnes et parcourez les rues de la ville dans une décapotable française d’époque,
                une Citroën 2 CV !  </p>
        </div>
    </div>
</div>
<div class="sous_titre">
    Cabarets et spectacles
</div>
<div class="wrap">
    <div class="tile">
        <img src='https://zupimages.net/up/22/43/6wgh.jpg'/>
        <div class="text">
            <h4><a href="reserver.php" style="color:white;"> Paris : billet pour l'opéra Garnier </a></h4>
            <h5 class="animate-text"> </h5>
            <p class="animate-text">Découvrez le célèbre opéra Garnier de Paris.
                Bénéficiez de suffisamment de temps et admirez la plus grande salle d'opéra en Europe.
            </p>
        </div>
    </div>

    <div class="tile">
        <img src='https://zupimages.net/up/22/43/ifxa.jpg'/>
        <div class="text">
            <h4><a href="reserver.php" style="color:white;"> Paris : cabaret au Moulin Rouge avec champagne </a></h4>
            <h5 class="animate-text"></h5>
            <p class="animate-text"> Assistez au somptueux spectacle "Féerie" et
                passez un moment inoubliable au Moulin Rouge, cabaret de renommée mondiale. </p>
        </div>
    </div>

    <div class="tile">
        <img src='https://zupimages.net/up/22/43/2wxa.jpg'/>
        <div class="text">
            <h4> <a href="reserver.php" style="color:white;"> Paris : spectacle de cabaret au Crazy Horse </a></h4>
            <h2 class="animate-text"></h2>
            <p class="animate-text"> Laissez-vous séduire par les jeux de lumière subtils d'un spectacle qui
                envoûte le public depuis 1951. Découvrez le glamour et l'impertinence qui sont l'ADN même
                du Crazy Horse Paris lors du spectacle immersif "Totally Crazy".
            </p>
        </div>
    </div>

    <div class="tile">
        <img src='https://zupimages.net/up/22/43/9v6o.jpg'/>
        <div class="text">
            <h4> <a href="reserver.php" style="color:white;"> Paris : cabaret au Paradis Latin avec option champagne </a></h4>
            <h5 class="animate-text"></h5>
            <p class="animate-text">Assistez à nouveau spectacle pensé par le célèbre chorégraphe français Kamel Ouali.
                Profitez d'un spectacle à votre arrivée et pendant le dîner.  </p>
        </div>
    </div>
</div>

<div class="part5">
    <img src="https://zupimages.net/up/21/49/iawp.jpg" alt="image" height="300" width="100%">
    <div class="texte_centrer">
        <b>Abonnez-vous à notre <br>
            newsletter et recevez votre <br>
            dose hebdomadaire <br>
            d’inspiration voyage.</b></div>
    <form action="projetPHP.php" method="post">
        <div class="choix">
            <input type="text" placeholder="Entrez votre Email" maxlength="50" name="email" id="email" class="don-box">
            <button type="submit" class="don-box1">Abonner</button>
        </div>
    </form>
</div>
<div class="sous_titre">
    Questions fréquentes à propos de Paris
</div>
<div class="sous_titre1">
    * Quelles sont les meilleures attractions de Paris ?<br>
    <br>
    Les attractions incontournables de Paris sont :<br>
    La Seine<br>
    Sainte-Chapelle<br>
    Musée du Louvre<br>
    Catacombes de Paris<br>
    Musée Rodin<br>
    <br>
    * Paris : quels sont les incontournables ?<br>
    <br>

    Parmi les choses à ne pas manquer, on trouve :<br>
    Musée du Louvre : billet à entrée programmée <br>
    Paris : croisière d'1 h sur la Seine<br>
    Paris : billet coupe-file pour le toit de l'Arc de Triomphe<br>
    Disneyland Paris : billet d'entrée 1 jour <br>
    Paris : accès complet au château & aux jardins de Versailles<br>
    Paris : voir tous les incontournables <br>
<br>
    * Quelles sont les meilleures excursions depuis Paris ?<br>
    <br>
    Parmi les meilleurs voyages d’une journée, on trouve :<br>
    Château de Versailles<br>
    Voir toutes les excursions depuis Paris<br>

<br><br>
</div>


<div class="partie7">
    <img src="https://zupimages.net/up/21/02/xabk.jpg" alt="image" height="400" width="100%">
    <div class="text-P7">

        <br>
        <br>
        <p> NOTRE MISSION <br>
            La ville de l'amour déploie tant de charmes que même les moins romantiques se laissent
            séduire par sa beauté. Notre mission est de vous guider trouver tous les activities à Paris. </p>
        <hr>
        <br>
        <p> Nous suivre par <br>
            <img src="https://zupimages.net/up/21/49/583n.jpg" width="100px" height="100px" class="logo4">
            <img src="https://zupimages.net/up/21/49/43ac.jpg" width="100px" height="100px" class="logo4">
            <img src="https://zupimages.net/up/21/49/km9v.jpeg" width="100px" height="100px" class="logo4">
            <img src="https://zupimages.net/up/21/49/9tor.jpg" width="100px" height="100px" class="logo4"></p>
        <hr>
    </div>
</div>
</body>


