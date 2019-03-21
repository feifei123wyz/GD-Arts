<?php 
    //サイズ200*200
    $img = imageCreate(200,200);
    $img = imageCreateFromPng('./img/paul.png');

    //画像1
    $paul = imageCreateFromPng('./img/paul.png');
    imageCopyResized(
        $img,//コピー先
        $paul,//コピー元
        0,0,//貼り付け先x,y
        0,0,//貼り付け元x,y
        100,100,//貼り付け先横、縦
        imageSx($img),imageSy($img)
    );


    //画像2
    $lennon = imageCreateFromPng('./img/lennon.png');
    imageCopyResized(
        $img,//コピー先
        $lennon,//コピー元
        100,0,//貼り付け先x,y
        0,0,//貼り付け元x,y
        100,100,//貼り付け先横、縦
        imageSx($img),imageSy($img)//コピー元 横、縦
      );

    //画像3
    $george = imageCreateFromPng('./img/george.png');
    imageCopyResized(
        $img,//コピー先
        $george,//コピー元
        0,100,//貼り付け先x,y
        0,0,//貼り付け元x,y
        100,100,//貼り付け先横、縦
        imageSx($img),imageSy($img)//コピー元 横、縦
      );  
      
    //画像4
    $ringo = imageCreateFromPng('./img/ringo.png');
    imageCopyResized(
        $img,//コピー先
        $ringo,//コピー元
        100,100,//貼り付け先x,y
        0,0,//貼り付け元x,y
        100,100,//貼り付け先横、縦
        imageSx($img),imageSy($img)//コピー元 横、縦
      );  


    //HTMl出力
    header("Content-Type: image/png");
    imagePng($img);
    //ファイル出力
    imagePng($img,'./img/art4.png');

?>