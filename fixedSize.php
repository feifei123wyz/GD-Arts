<?php 
        //サイズ200*200
        // $img = imageCreate(200,200);
        $img = imagecreatetruecolor(200, 200);
        //背景透過
        $backgroundColor = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $backgroundColor); 
        imagecolortransparent($img,$backgroundColor);
        

        //画像の読み込み
        $img_rand =rand(1, 3);
        $option = imageCreateFromJpeg('./img/option2-'.$img_rand.'.jpg');

        $width = imageSx($option)/imageSy($option)*200;
        $height = imageSy($option)/imageSx($option)*200;
        // imageCanvas();

        
        imageCopyResized(
            $img,//コピー先
            $option,//コピー元
            (200-$width)/2,(200-$height)/2,//貼り付け先x,y
            0,0,//貼り付け元x,y
            $width,$height,//貼り付け先横、縦
            imageSx($option),imageSy($option) //コピー元 横、縦
        );

        //HTMl出力
        header("Content-Type: image/jpeg");
        imageJpeg($img);
        //ファイル出力
        imageJpeg($img,'./img/fixedSize.jpg');

?>