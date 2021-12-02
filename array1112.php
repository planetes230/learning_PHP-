<?php

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

// function sumAge($users) {
//     //変数の初期化は必須
//     $sumUserAge =0;

//     //usersを取得し、foreachで回す
//     foreach($users as $user) {

//         //取得してきたageを足す
//         if(!empty($user['age'])) {
//             //undefined errorが出た場合には、ifでemptyで回避
//             $sumUserAge += $user['age'];
//         }
//     }
//      //足したageを戻す
//      //foreachの処理が終わった後に返す必要がある、外でないと一回目で処理が終わってしまう
//     return $sumUserAge;
// }

function call_kaigyou($user) {
    $kaigyou = "\r\n";
    return $user.$kaigyou;
}

function name_change($users) {
    //changeNameの初期化
    $changeName = '';

    //usersを取得してforeachで回す
    foreach($users as $key =>$user) {
        //ageがあればを名前を書き換える
        if(!empty($user['age'])) {
            $users[$key]['name'] = $user['age'].'歳の'.$user['name'].'です。';
        } else {
            $users[$key]['name'] = '年齢不明の'.$user['name'].'です。';

        }



    }
    return $users;
}

function add_info($users) {
    foreach($users as $key =>$user) {
        //ageがあればinfoのカラムを追加する
        if(!empty($user['age'])) {
            $users[$key]['info'] =1;
        } else {
           unset($users[$key]);
        }  
    }
    return $users;
}
// foreach($users as $key =>$user) {
//     // if($key == 1) continue;  //breakという手段もある　//関数の場合はreturn→以降の処理を呼び出さない //趙さんを出力しない

//      echo call_kaigyou($user['name']);
//     //ageがない場合不明です。と出力する
//     if(!empty($user['age'])) {
//         echo call_kaigyou($user['age']);

//     } else {
//         $unknown ='不明です。';
//          echo call_kaigyou($unknown);
//     }

//     //hobbiesがない場合、なにもしない
//     if(!empty($user['hobbies'])) {
//         //配列の場合ループでhobbiesを出力する
//         if(is_array($user['hobbies'])) {
//             foreach($user['hobbies'] as $hobby) {
//                  echo call_kaigyou($hobby);
//             }
//         //配列ではない場合echoでhobbiesを出力する
//         } else {
//              echo call_kaigyou($user['hobbies']);
//         }
//     }
// };

// echo sumAge($users);
// var_dump(name_change($users));

var_dump(add_info($users));


//infoを追加
//ageがない人がいればuserを削除

?>
