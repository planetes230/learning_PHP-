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



//7/14
//インデント気を付ける
//配列の中に配列を入れるという意識
//上記の場合、2回foreachを回す、その際にインデックスを指定することで配列の中の配列を回すことができる

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


//hobbyの中に配列を増やした場合、echoができなくなった
//配列の場合の判定をいれて、foreachで出力する様に変更した
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

//書き始める前に処理を日本語で書いてみる



$users = [
    [
        'name' => '福本',
        'hobbies' => [ 
            'バイク',
            'ギター',
            '昼寝',
            '映画鑑賞',
            102
        ]
    
    ],
    [
        'name' => '趙さん',
        'age' => '40代',
        'hobbies' => '映画鑑賞'
    ],
    [
        'name' => 'ズオンさん',
        'age' => 25
    ]
];

foreach($users as $key =>$user) {
    if($key == 1) continue;  //breakという手段もある　//関数の場合はreturn→以降の処理を呼び出さない //趙さんを出力しない
    
    echo $user['name']."\r\n";
    
    //ageがない場合不明です。と出力する
    if(!empty($user['age'])) {
        echo $user['age']."\r\n";
    } else {
        echo '不明です。'."\r\n";
    }
    
    //hobbiesがない場合、なにもしない
    if(!empty($user['hobbies'])) {
        //配列の場合ループでhobbiesを出力する
        if(is_array($user['hobbies'])) {
            foreach($user['hobbies'] as $hobby) {
                echo $hobby."\r\n";
            }
        //配列ではない場合echoでhobbiesを出力する
        } else {
            echo $user['hobbies']."\r\n";
        }
    }
};

//インデントの徹底、見やすくする意識、コメントをいれる、改行を入れて見やすくする（一つの処理ごとに分ける）

?>


<?php
// Your code here!


function call_kaigyou($user) {
    $kaigyou = "\r\n";
    return $user.$kaigyou;
}

function sumAge($users) {
    //変数の初期化は必須
    $sumUserAge =0;

    //usersを取得し、foreachで回す
    foreach($users as $user) {
        
        //取得してきたageを足す
        if(!empty($user['age'])) {
            //undefined errorが出た場合には、ifでemptyで回避
            $sumUserAge += $user['age'];
        }
    }
     //足したageを戻す
     //foreachの処理が終わった後に返す必要がある、外でないと一回目で処理が終わってしまう
    return $sumUserAge;
}

$users = [
    [
        'name' => '福本',
        'hobbies' => [ 
            'バイク',
            'ギター',
            '昼寝',
            '映画鑑賞',
            102
        ]
    
    ],
    [
        'name' => '趙さん',
        'age' => 40,
        'hobbies' => '映画鑑賞'
    ],
    [
        'name' => 'ズオンさん',
        'age' => 25
    ]
];

foreach($users as $key =>$user) {
    // if($key == 1) continue;  //breakという手段もある　//関数の場合はreturn→以降の処理を呼び出さない //趙さんを出力しない
    
    //echo $user['name']."\r\n";
     echo call_kaigyou($user['name']);
    //ageがない場合不明です。と出力する
    if(!empty($user['age'])) {
        echo call_kaigyou($user['age']);
         
    } else {
        $unknown ='不明です。';
         echo call_kaigyou($unknown);
    }
        

  
    //hobbiesがない場合、なにもしない
    if(!empty($user['hobbies'])) {
        //配列の場合ループでhobbiesを出力する
        if(is_array($user['hobbies'])) {
            foreach($user['hobbies'] as $hobby) {
                 echo call_kaigyou($hobby);
            }
        //配列ではない場合echoでhobbiesを出力する
        } else {
             echo call_kaigyou($user['hobbies']);
        }
    }
};

echo sumAge($users);
?>
