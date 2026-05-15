<?php

use Bpjs\Framework\Helpers\Api;
use Bpjs\Framework\Helpers\Response;

Api::get('/test', function(){
    return json([
        'status' => 200,
        'message' => 'Api success'
    ],200);
});
