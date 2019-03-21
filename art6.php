<?php 
        //サイズ200*200
        $img = imageCreate(200,200);
        //png画像の読み込み
        $img = imageCreateFromPng('./img/gaga.png');
        
        //リボン
        $ribbon = imageCreateFromPng('./img/ribbon.png');
        $bgd_ribbon = imageColorAllocateAlpha($ribbon,0,0,0,127);
        $rotate_ribbon = imageRotate($ribbon,20,$bgd_ribbon);
        imageCopyResized(
            $img,//コピー先
            $rotate_ribbon,//コピー元
            90,-20,//貼り付け先x,y
            0,0,//貼り付け元x,y
            120,120,//貼り付け先横、縦
            imageSx($rotate_ribbon),imageSy($rotate_ribbon)
        );   

        //骨
        $bone = imageCreateFromPng('./img/bone.png');
        $bgd_bone = imageColorAllocateAlpha($bone,0,0,0,127);
        $rotate_bone = imageRotate($bone,0,$bgd_bone);
        imageCopyResized(
            $img,//コピー先
            $rotate_bone,//コピー元
            20,110,//貼り付け先x,y
            0,0,//貼り付け元x,y
            173,36,//貼り付け先横、縦
            imageSx($rotate_bone),imageSy($rotate_bone)
        ); 


        //雪
        $crystal = imageCreateFromPng('./img/crystal.png');
        $bgd_crystal = imageColorAllocateAlpha($crystal,0,0,0,127);
        $rotate_crystal = imageRotate($crystal,0,$bgd_crystal);
        for($i=0;$i<20;$i++){
            imageCopyResized(
                $img,//コピー先
                $rotate_crystal,//コピー元
                rand(0, 199),rand(0, 199),//貼り付け先x,y
                0,0,//貼り付け元x,y
                rand(10, 50),rand(10, 50),//貼り付け先横、縦
                imageSx($rotate_crystal),imageSy($rotate_crystal)
            ); 
        }
     
        //HTMl出力
        header("Content-Type: image/png");
        imagePng($img);
        //ファイル出力
        imagePng($img,'./img/art6.png');

?>