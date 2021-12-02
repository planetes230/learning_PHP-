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
function add_info($users) {
    foreach($users as $key =>$user) {
        //ageがあればinfoのカラムを追加する
        if(!empty($user['age'])) {
            $users[$key]['info'] = $user['age'] . '歳の' . $user['name'] . 'です。' ;
        } else {
            //ageがなければ要素を削除
           unset($users[$key]);
        }  
    }
    return $users;
}

var_dump(add_info($users));

?>