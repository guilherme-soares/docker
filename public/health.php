<?php

    try {
        // Simple response
        $response = ['success' => true];

        // Response in JSON format
        echo json_encode($response);
    } catch (\Exception $e) {
        // Oops!
        header("HTTP/1.1 500 Internal Server Error");
    }