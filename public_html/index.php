<?php
    header('Content-Type: application/json');

    require_once '../vendor/autoload.php';

    if($_GET['url']) {
        $url = explode('/', $_GET['url']);

        if($url[0] === 'api') {

            array_shift($url); //remove o primeiro registro, no caso 'api'
            $service = 'Victo\ApiRestExercicio\Services\\' . ucfirst($url[0]) . 'Service';
            array_shift($url);

            $method = strtolower($_SERVER['REQUEST_METHOD']);

            try {
                $response = call_user_func_array([new $service, $method], $url);

                http_response_code(200);

                echo json_encode(['status' => 'success', 'data' => $response], JSON_UNESCAPED_UNICODE);
                exit;

            } catch(\Exception $e) {

                http_response_code(404);

                echo json_encode(['status' => 'error', 'data' => $e->getMessage()], JSON_UNESCAPED_UNICODE);
                exit;

            }
        }
    }