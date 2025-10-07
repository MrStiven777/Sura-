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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../../../scss/primero.css">
    <link rel="stylesheet" href="../../../scss/segundo.css">
    <link rel="stylesheet" href="../../../scss/addClass.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js"></script>
    <script>
        $(document).ready(function() {
            const today = new Date();
            const day = String(today.getDate()).padStart(2, '0');
            const month = String(today.getMonth() + 1).padStart(2, '0');
            const year = today.getFullYear();
            const formattedDate = `${day}-${month}-${year}`;

            $('#datepicker').val(formattedDate);

            $('#datepicker').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
                todayHighlight: true,
                orientation: 'bottom',
                startDate: 'today',
                endDate: '+2w',
                language: 'es',
            });
        });
    </script>
    <script src="../../../js/animaciones.js"></script>
    <script src="../../../js/datos.js"></script>
    <script src="../../../js/jquery.alphanum.js"></script>
    <script src="../../../js/logicaDatos.js"></script>
</head>

<body>
    <main>
        <componente-header size="100%">
            <div class="header">
                <style>
                    .header {
                        background: var(--background-header);
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
                                                    <i class="fas nikefa fa-xs"></i>
                                                </span>
                                                <button class="d-md-inline-block step-one-btn">Cotización</button>
                                            </div>
                                        </li>
                                        <li class="mr-1 mr-md-4">
                                            <div class="d-flex">
                                                <span class="mr-md-1 step-one-span">2</span>
                                                <button class="d-md-block step-one-btn">Datos</button>
                                            </div>
                                        </li>
                                        <li class="mr-1 mr-md-4">
                                            <div class="d-flex">
                                                <span class="mr-md-1 step-inactive-span">3</span>
                                                <button class="d-md-block step-inactive-btn">Pago</button>
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
                <div class="horizontal-nav">
                    <div>

                    </div>
                </div>
            </div>
        </componente-header2>

        <componente-principal>
            <div class="container min-height-vh mb-md-5 pt-3">
                <form>
                    <div class="row">
                        <div class="col-12 col-md col-lg-8">
                            <info>
                                <div class="infovehi d-flex justify-content-center justify-content-md-between text-white w-100 mb-3">
                                    <div class="col-auto pl-4 mr-4 my-auto infovehi1">
                                        <h4 class="infovehih4"> PLACA
                                            <div class="verificarPlac">
                                                <script src="https://kit.fontawesome.com/1c594bb82f.js" crossorigin="anonymous"></script>
                                                <i class="fa-regular fa-circle-question"></i>
                                                <span class="avisoVerificar">Verifica que tu placa esté correcta</span>
                                            </div>
                                        </h4>
                                        <span id="valuePlaca" class="spanPlaca"></span>
                                    </div>
                                    <div class="col-auto d-none d-md-block my-auto">
                                        <h4 class="h4mark">MARCA</h4>
                                        <span id="marca" class="marcavehi"></span>
                                    </div>
                                    <div class="col-auto d-none d-md-block my-auto">
                                        <h4 class="h4mark">LÍNEA</h4>
                                        <span id="linea" class="marcavehi"></span>
                                    </div>
                                    <div class="col-auto d-none d-md-block my-auto mr-5">
                                        <h4 class="h4mark">MODELO</h4>
                                        <span id="modelovehic" class="marcavehi"></span>
                                    </div>
                                </div>
                            </info>
                            <div class="row">
                                <div class="col-12 col-sm-10 mx-auto col-lg-6">
                                    <form>
                                        <h3 class="datosdelvehi mb-4 pb-3">Datos del vehículo:</h3>
                                        <div class="py-3 px-4 mb-4 vijaja">
                                            <label class="px-2 font-weight-bold veilabel">Información del vehículo</label>
                                            <ul class="infocuadrohprta">
                                                <li class="d-block d-md-none">
                                                    <strong>Marca: </strong>
                                                    <span id="marcaMovil"></span>
                                                </li>
                                                <li class="d-block d-md-none">
                                                    <strong>Linea: </strong>
                                                    <span id="lineaMovil"></span>
                                                </li>
                                                <li class="d-block d-md-none">
                                                    <strong>Modelo: </strong>
                                                    <span id="modelovehicMovil"></span>
                                                </li>
                                                <li>
                                                    <strong>Tipo servicio: </strong>
                                                    <span id="typeOfService">PARTICULAR</span>
                                                </li>
                                                <li>
                                                    <strong>Clase:</strong>
                                                    <span id="classVehi"></span>
                                                </li>
                                                <li>
                                                    <strong>Cilindraje:</strong>
                                                    <span id="cilindrajeDeEsaMonda"></span>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-12 col-sm-10 mx-auto col-lg-6 mt-4 mt-md-0">
                                    <div class="dtomador">
                                        <h3 class="dtomadorh3 d-flex justify-content-between mb-4 pb-3">Datos del tomador
                                            <div class="verificarPlac2">
                                                <script src="https://kit.fontawesome.com/1c594bb82f.js" crossorigin="anonymous"></script>
                                                <i class="fa-regular fa-circle-question"></i>
                                            </div>
                                        </h3>
                                        <div class="mb-3 position-relative">
                                            <div class="d-flex align-items-center fechahptas position-relative">
                                                <input class="py-2 px-3 datepickerClass cf1" type="text" id="datepicker" placeholder="DD-MM-AAAA">
                                                <label class="mx-2 px-2 mb-0 fechahptaslabel" for="datepicker">Fecha inicio de vigencia del SOAT</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <div class="d-flex align-items-center fechahptas position-relative">
                                                <select class="py-2 px-3 datepickerClass cf" type="text" id="typeDocument">
                                                    <option disabled selected>Tipo de identificación</option>
                                                    <option value="CC"> Cédula de ciudadanía </option>
                                                    <option value="CE"> Cédula de extranjería </option>
                                                    <option value="NIT"> NIT </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <div class="d-flex align-items-center fechahptas position-relative">
                                                <input class="py-2 px-3 datepickerClass cf" type="text" id="numeroDni" maxlength="10" inputmode="numeric">
                                                <label class="mx-2 px-2 mb-0 labelDni2" for="numeroDni">Número de identificación</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <div class="d-flex align-items-center fechahptas position-relative">
                                                <input class="py-2 px-3 datepickerClass cf" type="text" id="firstName" maxlength="20">
                                                <label class="mx-2 px-2 mb-0 labelDni5" for="numeroDni">Nombres</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <div class="d-flex align-items-center fechahptas position-relative">
                                                <input class="py-2 px-3 datepickerClass cf" type="text" id="lastName" maxlength="20">
                                                <label class="mx-2 px-2 mb-0 labelDni6" for="lastName">Apellidos</label>
                                            </div>
                                        </div>

                                        <div class="mb-3 position-relative">
                                            <div class="d-flex align-items-center fechahptas position-relative">
                                                <input class="py-2 px-3 datepickerClass cf" type="text" id="ciudadDeCir" maxlength="15">
                                                <label class="mx-2 px-2 mb-0 labelDni8" for="ciudadDeCir">Ciudad de circulación</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <div class="d-flex align-items-center fechahptas position-relative">
                                                <input class="py-2 px-3 datepickerClass cf" type="text" id="direccionDeR" maxlength="30">
                                                <label class="mx-2 px-2 mb-0 labelDni9" for="direccionDeR">Dirección de residencia</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <div class="d-flex align-items-center fechahptas position-relative">
                                                <input class="py-2 px-3 datepickerClass cf" type="text" id="telephone" maxlength="10" inputmode="numeric">
                                                <label class="mx-2 px-2 mb-0 labelDni10" for="telephone">Celular</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <div class="d-flex align-items-center fechahptas position-relative">
                                                <input class="py-2 px-3 datepickerClass cf" type="text" id="emailCorreo" maxlength="30">
                                                <label class="mx-2 px-2 mb-0 labelDni11" for="emailCorreo">Correo electrónico</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-10 mx-auto col-lg-4">
                            <div class="cuadroPagar">
                                <div class="tarifamalparida d-none d-md-block p-3">
                                    <div class="descuentodurohpta">
                                        <div class="cajitaprecio d-flex justify-content-between">
                                            <p class="font-weight-bold mb-0">VALOR A PAGAR</p>
                                            <span style="display: flex;">$<p id="precio" class="font-weight-bold mb-0"></p></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="tyc custom-control custom-checkbox mb-md-0">
                                    <input type="checkbox" class="custom-control-input">
                                    <label for="tyc" class="custom-control-label tycmalparido"></label>
                                    <div class="parrafoTarifa mb-0" style="margin-top: -25px;">
                                        <p style="margin-top: 0;
    margin-bottom: 1rem;">Autorizo a&nbsp;SURAMERICANA S. A., en calidad de responsable, el tratamiento de mis datos personales, incluso los biométricos y de salud que son sensibles, con la finalidad de vincularme como cliente. Asimismo, el envío de información, ofertas comerciales y publicitarias, la transferencia o transmisión a terceros en Colombia o exterior y las demás finalidades de la política de privacidad disponible en . Sé que en ella se encuentran el listado de terceros con quienes se comparte información y mis derechos a conocer, actualizar, rectificar, revocar o suprimir mis datos y a solicitar prueba de la autorización. También tengo conocimiento acerca de que, por los canales de contacto establecidos en el sitio web antes mencionado o por el correo electrónico , puedo ejercer mis derechos.
                                        </p>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" class="button-secondary d-none d-md-block quote-button" disabled>Comprar</button>
                                </div>

                                <div class="d-flex justify-content-center align-items-center d-md-none precioFijo">
                                    <div class="d-flex flex-column justify-content-center align-items-center h-100 w-100 preciof2">
                                        <button type="button" class="btnpreciomov d-block d-md-none" disabled>
                                            <b _ngcontent-serverapp-c97="">Comprar por</b>
                                            <span>$<span id="precioMovil"></span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </componente-principal>

        <componente-footer>
            <style>
                .logo {
                    width: 64px;
                    height: 43px;
                    display: inline-block;
                    background: var(--url-logo-footer) no-repeat
                }

                .footer-terms {
                    font-family: var(--font-family-din-regular)
                }

                .link-terms {
                    color: #fff
                }

                .link-terms:hover {
                    color: #fff
                }

                .footer-container {
                    background: var(--quarter);
                    color: white;
                    padding: 2rem 0px
                }

                @media(min-width: 960px) {}

                @media(min-width: 960px) {}

                hr {
                    border-color: white
                }

                .medio-de-pago__logo {
                    display: inline-block;
                    background: var(--url-logo-medio-pago-footer) no-repeat;
                    width: 332px;
                    height: 28px
                }
            </style>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <footer class="footerhpta">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <div class="d-none d-md-flex align-items-center">
                            <div class="m-0 mr-2 div787" style="font-size:0.875rem">Contamos con el certificado de seguridad</div>
                            <i class="loganhptafooter"></i>
                        </div>
                        <div class="d-flex align-items-md-center flex-column flex-md-row text-left">
                            <p class="m-md-0 pr-0 pr-md-2">Medios de pago:</p>
                            <i class="loganhptafoo"></i>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-start flex-column flex-md-row">
                        <div class="text-center bobohptaaaaa" style="font-size: 0.8125rem;">© 2025 SURA. Todos los derechos reservados
                            <span class="d-none d-md-inline-block">|</span>
                        </div>
                        <div class="text-center ahp0823" style="font-size: 0.8125rem;">
                            <a class="ml-1 d-block d-md-inline-block" href="index.html#">Políticas de uso y seguridad</a>
                            <span class="d-none d-md-inline-block">|</span>
                            <a class="d-md-inline-block" href="index.html#">Política de privacidad y ley de datos personales</a>
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

        <!-- addClass "show" para mostrar fondoNegro -->

        <style>
            .displayBlock {
                display: block !important;
            }

            .displayNone {
                display: none !important;
            }
        </style>

        <div id="fondoNegro" class="modal-backdrop fade displayNone"></div>
        <div id="modalPlacaTasSeguro" class="d-block modal fade displayNone">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <button id="cerrarModalManito" class="close position-absolute">
                        <i class="fal fa-times"></i>
                    </button>
                    <div class="modal-body d-flex flex-column align-items-center justify-content-center d-md-block mb-2 mb-md-1 pb-md-4 px-5 pt-4 pb-2">
                        <div class="modalCenter">
                            <h5>Estás comprando el SOAT para esta placa:</h5>
                            <div class="mb-4 mt-4 w-50 mx-auto placaModalDiv">
                                <span id="placaModalAgain"></span>
                            </div>
                            <p class="mb-1">Si esta no es tu placa, te invitamos a cotizar e ingresar de nuevo los datos con la información correcta.</p>
                            <div class="botonesModal">
                                <button id="btnBackModal" class="py-2 px-4 mt-3 d-block d-md-inline-flex btn1modal">Cotizar con otra placa</button>
                                <button id="btnConfirmarModal" class="mt-3 ml-3 btn2modal">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>