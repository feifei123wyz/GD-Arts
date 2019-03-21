<?php 
    //サイズ200*200
    $img = imageCreate(200,200);

    for($i =0; $i<10;$i++){
        $randcolor = imageColorAllocate(
            $img,
            rand(0, 255), rand(0, 255), rand(0, 255)
        );
            imageFilledRectangle($img,
            rand(0, 199),rand(0, 199),  //始点x,y
            rand(0, 199),rand(0, 199),  //終点x,y
            $randcolor
        );
        
    }
    
    //HTMl出力
    header("Content-Type: image/jpeg");
    imageJpeg($img);
    //ファイル出力
    imageJpeg($img,'./img/art1.jpg');
?>