<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/loginInscription.css">


    <title>Inscription</title>
</head>

<body>






    <section class="vh-100 mt-5">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">



                <div class="col-md-9 col-lg-6 col-xl-4">
                    <img src="./image/fou.png" class="img-fluid rounded-circle" alt="Sample image">
                </div>



                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 bg-dark-subtle border border-3">
                    <form>

                        <h1 class=" d-flex justify-content-center">Inscription</h1>

                        <!-- nom input -->
                        <div class="form-outline mb-3 mt-5">
                            <input type="nom" id="form3Example3" class="form-control form-control-lg" required
                                placeholder="Votre nom" />
  
                        </div>

                        <!-- prenom input -->
                        <div class="form-outline mb-3">
                            <input type="prenom" id="form3Example3" class="form-control form-control-lg" required
                                placeholder="Votre prenom" />

                        </div>

                        <!-- pseudo input -->
                        <div class="form-outline mb-3">
                            <input type="pseudo" id="form3Example3" class="form-control form-control-lg" required
                                placeholder="Votre pseudo" />

                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-3">
                            <input type="email" id="form3Example3" class="form-control form-control-lg" required
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