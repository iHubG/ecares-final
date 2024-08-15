<?php
header('Content-Type: application/json');

$response = [
    'status' => 'success',
    'message' => 'PIN received successfully.'
];

echo json_encode($response);
