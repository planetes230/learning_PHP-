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
?>
