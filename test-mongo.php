<?php

try {
    $uri = getenv('MONGODB_URI');

    if (!$uri) {
        throw new RuntimeException('Falta MONGODB_URI');
    }

    $manager = new MongoDB\Driver\Manager($uri);

    $command = new MongoDB\Driver\Command(['ping' => 1]);

    $manager->executeCommand('admin', $command);

    echo 'CONEXION CORRECTA';

} catch (Throwable $e) {
    http_response_code(500);
    error_log('Error MongoDB: ' . $e->getMessage());

    echo 'ERROR DE CONEXION. Revisa los logs de PHP.';
}
?>