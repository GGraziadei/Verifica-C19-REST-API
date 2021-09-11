<?php
header('Content-Type: application/json; charset=utf-8');
require __DIR__ . '/vendor/autoload.php';

use \Masterix21\GreenPass\Services\Decoder;

$qrCodeRequest = $_POST['qrCodeStr'];

try{
    if(isset($qrCodeRequest)){
        $qrCodeStr = $qrCodeRequest ;
        $qrCode = Decoder::qrcode($qrCodeStr);
        echo(json_encode($qrCode));
    } else{
        errorPrint();
    }
}catch(Exception ){
    errorPrint();
}

function errorPrint(){
    echo(json_encode(
        array(
            'data'=>404
        )
    ));
}



