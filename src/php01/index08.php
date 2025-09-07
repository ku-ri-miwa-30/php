<?php
$people = array('Taro', 'Jiro', 'Saburo');
var_dump($people);

echo '<br>', $people[0], '<br>';

/*連想配列*/ 
$people2 = array(
   'parson1' => 'Taro', 
   'parson2' => 'Jiro',
   'person3' => 'Saburo'
);

var_dump($people2);

$people3 = [
    'person4' => 'taro',
    'person5' => 'jiro',
];

echo '<br>', $people2['parson1'].'<br>';

$people4 = [
 
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age"=>29,
        "gender" => "男性"
    ],
    [
        "last_name" => "a",
        "first_name" => "b",
        "age"=>'89',
        "gender" => "k"
    ],
    [
        "last_name" => "komiko",
        "first_name" => "rol",
        "age"=>29,
        "gender" => "kof"
    ]
    ];

    echo $people4[2]["last_name"], '<br>', '<br>';

    $people_name=[
        [  
            'human1'=>"Taro",
            'old'=>25,
            'gender'=>'men',
        ],
        [
            'human1'=>"Jiro",
            'old'=>20,
            'gender'=>'men',
            
        ],
        [
            'human1'=>"hanako",
            'old'=>16,
            'gender'=>'women',
        ]
    ];

    foreach($people_name as $human) 
    {
        print $human['human1'].'('.$human['old'].')'.'歳'.$human['gender'].'<br>';
    }

