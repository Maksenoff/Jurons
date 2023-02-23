<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./css/NavStyle.css">
    
    <link rel="stylesheet" href="../view/css/Infraction.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
<!-- ///////////////////////// Nav bar Top //////////////////////////////////////////////-->
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand playfaire text-light" href="../View/Nav.html"><h2>La Boîte à Jurons</h2></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav menu">
                  <a class="nav-link active text-light" aria-current="page" href="#">Infractions</a>
                  <a class="nav-link active text-light" aria-current="page" href="#">Statistiques</a>
                  <a class="nav-link active text-light" aria-current="page" href="#">Historique</a>
                </div>
                <button class="btnav"> Login
                </button>
                <button class="btnav"> Sign Up
                </button>
              </div>
            </div>
          </nav>

<!-- ///////////////////////// Tableau //////////////////////////////////////////////-->

    <?php session_start(); ?>

    <!-- ////////////////////// Tableau 1 /////////////////-->

<table class = "radioGaga">
    
      <tr>

      <th id="tlCorner"> <input type="radio" id="pj" value="pj" name="inf"> 
      <label for="" >Petit Juron</label> </th>

      <th> <input type="radio" id="gj" value="gj" name="inf"> 
      <label for="" >Gros Juron</label> </th>

      <th> <input type="radio" id="ge" value="ge" name="inf"> 
      <label for="">Geste</label> </th>
      
      <th> <input type="radio" id="ro" value="ro" name="inf"> 
      <label for="">Rôt</label> </th>


        <th id="re"> <label for="" name="nb">Retard</label> 
        <select name="nb" id="nb">

        <option value=0>0</option>
        <option value=5>5</option>
        <option value=10>10</option>
        <option value=15>15</option>
        <option value=20>20</option>
        <option value=25>25</option>
        <option value=30>30</option>
        <option value=35>35</option>
        <option value=40>40</option>
        <option value=45>45</option>
        <option value=50>50</option>
        <option value=55>55</option>
        <option value=60>60</option>

        </select> </th>

        <th id = trCorner> 

     <!-- ////////////// Button //////////////-->

        <div id="holder">

        <div class="button">

              <p class="btnText">Valider</p>

        <div class="btnTwo">

              <p class="btnText2">✓</p>
        </div>
        </div>
        </div>

        </th>

      </tr>
      


</table>

 <!-- ////////////////////// Tableau 2 /////////////////-->
<section>
<table class = "infraUser scroller">

<tr>
    <th id = nom> Nom </th>
    <th> Prénom </th>
    <th> Solde </th>
    <th> </th>
</tr>

<tr>
    <td>CARON</td>
    <td>Baptiste</td>
    <td>2,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>Dorme</td>
    <td>Paul</td>
    <td>4,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>ICHA</td>
    <td>Maksen</td>
    <td>8,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>Kaou</td>
    <td>Thar</td>
    <td>3,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>CARON</td>
    <td>Baptiste</td>
    <td>2,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>Dorme</td>
    <td>Paul</td>
    <td>4,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>ICHA</td>
    <td>Maksen</td>
    <td>8,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>Kaou</td>
    <td>Thar</td>
    <td>3,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>CARON</td>
    <td>Baptiste</td>
    <td>2,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>Dorme</td>
    <td>Paul</td>
    <td>4,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>ICHA</td>
    <td>Maksen</td>
    <td>8,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>Kaou</td>
    <td>Thar</td>
    <td>3,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>CARON</td>
    <td>Baptiste</td>
    <td>2,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>Dorme</td>
    <td>Paul</td>
    <td>4,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr>
    <td>ICHA</td>
    <td>Maksen</td>
    <td>8,00€</td>
    <td><input type="checkbox"></td>
</tr>

<tr id = "bottomCorner">
    <td id = "blCorner">Kaou</td>
    <td>Thar</td>
    <td>3,00€</td>
    <td id = "brCorner"><input type="checkbox"></td>
</tr>
  </table>
</section>



        <!-- <?php for ($i=0; $i < sizeof($_SESSION['utilisateur']); $i++) { 

           echo 'tr class ="">';
           echo 'td class ="">'.$_SESSION['utilisateur'][$i]['nom'];
           echo 'td class ="">'.$_SESSION['utilisateur'][$i]['prenom'];
           echo 'td class ="">'.$_SESSION['utilisateur'][$i]['solde'];

        }?>
    -->
  

   <!-- ///////////////////////// Nav bar Bottom //////////////////////////////////////////////-->

    <nav class="navbar fixed-bottom navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link ms-5" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg> Instagram</a><a class="nav-link ms-5" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg> Twitter</a></ul>
                    <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarNav">
                  </li>
                  <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link me-5" href="#">Service Client</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-5" href="../View/Paiement.html">Faire un Don</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-5" href="#">Conditions générales d'utilisation</a>
                  </li>
                </ul>
              </div>
              </div>
            </div>
          </nav>
</body>
</html>