<?php
try {
    require('./FourElements.php');
    $number = $_GET['number'] ?? 5;
    $class = new FourElements();
    $data = $class->getFourElements($number);
    echo json_encode([
        'code' => 0,
        'msg' => 'success',
        'count' => $number,
        'data' => $data
    ], JSON_UNESCAPED_UNICODE);
} catch (\Exception | \Error $e) {
    echo json_encode([
        'code' => 500,
        'msg' => '报错啦!!! [' . $e->getMessage() . ']',
        'count' => 0,
        'data' => []
    ], JSON_UNESCAPED_UNICODE);
}




