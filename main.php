<?php

header('Content-Type: application/json');
$response = [
        'success' => true,
        'message' => 'CircleCI',
    ];

if (empty($_POST['button_clicked'])) {
    $response['success'] = false;
    $response['message'] = 'Invalid request.';
}

print(json_encode($response));
exit;
