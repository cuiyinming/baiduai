# baiduai
百度ai,支持对5.6的版本支持
# 安装
composer require cym/baiduai

# 使用
$ai = new Ai('app_id', 'api_key', 'api_secret');
$ocr = $ai->Ocr();


#人脸识别
```

$option = [       
        "face_field" => "age,beauty,expression,face_shape,gender,glasses,landmark,landmark72,landmark150,race,quality,eye_status,emotion,face_type",
        "max_face_num" => 1,
        "face_type" => 'LIVE'
    ];
];
其中url为远程图片地址
$face = $ai->Face()->detect($url, 'URL', $option);
```
        

