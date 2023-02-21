<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">


    <title>Login</title>
</head>

<body>


    <section class="vh-100 mt-5">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">



                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="./image/Carte.png" class="img-fluid" alt="Sample image">
                </div>



                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 bg-dark-subtle border border-3">
                    <form>

                        <h1 class=" d-flex justify-content-center">Connexion</h1>


                        <!-- Email input -->
                        <div class="form-outline mb-4 mt-5">
                            <input type="email" id="form3Example3" class="form-control form-control-lg " required
                                placeholder="Votre adresse mail" />

                        </div>


                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg" required
                                placeholder="Votre mot de passe" />
      
                        </div>



                        <div class="text-center text-lg-start mt-4 pt-2 mb-2 d-flex justify-content-center">
                            <button type="button" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Ok</button>
                        </div>

                        

                        <div class="d-flex justify-content-center mt-2 mb-2 ">
                            <a href="./MDP_Oublié.php" class="text-body">Mot de passe oublié</a>
                        </div>
                        <div class="d-flex justify-content-center mt-2 mb-2 ">
                            <a href="./inscription.php" class="text-body">Créer un compte</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        </div>
    </section>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>