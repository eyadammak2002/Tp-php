<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire d'ajout</h1>
    <form action="ajoutGet.php" method="GET">
        <!-- code :<br>
        <input type="text" name="code"><br><br>
        -->
        <label for="code">code :</label><br>
        <input type="text" name="code"><br><br>

        <label for="intitule">intitulé :</label><br>
        <input type="text"  name="intitule"><br><br>
         
        
        <label for="coefficient">Coefficient :</label><br>
        <input type="text" id="coefficient" name="coefficient"><br><br>
        
      
        
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
