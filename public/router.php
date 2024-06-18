<?php
// Obtém o caminho da URL
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Verifica se a requisição é para a API
if (strpos($path, '/api') === 0) {
    // Redireciona todas as requisições que começam com /api para api.php
    include __DIR__ . '/api.php';
} else {
    // Todas as outras requisições vão para index.php
    include __DIR__ . '/index.php';
}
