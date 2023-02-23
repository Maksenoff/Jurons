<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/infractionStyle.css">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>

<table class = "radioGaga">
    
      <th> <input type="radio" id="pj" value="pj" name="inf"> 
      <label for="">Petit Juron</label> </th>

      <th> <input type="radio" id="gj" value="gj" name="inf"> 
      <label for="">Gros Juron</label> </th>

      <th> <input type="radio" id="ge" value="ge" name="inf"> 
      <label for="">Geste</label> </th>
      
      <th> <input type="radio" id="ro" value="ro" name="inf"> 
      <label for="">Rôt</label> </th>
      
      <th> <input type="radio" id="re" value="re" name="inf"> 
      <label for="">Retard</label> </th>
      

</table>

<table class = "infraUser">

        <?php for ($i=0; $i < count($_SESSION['utilisateur']); $i++) { 

           echo 'tr class ="">';
           echo 'td class ="">'.$_SESSION['utilisateur'][$i]['nom'];
           echo 'td class ="">'.$_SESSION['utilisateur'][$i]['prenom'];
           echo 'td class ="">'.$_SESSION['utilisateur'][$i]['solde'];

        }?>
   
    </table>
</body>
</html>