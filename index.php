<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="sweetalert2.min.css">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- CUSTOM  -->
    <link rel="stylesheet" href="css/main.css">

    <title>CONTROL DE ASISTENCIA - OEK</title>
</head>

<body>

    <section class="section-login" id="login">
        <h2 class="text-center title--login">PAGINA PRINCIPAL</h2>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-lg-6">
                    <div id="login-box" class="col-md-12 bg-ligth-text-dark">
                        <form id="formLogin" action="" method="post" class="form">
                            <h3 class="text-center title--form">Iniciar Sesion</h3>
                            <div class="form-group mb-4 div--form">
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
                            </div>
                            <div class="form-group div--form">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="form-group text-center mt-4">
                                <input type="submit" name="submit" id="btnSubmit" class="btn btn-dark btn-lg btn-block" value="Conectar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Option:  SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.3/dist/sweetalert2.all.min.js"></script>

    <!-- Option:  Jquery -->
    <script src="jquery/jquery-3.3.1.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="popper/popper.min.js"></script>

    <!-- Option 2: JS -->
    <script src="js/main.js"></script>

</body>

</html>