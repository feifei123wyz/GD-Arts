<?php 
    //サイズ200*200
    $img = imageCreate(200,200);
    $r = 255;
    $g = 0;
    $b = 0;

    $strat_xy =0;
    $end_xy = 200;

    for($i = 0;$i < 5;$i++){
        $bg_color = imageColorAllocate(
            $img,
            $r-=30,$g+=30,$b+=30
        );
        imageFilledRectangle($img,
            $strat_xy=$strat_xy+=10,$strat_xy=$strat_xy+=10,  //始点x,y
            $end_xy-=10,$end_xy-=10,  //終点x,y
            $bg_color
        );
    }

    //HTMl出力
    header("Content-Type: image/jpeg");
    imageJpeg($img);
    //ファイル出力
    imageJpeg($img,'./img/art2.jpg');
?>