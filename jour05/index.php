<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de joueur</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tektur:wght@400..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>
        Bienvenue sur le tictactoe !
    </h1>

    <div class="joueurs">
        <form action="traitement_joueurs.php" method="post">
            <label for="player1">
                Joueur 1 :
            </label>
            <input type="text" id="player1" name="player1" required>
            <br>
            <label for="player2">
                Joueur 2 :
            </label>
            <input type="text" id="player2" name="player2" required>
            <br>
            <input class="envoyer" type="submit" value="Jouer">
        </form>
    </div>
</body>
</html>

