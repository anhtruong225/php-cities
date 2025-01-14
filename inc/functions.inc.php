<?php

function generate_alphabet(){
    $chars = [];
    for($x= ord('A'); $x <=(ord('Z')); $x++ ){
        $chars[] = chr($x); 
    }
    return $chars;
}

function render($path, array $data=[]){
    ob_start();
    extract($data);
    require $path;
    $content= ob_get_contents();
    ob_end_clean();
    $alphabet = generate_alphabet();
    require __DIR__.'/../views/layout/main.view.php';

}
function e($html) {
    return htmlspecialchars($html, ENT_QUOTES, 'UTF-8', true);
}