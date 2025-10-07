<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAT - Seguro Obligatorio</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-XxNLWSzCxOe/CFcHcAiJAZ7LarLmw3f4975gOO6QkxvULbGGNDoSOTzItGUG++Q+" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../../assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../../scss/segundo.css">
    <link rel="stylesheet" href="../../../scss/primero.css">
    <link rel="stylesheet" href="../../../scss/addClass.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../../js/animaciones.js"></script>
    <script src="../../../js/jquery.alphanum.js"></script>
    <script src="../../../js/logicaNew.js"></script>
    
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
                                                <span class="mr-md-1 step-one-span">1</span>
                                                <button class="d-md-inline-block step-one-btn">Cotización</button>
                                            </div>
                                        </li>
                                        <li class="mr-1 mr-md-4">
                                            <div class="d-flex">
                                                <span class="mr-md-1 step-inactive-span">2</span>
                                                <button class="d-md-block step-inactive-btn">Datos</button>
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

        <btn-nav>
            <div>
                <button class="d-lg-none p-0 btnNavMovil">
                    <span class="deiv">
                        <span></span>
                    </span>
                </button>
            </div>
        </btn-nav>

        <componente-header2>
            <div>
                <div class="horizontal-nav">
                    <div>
                        <div class="container px-0 px-lg-3 d-flex justify-content-between flex-column flex-lg-row navbar-products mt-5 pt-1 pt-lg-0 mt-lg-0">
                            <div class="flex-fill d-none d-lg-block active-nav-div">
                                <a class="py-2 px-3 w-100 active-nav-link" href="index.html#"> SEGUROS </a>
                            </div>
                            <div class="flex-fill">
                                <div class="correccionDeColor">
                                    <a class="py-2 px-3 w-100 normal-nav-link" href="index.html#"> Inicio </a>
                                </div>
                            </div>
                            <div class="flex-fill">
                                <div>
                                    <button class="py-2 px-3 w-100 nav-button">
                                        <span class="dropdown-label">Seguro para personas</span>
                                    </button>
                                </div>
                            </div>
                            <div class="flex-fill">
                                <div class="flex-fill position-relative">
                                    <button class="py-2 px-3 w-100 nav-button">
                                        <span class="dropdown-label">Reclamaciones</span>
                                    </button>
                                </div>
                            </div>
                            <div class="flex-fill">
                                <div class="correccionDeColor">
                                    <a class="py-2 px-3 w-100 normal-nav-link" href="index.html#">
                                        <img class="pr-1 help-icon" src="../../../assets/help_icon.svg">
                                        Ayuda
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </componente-header2>

        <componente-principal>
            <div style="opacity: 1;">
                <div>
                    <div>
                        <section class="ban" style="background-image: url(../../../assets/hero_background.jpg);">
                            <div class="banner-content">
                                <div class="image-container">
                                    <picture>
                                        <source media="(min-width: 48em)" class="main-image" srcset="../../../assets/main_vehicle_image.png">
                                        <img class="main-image" src="../../../assets/main_vehicle_image.png" alt="">
                                    </picture>
                                </div>

                                <componente-placa>
                                    <form>
                                        <div class="main-form-container">
                                            <h1 class="form-title pb-3">Tu
                                                <span class="form-title-bold">SOAT</span>
                                                100% digital
                                            </h1>
                                            <lib>
                                                <div class="mb-3 position-relative">
                                                    <div class="d-flex align-items-center input-wrapper position-relative justify-content-center">
                                                        <input id="placa" class="py-2 px-3 license-plate-input" minlength="6" maxlength="6" type="text" style="text-transform:uppercase">
                                                        <label id="labelplaca" class="mx-2 px-2 mb-0 license-plate-label">Ingresa tu placa</label>
                                                        <i></i>
                                                        <i></i>
                                                    </div>
                                                    <div id="errorSms" class="mensaje-invalidooff text-center">Este campo es requerido</div>
                                                    <div id="errorPlaca" class="mensaje-invalidooff text-center">La placa digitada es inválida</div>
                                                </div>
                                            </lib>
                                            <button type="button" class="button-secondary quote-button">Cotizar</button>
                                        </div>
                                    </form>
                                </componente-placa>
                            </div>
                        </section>
                    </div>

                    <div class="position-relative">
                        <nav class="nav-drogado position-absolute w-100">
                            <div class="divNavBar">
                                <ul class="ulhptajajajsd">
                                    <li class="livirgen">
                                        <a href="index.html#razones-para-comprar">Razones para comprar aquí</a>
                                    </li>
                                    <li class="livirgen">
                                        <a href="index.html#beneficios-del-soat">Beneficios del SOAT</a>
                                    </li>
                                    <li class="livirgen">
                                        <a href="index.html#evita-el-fraude">Evita el fraude</a>
                                    </li>
                                    <li class="livirgen">
                                        <a href="index.html#reclamaciones">¿Cómo reclamas?</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="d-block d-lg-none divNavBarM">
                                <button class="btnDivNavM">Razones para comprar aquí</button>
                            </div>
                        </nav>
                    </div>

                    <section id="razones-para-comprar" class="px-0 px-lg-3 mt-3 mt-md-5 position-relative features-section">
                        <img class="section-background" src="../../../assets/main_banner_image.jpg" alt="img">
                        <div class="w-100 d-flex align-items-center justify-content-end content-panel">
                            <div class="col-12 col-md-7 px-4 px-md-3 px-lg-5 px-xl-2 pt-3">
                                <div class="sections-title mb-4">
                                    <h2 class="h2mid">Con el SOAT SURA vamos más allá</h2>
                                </div>
                                <ul class="vivanlosparacos">
                                    <li class="d-flex align-items-start align-items-md-center flex-column flex-md-row mb-4 boboshptasli">
                                        <figure class="m-0">
                                            <img class="mb-2 mb-md-0" src="../../../assets/feature_icon_01.png" alt="">
                                        </figure>
                                        <div class="pl-md-3">
                                            <p class="prazon1">
                                                <strong>Lo compras directamente con SURA (<a href="index.html#">mira el paso a paso</a>)</strong>
                                                y lo recibes en tu correo electrónico. Conoce las <a href="index.html#">condiciones para la expedición del SOAT.</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start align-items-md-center flex-column flex-md-row mb-4">
                                        <figure class="m-0">
                                            <img class="mb-2 mb-md-0" src="../../../assets/feature_icon_02.png" alt="">
                                        </figure>
                                        <div class="pl-md-3">
                                            <p class="prazon1">Puedes
                                                <strong>renovar tu SOAT con treinta días de anticipación</strong>
                                                a la próxima fecha de vencimiento.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start align-items-md-center flex-column flex-md-row mb-4">
                                        <figure class="m-0">
                                            <img class="mb-2 mb-md-0" src="../../../assets/feature_icon_03.png" alt="">
                                        </figure>
                                        <div class="pl-md-3">
                                            <p class="prazon1">Ten en cuenta que, <strong>si aplicas a los rangos diferenciales por riesgo</strong>, puedes <strong>recibir este</strong> <strong>beneficio </strong>por comprar tu SOAT. <a href="index.html#">Conoce más</a>. </p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start align-items-md-center flex-column flex-md-row mb-4">
                                        <figure class="m-0">
                                            <img class="mb-2 mb-md-0" src="../../../assets/feature_icon_04.png" alt="">
                                        </figure>
                                        <div class="pl-md-3">
                                            <p class="prazon1">Después de descargarlo en la<em> <strong>App</strong></em><strong> Seguros SURA </strong>queda disponible para que lo consultes, incluso <strong>sin tener internet.</strong></p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start align-items-md-center flex-column flex-md-row mb-4">
                                        <figure class="m-0">
                                            <img class="mb-2 mb-md-0" src="../../../assets/feature_icon_05.png" alt="">
                                        </figure>
                                        <div class="pl-md-3">
                                            <p>Conoce nuestros puntos de venta de SOAT y <strong><a href="index.html#">agenda tu cita</a> </strong>para la compra.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section id="beneficios-del-soat" class="container pt-5 titlealineado">
                        <div class="benefe">
                            <div class="okokdieguito">
                                <h2>Beneficios del SOAT</h2>
                            </div>
                            <div class="mb-4 benefep">
                                <p>En caso de tener un accidente de tránsito en territorio colombiano, este documento obligatorio cubre las lesiones o fallecimiento de conductores, pasajeros, o peatones <strong>(no cubre los daños a vehiculos de terceros ni a sus propiedades).</strong></p>
                            </div>
                            <div class="row hptarow">
                                <div class="divsinname col-12 col-md-6 d-flex mb-3">
                                    <div class="vivanlosvenes">
                                        <figure class="m-0">
                                            <img class="mr-4" src="../../../assets/benefit_icon_01.png" alt="">
                                        </figure>
                                        <div>
                                            <div class="tituloBeneH3">
                                                <h3>Gastos de atención médica</h3>
                                            </div>
                                            <div class="descripBene">
                                                <p>Hasta&nbsp;<strong>701.68 UVT (unidades de valor tributario)* </strong>para la atención médica de las personas involucradas en el accidente (seas tú como conductor, los pasajeros o peatones).</p>
                                                <p>* Para los vehículos que son parte del rango diferencial, según el <a href="index.html#">Decreto 2497 de 2022</a>, será hasta&nbsp;<strong>263.13 UVT</strong>.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divsinname col-12 col-md-6 d-flex mb-3">
                                    <div class="vivanlosvenes">
                                        <figure class="m-0">
                                            <img class="mr-4" src="../../../assets/benefit_icon_02.png" alt="">
                                        </figure>
                                        <div>
                                            <div class="tituloBeneH3">
                                                <h3>Respaldo por fallecimiento</h3>
                                            </div>
                                            <div class="descripBene">
                                                <p><strong>750 salarios mínimos diarios legales vigentes</strong> para los beneficiarios de la persona que fallezca como producto del accidente.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divsinname col-12 col-md-6 d-flex mb-3">
                                    <div class="vivanlosvenes">
                                        <figure class="m-0">
                                            <img class="mr-4" src="../../../assets/benefit_icon_03.png" alt="">
                                        </figure>
                                        <div>
                                            <div class="tituloBeneH3">
                                                <h3>Respaldo por incapacidad permanente</h3>
                                            </div>
                                            <div class="descripBene">
                                                <p>Hasta <strong>180 salarios mínimos diarios</strong> <strong>legales vigentes </strong>para ti si quedas con alguna incapacidad permanente como producto del accidente.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divsinname col-12 col-md-6 d-flex mb-3">
                                    <div class="vivanlosvenes">
                                        <figure class="m-0">
                                            <img class="mr-4" src="../../../assets/benefit_icon_04.png" alt="">
                                        </figure>
                                        <div>
                                            <div class="tituloBeneH3">
                                                <h3>Gastos de transporte</h3>
                                            </div>
                                            <div class="descripBene">
                                                <p>Hasta <strong>8.77 UVT (unidades de valor tributario)</strong> para transportarte desde el sitio del accidente hasta un centro médico.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="apdf" href="index.html#"><i class="far iconpdf mr-2"></i> Ver las condiciones de tu SOAT</a>
                        </div>
                    </section>

                    <section id="evita-el-fraude" class="pt-5">
                        <div class="divHPTAAAA">
                            <img src="../../../assets/pricing_image.png" alt="">
                            <div class="tarihptas">
                                <div class="tarihptas1">
                                    <h2>Evita el fraude</h2>
                                </div>
                                <div class="tarihptas2">
                                    <p>Hay personas malintencionadas que ofrecen el SOAT con descuento por WhatsApp, SMS o redes sociales. Asimismo, solicitan que el pago sea mediante tarjetas de crédito. <strong>Todo esto es fraude. ¡No caigas!</strong><br><br>Cómpralo solo por Suraenlinea.com o con tu asesor. <strong><a href="index.html#">Conoce más</a>.</strong></p>
                                </div>
                                <div class="tarihptas3">
                                    <button class="button-primary mr-0 mr-md-3 quote-button">Ver tarifas</button>
                                    <button class="button-primary mt-3 mt-md-0 quote-button">Consultar tu SOAT</button>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="reclamaciones" class="pt-5">
                        <div class="container">
                            <div class="d-flex align-items-center mb-4 pb-4 howcomo">
                                <figure class="mb-0">
                                    <img class="d-none d-md-block" src="../../../assets/support_representative.png" alt="">
                                </figure>
                                <div class="ml-md-4">
                                    <div class="mb-4 pt-3 pt-md-0 gatogordotitle">
                                        <h2>Reclamaciones y otras solicitudes de forma digital</h2>
                                    </div>
                                    <div class="griscomotuvida">
                                        <ul>
                                            <li>Para conocer los requisitos de reclamación de cada cobertura y el proceso a llevar a cabo, ingresa <strong><a href="index.html#">aquí</a>.</strong></li>
                                            <li>Si deseas hacer una reclamación por muerte o incapacidad permanente, necesitas hacer una modificación en tu SOAT o tienes otro tipo de solicitud, radícala <strong><a href="index.html#">aquí</a>.</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="ketamina">
                                    <h3>Ten en cuenta:</h3>
                                </div>
                                <ul class="ulketa pl-0 pl-lg-4 m-o">
                                    <img class="imgketa d-none d-lg-block" src="../../../assets/blue_connector_line.png" alt="">
                                    <li class="ketaminitaoficial px-0 px-md-4 py-2">
                                        <figure>
                                            <img class="gpsgono d-none d-lg-block" src="../../../assets/location_icon.png" alt="">
                                        </figure>
                                        <figure>
                                            <img class="mb-3 mb-md-0" src="../../../assets/info_step_01.png" alt="">
                                        </figure>
                                        <div class="pl-md-3 txtketamanito">
                                            <p>Toda institución prestadora de servicios de salud está obligada a atenderte si eres víctima de un accidente de tránsito.</p>
                                        </div>
                                    </li>
                                    <li class="ketaminitaoficial px-0 px-md-4 py-2">
                                        <figure>
                                            <img class="gpsgono d-none d-lg-block" src="../../../assets/location_icon.png" alt="">
                                        </figure>
                                        <figure>
                                            <img class="mb-3 mb-md-0" src="../../../assets/info_step_02.png" alt="">
                                        </figure>
                                        <div class="pl-md-3 txtketamanito">
                                            <p>Por ley, debes ser trasladado a la institución más cercana después del accidente.</p>
                                        </div>
                                    </li>
                                    <li class="ketaminitaoficial px-0 px-md-4 py-2">
                                        <figure>
                                            <img class="gpsgono d-none d-lg-block" src="../../../assets/location_icon.png" alt="">
                                        </figure>
                                        <figure>
                                            <img class="mb-3 mb-md-0" src="../../../assets/info_step_03.png" alt="">
                                        </figure>
                                        <div class="pl-md-3 txtketamanito">
                                            <p>Tienes dos años para realizar la reclamación por muerte o incapacidad permanente después de ocurrido el hecho (en caso de muerte, lo hacen tus beneficiarios de ley).</p>
                                        </div>
                                    </li>
                                    <li class="ketaminitaoficial px-0 px-md-4 py-2">
                                        <figure>
                                            <img class="gpsgono d-none d-lg-block" src="../../../assets/location_icon.png" alt="">
                                        </figure>
                                        <figure>
                                            <img class="mb-3 mb-md-0" src="../../../assets/info_step_04.png" alt="">
                                        </figure>
                                        <div class="pl-md-3 txtketamanito">
                                            <p><strong>El SOAT no paga las incapacidades temporales</strong>, es decir, aquellas que su duración es por un tiempo determinado (días o meses). Estas deben ser tramitadas por la EPS o ARL a la que te encuentres afiliado. ​​​</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="direcciondeloshptas">
                            <div class="container">
                                <div class="mb-4 cdiv11">
                                    <h3>Para mayor información y para conocer el estado de tu reclamación puedes comunicarte con:</h3>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div>
                                            <h4 class="h4vac"></h4>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <b class="braro mr-3">En Bogotá, Cali o Medellín:</b>
                                            <div class="divraro">
                                                <p>marca&nbsp;601 437 8888&nbsp;desde Bogotá, 604 437 8888 desde Medellín o 602 437 8888 desde Cali (digita tu número de identificación y sigue los pasos que te comunique la grabación).</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <b class="braro mr-3">Línea de atención nacional:</b>
                                            <div class="divraro">
                                                <p>01 8000 51 8888</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <b class="braro mr-3">Horario:</b>
                                            <div class="divraro">
                                                <p>de <strong>lunes a viernes </strong>de 8:00&nbsp;a. m. a 6:00 p. m. y <strong>sábados </strong>de 8:00 a. m. a 12:00 m.​​</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div>
                                            <h4 class="h4vac"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
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

        <div class="modalBienvenida">
            <div class="modal-backdrop fade show"></div>
            <div class="d-block modal fade show">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <button id="cerrarModalManito" class="close position-absolute">
                            <i class="fal fa-times"></i>
                        </button>
                        <div class="modal-body d-flex flex-column align-items-center justify-content-center d-md-block mb-2 mb-md-1 pb-md-4 px-5 pt-4 pb-2">
                            <div class="bodylamondamia">
                                <div class="row justify-content-center">
                                    <div>
                                        <div class="text-center">
                                            <div>
                                                <p><strong>Antes de comprar tu SOAT, es importante que sepas:</strong></p>
                                                <ul class="colorBlueUlJaja">
                                                    <li>Por este medio se expide el SOAT para los vehículos matriculados en Colombia.</li>
                                                    <li>El medio de pago habilitado y autorizado es PSE.</li>
                                                    <li>Si alguien te contacta por WhatsApp para pagar o realizar otro proceso, no caigas.</li>
                                                    <li>Luego de que hayas comprado la póliza, espera 24 horas y <a href="https://www.runt.com.co/consultaCiudadana/#/consultaVehiculo" target="_blank"><strong>verifica aquí</strong></a> que esta haya quedado cargada en el RUNT.</li>
                                                    <!-- <li>Si no puedes comprar de forma digital, programa una cita en el punto físico más cercano. Conócelos y <a href="https://seguros.comunicaciones.sura.com/puntos-fisicos-compra-soat" target="_blank"><strong>agenda aquí</strong></a>.</li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center"><button type="button" class="btnEntendidoModalW">ENTENDIDO</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modalSotoVigente displayNone">
            <div class="modal-backdrop fade show"></div>
            <div class="d-block modal fade show">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body d-flex flex-column align-items-center justify-content-center d-md-block mb-2 mb-md-1 pb-md-4 px-5 pt-4 pb-2">
                            <div class="" style="text-align: center;">
                                <i class="far fa-exclamation-circle rojoServer"></i>
                                <h4 class="h4-11111">
                                    <h4 class="h4-22222 mt-2">Lo sentimos</h4>
                                </h4>
                            </div>
                            <div class="bodylamondamia" style="text-align:center;">
                                <p class="pErrorserver mx-md-5 mb-4"> En este momento tienes el SOAT vigente. Recuerda que puedes comprarlo hasta 30 dias antes de su vencimiento. </p>
                            </div>
                            <div class="text-center"><button type="button" class="btnAceptarModalSotoVigente">ACEPTAR</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>