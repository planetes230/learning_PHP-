<?php
// Your code here!
$users =['name1'=>'taro',
        'name2'=>'jiro'];
        
        
// echo $users['name1'];


$users2 =['name'=>'taro',
         'height'=>188,
    ['hobby'=>'baseball'
        ]
    ];
        ;
// echo "\n".$users2[0]['hobby'];
// var_dump($users2);

$users3 = ['name'=>['taro','jiro','saburo'],
            'height'=>[180,190,200],
            'weight'=>[80,90,100]
            ];
    
// echo $users3[0]['height'];
foreach($users3 as $key1=>$value1){
    echo $value1[$key1]['name'];
    // foreach($value1 as $value2){
    //     echo $value['name'];
    // }
}



7/14
インデント気を付ける
配列の中に配列を入れるという意識
上記の場合、2回foreachを回す、その際にインデックスを指定することで配列の中の配列を回すことができる

$users = [
    [
        'name' => 'taro',
        'weight' => 290,
        'height' => 130,
        'hobbies' => [
            'お菓子をたべる',
            '寝転がる'
         ]
    ],
    [
        'name' => 'jiro',
        'weight' => 45,
        'height' => 189,
        'hobbies' => [
            '朝走る',
            '本を読む'
         ]
    ],
    
];

foreach($users as $user) {
    echo $user['name']."\n\r";
    echo $user['weight']."\n\r";
    echo $user['height']."\n\r";
    foreach($user['hobbies'] as $hobby) {
        echo $hobby."\n\r";
    }
}



$users = [
    [
        'name' => 'taro',
        'weight' => 290,
        'height' => 130,
        'hobbies' => [
            'お菓子をたべる',
            '寝転がる',
            'variation' => [
                'マーブル',
                'さくやまチョコ次郎'
            ]
         ]
    ],
    [
        'name' => 'jiro',
        'weight' => 45,
        'height' => 189,
        'hobbies' => [
            '朝走る',
            '本を読む'
         ]
    ],
    
];


hobbyの中に配列を増やした場合、echoができなくなった
配列の場合の判定をいれて、foreachで出力する様に変更した
foreach($users as $user) {
   
    echo $user['name']."\n\r";
    
    echo $user['weight']."\n\r";
    
    echo $user['height']."\n\r";
    
    foreach($user['hobbies'] as $hobby) {  
        
        if(!is_array($hobby)){
           
           echo $hobby."\n\r";
       
        } else {
             
             foreach($hobby as $okashi) {
                echo $okashi."\n\r";
             }
        }
     
    }
}

書き始める前に処理を日本語で書いてみる
?>
