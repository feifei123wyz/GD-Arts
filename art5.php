<?php 
        //サイズ200*200
        $img = imageCreate(200,200);
        //png画像の読み込み
        $img = imageCreateFromPng('./img/bokete.png');
        
        
        $fukidashi = imageCreateFromPng('./img/fukidashi.png');
        $bgd_color = imageColorAllocateAlpha($fukidashi,0,0,0,127);
        //横書き
        // $rotate_fukidashi = imageRotate($fukidashi,-45,$bgd_color);
        // imageCopyResized(
        //     $img,//コピー先
        //     $rotate_fukidashi,//コピー元
        //     50,40,//貼り付け先x,y
        //     0,0,//貼り付け元x,y
        //     160,180,//貼り付け先横、縦
        //     imageSx($img),imageSy($img)
        // );

        imageCopyResized(
            $img,//コピー先
            $fukidashi,//コピー元
            80,40,//貼り付け先x,y
            0,0,//貼り付け元x,y
            110,140,//貼り付け先横、縦
            imageSx($fukidashi),imageSy($fukidashi)
        );

        $y= 60;
        $str =["あ","い","う","え","お"];
        for($i=0;$i<5;$i++){
            $red = imageColorAllocate(
                $img,255,0,0
            );
            imageTTFText($img,
            16,
            0,
            140,
            $y+=20,
            $red,
            'C:\xampp\htdocs\htdocs\ph23\kadai\kadai04\font\HuiFont29.ttf',
            $str[$i]
            );  
        }

   
        //HTMl出力
        header("Content-Type: image/png");
        imagePng($img);
        //ファイル出力
        imagepng($img,'./img/art5.png');

?>