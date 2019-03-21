<?php 
    //サイズ200*200
    $img = imageCreate(200,200);
    //png画像の読み込み
    $img = imageCreateFromPng('./img/kitty.png');
    
    //おやじ加工
    $lavender = imageColorAllocate(
        $img,
        184,101,204
    );
    imageFilledRectangle($img,
        50,70,  //始点x,y
        150,80,  //終点x,y
        $lavender
    );

    //円盤
    //1red
    $red = imageColorAllocate(
        $img,
        255,0,0
    );
    imageFilledEllipse(
        $img,
        199,199,
        139,139,
        $red
    );

    //2orange
    $orange = imageColorAllocate(
        $img,
        255,165,0
    );
    imageFilledEllipse(
        $img,
        199,199,
        119,119,
        $orange
    );

    //3yellow
    $yellow = imageColorAllocate(
        $img,
        255,255,0
    );
    imageFilledEllipse(
        $img,
        199,199,
        99,99,
        $yellow
    );

    //4green
    $green = imageColorAllocate(
        $img,
        0,128,0
    );
    imageFilledEllipse(
        $img,
        199,199,
        79,79,
        $green
    );  

    //5blue
    $blue = imageColorAllocate(
        $img,
        0,255,255
    );
    imageFilledEllipse(
        $img,
        199,199,
        59,59,
        $blue
    );    

    //6indigo
    $indigo = imageColorAllocate(
        $img,
        0,0,255
    );
    imageFilledEllipse(
        $img,
        199,199,
        39,39,
        $indigo
    );
    
    //7purple
    $purple = imageColorAllocate(
        $img,
        128,0,128
    );
    imageFilledEllipse(
        $img,
        199,199,
        19,19,
        $purple
    );



    //HTMl出力
    header("Content-Type: image/png");
    imagePng($img);
    //ファイル出力
    imagePng($img,'./img/art3.png');
?>