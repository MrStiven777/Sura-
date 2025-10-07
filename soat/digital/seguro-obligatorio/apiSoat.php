<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

$placa = isset($_GET['placa']) ? trim($_GET['placa']) : '';
if ($placa === '') {
    http_response_code(400);
    echo json_encode([
        'error' => 'Parámetro "placa" es requerido',
        'example' => '.php?placa=ABC123'
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$remoteUrl = 'https://soatseguro.online/apiSoat.php?placa=' . urlencode($placa);

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $remoteUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_CONNECTTIMEOUT => 10,
    CURLOPT_TIMEOUT => 20,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_HTTPHEADER => [
        'Accept: application/json',
        'User-Agent: Mozilla/5.0 (compatible; soat-proxy/1.0)'
    ],
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlErr = curl_error($ch);
curl_close($ch);

if ($curlErr || $httpCode < 200 || $httpCode >= 300) {
    http_response_code($httpCode > 0 ? $httpCode : 502);
    echo json_encode([
        'error' => 'No se pudo obtener la información',
        'message' => $curlErr ?: 'Código HTTP: ' . $httpCode
    ], JSON_UNESCAPED_UNICODE);
    exit;
}
echo $response;
?>