<?php 

if(file_get_contents('php://input')) {
    ob_clean();
    header_remove(); 
    
    header('Content-Type: application/json');
    http_response_code(200);

    $joke = file_get_contents('php://input');
    $jokeFile = fopen("joke.txt", "w");

    fwrite($jokeFile, $joke);
    json_encode($joke);
    
    echo $joke;
    exit();
}