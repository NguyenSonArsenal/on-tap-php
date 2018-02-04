<?php

require 'config.php';


$test = [
    [
        'city' => "Yên Bái",
        'district' =>  "Thành Phố Yên Bái",
        'full' => "307 Nguyễn Thái Học, Hồng Hà, Thành Phố Yên Bái, Yên Bái",
        'name' => "BBQ Pizza - Nguyễn Thái Học",
        'phoneNumber' => '01642236222',
        'website' => 'www.facebook.com/BBQ-PIZZA-YÊN-BÁI-783858018412274'
    ],
    [
        'city' => "Yên Bái",
        'district' =>  "Thành Phố Yên Bái",
        'full' => "307 Nguyễn Thái Học, Hồng Hà, Thành Phố Yên Bái, Yên Bái",
        'name' => "VNP",
        'phoneNumber' => '01642236222',
        'website' => 'www.facebook.com/BBQ-PIZZA-YÊN-BÁI-783858018412274'
    ]
];

foreach ($test as $key => $item)
{
    $sql = "INSERT INTO hotel (name, city, district, full, phoneNumber, website)
            VALUES ('$item[name]', '$item[city]', '$item[district]',
             '$item[full]', '$item[phoneNumber]', '$item[website]')";

    $result = $conn->query($sql);

    if ($result === TRUE)
    {
        echo 1;
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}