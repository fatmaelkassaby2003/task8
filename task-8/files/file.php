<?php 

    $items=
    [

        [
            "name" => "John",
            "email" => "j@j.com",
            "password" => "12345",
            "type" => "male"
        ],
        [
            "name" => "ali",
            "email" => "a@j.com",
            "password" => "12345",
            "type" => "male"
        ],
        [
            "name" => "mona",
            "email" => "m@j.com",
            "password" => "12345",
            "type" => "female"
        ],

    ];
    //file_put_contents("data.txt",$items[2]."\n", FILE_APPEND);

    foreach($items as $item)
    {
        $item = implode(",",$item)."</br>\n ";
        file_put_contents("data.txt",$item, FILE_APPEND);
    }
    // echo"<br>";
    // echo"<br>";
    