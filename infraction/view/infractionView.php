<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>

    <table class = infraction>
        <thead>
            <th>Petit Juron</th>
            <th>Gros Juron</th>
            <th>Geste</th>
            <th>Rôt</th>
            <th>Retard</th>
        </thead>
        <tbody>
        <?php for ($i=0; $i < count($_SESSION['infraction']); $i++) { 
           echo 'tr class ="">';
           echo 'td class ="">'.$_SESSION['infraction'][$i]['nom'];
           echo 'td class ="">'.$_SESSION['infraction'][$i]['prenom'];
           echo 'td class ="">'.$_SESSION['infraction'][$i]['solde'];
        }?>
        </tbody>
    </table>
</body>
</html>