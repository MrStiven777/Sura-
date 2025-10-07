<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasarela Sarlaft</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-XxNLWSzCxOe/CFcHcAiJAZ7LarLmw3f4975gOO6QkxvULbGGNDoSOTzItGUG++Q+" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../../assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../../scss/primero.css">
    <link rel="stylesheet" href="../../../scss/segundo.css">
    <link rel="stylesheet" href="../../../scss/tercera.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js"></script>
</head>

<body>
    <header class="header h3hptaaa">
        <div class="container">
            <nav class="navbar flex-column flex-lg-row p-0 pr-0">
                <a href="index.html#" class="navbar-brand align-self-center align-self-lg-end p-0 m-0">
                    <div class="main-logo"></div>
                </a>
            </nav>
        </div>

        <div>
            <div class="dvSpacio"></div>
        </div>
    </header>
    <br>
    <br>
    <div class="container ookokokodasfdas">
        <div>
            <div class="d-flex"></div>
            <div class="container text-center centroHptakjsd">
                <div class="roboton">
                    <h4>¡Muchas gracias! Ya casi terminas</h4>
                    <p><b>Ahora te invitamos a continuar con el Pago</b></p>
                    <img src="../../../assets/thank_you_icon.svg" alt="">
                </div>
                <button class="button" id="irAlPagoMelo">Continuar pago</button>
            </div>
        </div>
    </div>

    <footer class="footer footerjkasds">
        <div class="container">
            <div class="row pt-3 pb-3">
                <div class="niideamanito col-12 col-lg-6 footer-container_border-right d-flex align-items-center justify-content-center align-items-lg-center justify-content-lg-end">
                    <p class="mb-0"> Copyright © 2025. Todos los derechos reservados </p>
                </div>
                <div class="niideamanito2 col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-start flex-column flex-lg-row mt-3 mt-lg-0">
                    <p class="pr-2 mb-0"> Contamos con el certificado de seguridad: </p>
                    <div class="list-inline">
                        <figure class="list-inline-item">
                            <img src="../../../assets/security_badge.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        $("#irAlPagoMelo").on("click", function() {
            window.location.href = "../../../soat/digital/pago/";
        });
    </script>
</body>

</html>