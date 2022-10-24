<!-- LIU HAOYUE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Réservation</title>
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
        body{
            margin:0;
            padding:0;
            font-family: "Hannotate SC";
            background: url("https://zupimages.net/up/22/43/mn5q.jpg") no-repeat center center;
            height: 100vh;
            background-size: cover;
        }
        .login-box{
            width: 450px;
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: white;
            background-color: rgba(0,0,0,0.5);
            padding: 0rem 2rem 3rem;
        }
        .login-box h1{
            float: left;
            font-size: 2.7rem;
            border-bottom: 4px solid indianred;
            margin-bottom: 3rem;
            padding: 0.3rem 0;
        }
        .txt-box{
            width: 100%;
            overflow: hidden;
            font-size: 1.2rem;
            padding: 0rem 0;
            margin: 1.4rem 0;
            border-bottom: 1px solid indianred;
        }
        .txt-box i{
            width: 1.6rem;
            float: left;
            text-align: center;
        }
        .txt-box input{
            border: none;
            outline: none;
            background: none;
            color: white;
            font-size: 1.1rem;
            width: 80%;
            float: left;
            margin: 0 10px;

        }
        .submit-box{
            width: 100%;
            background: none;
            border: 1px solid indianred;
            color: white;
            padding: 5px;
            font-size: 1rem;
            margin: 24px 0 12px;
            cursor: pointer;

        }
        .connex{
            color: white;
        }
        .entete{
            color: black;
            font-family: "Hoefler Text";
            font-size: 30px;
            padding-right: 10px;
        }
        .entete1{
            color: black;
            font-family: "Hoefler Text";
            font-size: 30px;
            padding-right: 30px;
        }
    </style>
</head>

<body>
<div>
    <a href="Projet.php"><img src="https://zupimages.net/up/22/43/pnqu.png" class="logo" align="left"> </a>

</div>

<form id="reserve" action="reservePHP.php" method="post">
    <div class="login-box">
        <h1> Reservation </h1>
        <div class="txt-box">
            <input type="text" placeholder="Votre nom " name="nom" id="nom" autocomplete="off" required>
        </div>
        <div class="txt-box">
            <input type="text" placeholder="Votre prenom" name="pn" id="pn" autocomplete="off" required>
        </div>
        <div class="txt-box">
            <input type="date" placeholder="Selectionner une date" name="DE" id="DE" autocomplete="off" required>
        </div>
        <div class="txt-box">
            <input type="text" placeholder="Nombre de participants Adults" name="NA" id="NA" autocomplete="off" required>
        </div>
        <div class="txt-box">
            <input type="text" placeholder="Nombre de participants Enfants" name="NE" id="NE" autocomplete="off" required>
        </div>
        <div class="txt-box">
            <input type="text" placeholder="Votre Email" name="email" id="email" autocomplete="off" required>
        </div>

        <table>
            <tr>
                <td> <input type="reset" class="submit-box" value="Effacer" name="effacer">
                    <button type="submit" class="submit-box"> Entrer </button> </td>
            </tr>
        </table>
        <hr>
        <p align="center"> Les personnes de 2 ans et moins n’ont pas besoin de billet. </p>
        <hr>
        <p align="center"></p>

    </div>
</form>

</body>



