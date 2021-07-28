<?php



$users = [
            [
                'name' => '福本悠太',
                'age' => 32,
                'weight' => 68,
                'hobbies' =>[
                                '寝る',
                                'ギターを弾く',
                                'movie' =>[
                                                'ドラマ',
                                                'アニメ'
                                    ]
                    ]
                ],
            [
                'name' => '岸田繁',
                'age' => 48,
                'weight' => 53,
                 'hobbies' =>[
                                '作曲'=>[
                                             'ロック' =>[
                                                 'J-POP',
                                                 'ブルース'
                                                 ],
                                            'クラシック'
                                    ]
                     ]
                ]

];

foreach($users as $user) {
    echo $user['name']."\n\r";
    echo $user['age']."\n\r";
    echo $user['weight']."\n\r";

    foreach($user['hobbies'] as $hobby) {

        if(!is_array($hobby)) {

               echo $hobby."\n\r";

        } else {

            foreach($hobby as $movie) {
                if(is_array($movie)){
                    foreach($movie['作曲'] as $rock){
                        echo $rock;
                    }
                }

                echo $movie."\n\r";
            }
        }
    }

}

//7/28


$users = [
    [
        'name' => '福本悠太',
        'age' => 32,
        'weight' => 68,
        'hobbies' =>[
                        '寝る',
                        'ギターを弾く',
                        '作曲' =>[
                                        'カントリー',
                                        'ブルーグラス'
                            ]
            ]
        ],
    [
        'name' => '岸田繁',
        'age' => 48,
        'weight' => 53,
         'hobbies' =>[
                        '作曲'=>[
                                     'ロック' =>[
                                         'J-POP',
                                         'ブルース'
                                         ],
                                    'クラシック'
                            ]
             ]
        ]

];

foreach($users as $user) {
echo $user['name']."\n\r";
echo $user['age']."\n\r";
echo $user['weight']."\n\r";

foreach($user['hobbies'] as $hobby) {

if(!is_array($hobby)) {

       echo $hobby."\n\r";

} else {

    foreach($hobby as $key => $createSong) {
        if(is_array($createSong)){
           foreach($createSong as $rock) {
               echo $rock;
           }
        } else {

             echo $createSong."\n\r";
        }
    }
}
}

}
?>
//server
https://secure.xfree.ne.jp/server_php/?action_user_domain_index=true

//DB
https://phpmyadmin1.php.xdomain.ne.jp/index.php?db=planetes230_test&token=35e274f3ddbd7cf1eb6b14b0835d6ad2

AWS
https://ap-northeast-1.console.aws.amazon.com/console/home?region=ap-northeast-1