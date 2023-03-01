<?php

return [
    "api" => [
        "location" => [
            "url" => env("IP_LOCATION_API_URL", "http://ip-api.com/json")
        ]
    ],
    "proxy" => [
        "headers" => [
            "forward" => env("PROXY_IP_FORWARD_HEADER", "CF-Connecting-IP")
        ]
    ]
];